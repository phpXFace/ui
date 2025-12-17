<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class BorderPane extends AbstractComposite implements IBorderPane {

	const STYLE_CLASS_BORDERPANE        = 'pxf-borderpane';
	const STYLE_CLASS_BORDERPANE_ROW    = 'pxf-borderpane-row';
	const STYLE_CLASS_BORDERPANE_TOP    = 'pxf-borderpane-top';
	const STYLE_CLASS_BORDERPANE_RIGHT  = 'pxf-borderpane-right';
	const STYLE_CLASS_BORDERPANE_BOTTOM = 'pxf-borderpane-bottom';
	const STYLE_CLASS_BORDERPANE_LEFT   = 'pxf-borderpane-left';
	const STYLE_CLASS_BORDERPANE_CENTER = 'pxf-borderpane-center';

	/**
	 * @var IPane
	 */
	private $top = null;

	/**
	 * @var IPane
	 */
	private $right = null;

	/**
	 * @var IPane
	 */
	private $bottom = null;

	/**
	 * @var IPane
	 */
	private $left = null;

	/**
	 * @var IPane
	 */
	private $center = null;

	/**
	 * @var IPane
	 */
	private $borderPane = null;

	/**
	 * @var IPane
	 */
	private $borderPaneRow = null;

	public function __construct() {
		$this->borderPane = new Pane();
		$this->borderPane->getProperties()->addClass( self::STYLE_CLASS_BORDERPANE );
		$this->center = new Pane();
		$this->borderPaneRow = new Pane();
		$this->borderPaneRow->getProperties()->addClass( self::STYLE_CLASS_BORDERPANE_ROW );

		$layer = new Pane();
		$layer->getProperties()->addClass( 'pxf-borderpane-layer' );
		$this->borderPane->add( $layer );
	}

	public function setTop( IComponent $component, array $attributes = array() ) {
		$this->top = new Pane();
		$this->top->getProperties()->addClass( self::STYLE_CLASS_BORDERPANE_TOP );
		$this->top->add( $component );
		$this->setElementAttributes( $this->top, $attributes );
		return $this;
	}

	public function setRight( IComponent $component, array $attributes = array() ) {
		$this->right = new Pane();
		$this->right->getProperties()->addClass( self::STYLE_CLASS_BORDERPANE_RIGHT );
		$this->right->add( $component );
		$this->setElementAttributes( $this->right, $attributes );
		return $this;
	}

	public function setBottom( IComponent $component, array $attributes = array() ) {
		$this->bottom = new Pane();
		$this->bottom->getProperties()->addClass( self::STYLE_CLASS_BORDERPANE_BOTTOM );
		$this->bottom->add( $component );
		$this->setElementAttributes( $this->bottom, $attributes );
		return $this;
	}

	public function setLeft( IComponent $component, array $attributes = array() ) {
		$this->left = new Pane();
		$this->left->getProperties()->addClass( self::STYLE_CLASS_BORDERPANE_LEFT );
		$this->left->add( $component );
		$this->setElementAttributes( $this->left, $attributes );
		return $this;
	}

	public function setCenter( IComponent $component, array $attributes = array() ) {
		$this->center->add( $component );
		$this->setElementAttributes( $this->center, $attributes );
		return $this;
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->borderPane->getProperties();
	}

	protected function getDraw() {

		if ( !is_null( $this->top ) ) {
			$this->borderPane->add( $this->top );
		}

		if ( !is_null( $this->left ) ) {
			$this->borderPaneRow->add( $this->left );
			if ( is_null( $this->bottom ) ) {
				$this->left->getProperties()->addClass( 'pxf-borderpane-row-without-bottom' );
			}
			if ( is_null( $this->top ) ) {
				$this->left->getProperties()->addClass( 'pxf-borderpane-row-without-top' );
			}
		}
		$this->borderPaneRow->add( $this->center );

		if ( !is_null( $this->right ) ) {
			$this->borderPaneRow->add( $this->right );
			$this->center->getProperties()->addClass( 'pxf-borderpane-center_rl' );
			if ( is_null( $this->bottom ) ) {
				$this->right->getProperties()->addClass( 'pxf-borderpane-row-without-bottom' );
			}
			if ( is_null( $this->top ) ) {
				$this->right->getProperties()->addClass( 'pxf-borderpane-row-without-top' );
			}
		} else {
			if( is_null( $this->left ) ){
				$this->center->getProperties()->addClass( 'pxf-borderpane-center' );
			}else{
				$this->center->getProperties()->addClass( 'pxf-borderpane-center_l' );
			}
		}
		$this->borderPane->add( $this->borderPaneRow );
		if ( !is_null( $this->bottom ) ) {
			$this->borderPane->add( $this->bottom );
		}

		return $this->borderPane->render();
	}

	/**
	 * @param \phpXFace\core\ui\viewport\common\IComponent $component
	 * @param array $attributes
	 */
	private function setElementAttributes( IComponent &$component, array $attributes ) {
		if( count( $attributes ) > 0 ) {
			foreach( $attributes[ '@attributes' ] as $key => $value ) {
				$component->getProperties()->addAttribute( $key, $value );
			}
		}
	}

}

?>
