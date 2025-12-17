<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Pane extends AbstractComposite implements IPane {

	/**
	 * @var Container
	 */
	private $pane = null;

	public function __construct() {
		$this->pane = new Container();
		$this->pane->getAttributes()->addClass( 'pxf-pane' );
	}

	protected function getDraw() {
		return $this->pane;
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->pane->getAttributes();
	}
}

?>
