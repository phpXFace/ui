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
class VBox extends AbstractComposite implements IVBox {

	/**
	 * @var Container
	 */
	private $vbox = null;

	public function __construct() {
		$this->vbox = new Pane();
		$this->vbox->getProperties()->addClass( 'pxf-vbox' );
	}

	public function addChildren( IComponent &$component, array $attributes = array() ) {
		$pane = new Pane();
		$pane->add( $component );

		if ( array_key_exists( 'position', $attributes[ '@attributes' ] ) && $attributes[ '@attributes' ][ 'position' ] === 'right' && count( $attributes ) > 0 ) {
			$pane->getProperties()->addClass( 'navbar-right' );
		}

		if ( array_key_exists( 'grid', $attributes[ '@attributes' ] ) && count( $attributes ) > 0 ) {
			$pane->getProperties()->addClass( "col-md-{$attributes[ '@attributes' ]['grid']}" );
		} else {
			$pane->getProperties()->addClass( 'pxf-vbox-children' );
		}

		if ( array_key_exists( 'class', $attributes[ '@attributes' ] ) && count( $attributes ) > 0 ) {
			$pane->getProperties()->addClass( $attributes[ '@attributes' ]['class'] );
		}

		parent::add( $pane );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->vbox->getProperties();
	}

	protected function getDraw() {

		return $this->vbox->render();
	}
}

?>
