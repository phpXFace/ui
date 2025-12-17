<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ScrollPane extends AbstractComposite implements IScrollPane {

	/**
	 * @var Container
	 */
	private $scrollPane = null;

	public function __construct() {
		$this->scrollPane = new Container();
		$this->scrollPane->getAttributes()->addClass( 'pxf-scrollpane' );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->scrollPane->getAttributes();
	}

	protected function getDraw() {
		return $this->scrollPane;
	}
}

?>
