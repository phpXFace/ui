<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Icon extends AbstractComponent implements IIcon {

	/**
	 * @var Span
	 */
	private $icon = null;

	/**
	 * @var string
	 */
	private $type = null;

	/**
	 * @var null
	 */
	private $context = 'glyphicon';

	public function __construct() {
		$this->icon = new Span();
		$this->icon->getAttributes()->addClass( 'pxf-icon' );
	}

	public function setType( $type ) {
		$this->type = $type;
	}

	/**
	 * @return null
	 */
	public function getContext() {
		return $this->context;
	}

	/**
	 * @param null $context
	 */
	public function setContext( $context ) {
		$this->context = $context;
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->icon->getAttributes();
	}

	protected function getDraw() {
		$this->icon->getAttributes()->addClass( "pxf-icon-{$this->context}" );
		$this->icon->getAttributes()->addClass( "{$this->context}-{$this->type}" );
		return $this->icon;
	}
} 
