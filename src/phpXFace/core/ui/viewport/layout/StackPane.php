<?php

namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class StackPane extends AbstractComposite implements IStackPane {

	/**
	 * @var Container
	 */
	private $stackPane = null;

	public function __construct() {
		$this->stackPane = new Container();
		$this->stackPane->getAttributes()->addClass( 'pxf-stackpane' );
	}

	public function addChildren( IComponent $component ) {
		$pane = new Pane();
		$pane->add( $component );
		$pane->getProperties()->addClass( 'pxf-stackpane-children' );
		parent::add( $pane );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->stackPane->getAttributes();
	}

	protected function getDraw() {
		return $this->stackPane;
	}

}

?>
