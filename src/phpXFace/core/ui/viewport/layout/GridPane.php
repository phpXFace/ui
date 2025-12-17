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
class GridPane extends AbstractComposite implements IGridPane {

	/**
	 * @var Container
	 */
	private $gridPane = null;

	public function __construct() {
		$this->gridPane = new Container();
		$this->gridPane->getAttributes()->addClass( 'pxf-gridpane' );
	}

	public function addChildren( IComponent $component ) {
		$pane = new Pane();
		$pane->add( $component );
		$pane->getProperties()->addClass( 'pxf-gridpane-children' );
		parent::add( $pane );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->gridPane->getAttributes();
	}

	protected function getDraw() {
		return $this->gridPane;
	}
}

?>
