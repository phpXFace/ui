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
class AccordionItem extends AbstractComposite implements IPanel {

	/**
	 * @var Pane
	 */
	private $panel = null;

	/**
	 * @var Pane
	 */
	private $body = null;

	/**
	 * @var Pane
	 */
	private $innerBody = null;

	/**
	 * @var Pane
	 */
	private $header = null;

	public function __construct() {
		$this->panel = new Pane();
		$this->panel->getProperties()->addClass( 'panel pxf-panel-default' );
	}

	public function setHeader( IComponent $component, array $attributes = array()  ) {
		if ( is_null( $this->header ) ) {
			$this->header = new Pane();
			$this->header->getProperties()->addClass( 'pxf-panel-heading' );
			$this->header->getProperties()->setRole( 'tab' );

			if( count( $attributes ) > 0 ) {
				foreach( $attributes[ '@attributes' ] as $attribute => $value ) {
					$this->header->getProperties()->addAttribute( $attribute, $value );
				}
			}
		}
		$this->header->add( $component );
	}

	public function setBody( IComponent $component, array $attributes = array() ) {
		if ( is_null( $this->body ) ) {
			$this->body = new Pane();
			$this->body->getProperties()->addClass( 'panel-collapse collapse' );
			$this->body->getProperties()->setRole( 'tabpanel' );

			$this->innerBody = new Pane();
			$this->innerBody->getProperties()->addClass( 'pxf-panel-body' );

			if( count( $attributes ) > 0 ) {
				foreach( $attributes[ '@attributes' ] as $attribute => $value ) {
					if( $attribute === 'id' ) {
						$this->body->getProperties()->setId( $value );
					}
				}
			}

		}
		$this->innerBody->add( $component );
		$this->body->add( $this->innerBody );
	}

	protected function getDraw() {
		if ( !is_null( $this->header ) ) {
			$this->panel->add( $this->header );
		}
		if ( !is_null( $this->body ) ) {
			$this->panel->add( $this->body );
		}

		return $this->panel->render();
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->panel->getProperties();
	}
} 
