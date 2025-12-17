<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\lib\aggregation\Aggregate;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\layout\Pane;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class IncludeSource extends AbstractComposite {

	/**
	 * @var Pane
	 */
	private $include = null;

	/**
	 * @var string
	 */
	private $source = null;

	public function __construct() {
		$this->include = new Pane();
	}

	/**
	 * Re-Aggregate Source / Inherited View
	 */
	public function __wakeup() {
		$this->aggregate();
	}

	/**
	 * Removes Inheriting View before serializing.
	 *
	 * @return array
	 */
	public function __sleep() {
		$this->include->removeAll();
		return array( 'source', 'include' );
	}

	/**
	 * Set the source path of the xml to be included
	 *
	 * @param string $source
	 */
	public function setSource( $source ) {
		$this->source = $source;
		$this->aggregate();
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->include->getProperties();
	}

	protected function getDraw() {
		return $this->include->render();
	}

	/**
	 * Aggregate source
	 */
	public function aggregate() {
		$aggregate = new Aggregate();
		$components = $aggregate->load( $this->source );
		$this->include->add( $components );
	}
}

?>
