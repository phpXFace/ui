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
class FlowPane extends AbstractComposite implements IFlowPane {

	/**
	 * @var Container
	 */
	private $flowPane = null;

	public function __construct() {
		$this->flowPane = new Container();
		$this->flowPane->getAttributes()->addClass( 'pxf-flowpane' );
	}

	public function addChildren( IComponent $component ) {
		$pane = new Pane();
		$pane->add( $component );
		$pane->getProperties()->addClass( 'pxf-flowpane-children' );
		parent::add( $pane );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->flowPane->getAttributes();
	}

	protected function getDraw() {
		return $this->flowPane;
	}
}

?>
