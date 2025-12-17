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
class HBox extends AbstractComposite implements IHBox {

	/**
	 * @var Container
	 */
	private $hbox = null;

	public function __construct() {
		$this->hbox = new Pane();
		$this->hbox->getProperties()->addClass( 'pxf-hbox' );
	}

	public function addChildren( IComponent &$component, array $attributes = array() ) {
		$pane = new Pane();
		$pane->add( $component );
		$pane->getProperties()->addClass( 'pxf-hbox-children' );

		if( count( $attributes ) > 0 ) {
			foreach( $attributes[ '@attributes' ] as $attribute => $value ) {
				if( $attribute === 'position' && $value === 'right' ) {
					$pane->getProperties()->addClass( 'navbar-right' );
				} elseif( $attribute === 'grid' ) {
					if( is_numeric( $value ) ) {
						$pane->getProperties()->addClass( "col-xs-{$value}" );
						$pane->getProperties()->addClass( "col-sm-{$value}" );
						$pane->getProperties()->addClass( "col-md-{$value}" );
						$pane->getProperties()->addClass( "col-mlg-{$value}" );
					} else {
						$grids = explode( ' ', $value );
						foreach( $grids as $grid ) {
							$pane->getProperties()->addClass( "col-{$grid}" );
						}
					}
				} elseif( $attribute === 'offset' ) {
					if( is_numeric( $value ) ) {
						$pane->getProperties()->addClass( "col-xs-offset-{$value}" );
						$pane->getProperties()->addClass( "col-sm-offset-{$value}" );
						$pane->getProperties()->addClass( "col-md-offset-{$value}" );
						$pane->getProperties()->addClass( "col-lg-offset-{$value}" );
					} else {
						$offsets = explode( ' ', $value );
						foreach( $offsets as $offset ) {
							$offset = explode( '-', $offset );
							$pane->getProperties()->addClass( "col-{$offset[0]}-offset-{$offset[1]}" );
						}
					}
				} elseif( $attribute === 'class' ) {
					$pane->getProperties()->addClass( $value );
				} else {
					$pane->getProperties()->addAttribute( $attribute, $value );
				}
			}
		}
		parent::add( $pane );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->hbox->getProperties();
	}

	protected function getDraw() {
		return $this->hbox->render();
	}
}

?>
