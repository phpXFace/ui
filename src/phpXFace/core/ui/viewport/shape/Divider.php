<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Divider extends AbstractComponent implements IDivider {

	/**
	 * @var Container
	 */
	private $divider = null;

	public function __construct() {
		$this->divider = new Container();
		$this->divider->getAttributes()->addClass( 'pxf-divider' );
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->divider->getAttributes();
	}

	protected function getDraw() {
		return $this->divider;
	}
} 
