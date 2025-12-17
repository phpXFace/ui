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
class Panel extends AbstractComposite implements IPanel {

	/**
	 * @var Pane
	 */
	private $panel = null;

	/**
	 * @var Pane
	 */
	private $body = null;

	private $header = null;

	public function __construct() {
		$this->body = new Pane();
		$this->body->getProperties()->addClass( 'pxf-panel-body' );

		$this->panel = new Pane();
		$this->panel->getProperties()->addClass( 'pxf-panel' );
		$this->panel->getProperties()->addClass( 'pxf-panel-default' );

	}

	public function add( IComponent &$component ) {
		$this->body->add( $component );
	}

	/**
	 * @param IComponent $component
	 */
	public function setHeader( IComponent $component ) {
		if ( is_null( $this->header ) ) {
			$this->header = new Pane();
			$this->header->getProperties()->addClass( 'pxf-panel-heading' );
		}
		$this->header->add( $component );
	}

	/**
	 * @return null
	 */
	public function getHeader() {
		return $this->header;
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
