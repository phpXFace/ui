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
class SplitPane extends AbstractComposite implements ISplitPane {

	/**
	 * @var Container
	 */
	private $splitPane = null;

	public function __construct() {
		$this->splitPane = new Container();
		$this->splitPane->getAttributes()->addClass( 'pxf-splitpane' );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->splitPane->getAttributes();
	}

	protected function getDraw() {
		return $this->splitPane;
	}
}

?>
