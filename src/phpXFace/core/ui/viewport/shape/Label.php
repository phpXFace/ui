<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\Heading;
use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\html\ISpan;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Label extends AbstractComponent implements ILabel {

	/**
	 * @var ISpan
	 */
	private $span = null;

	/**
	 * @var string
	 */
	private $text = null;

	/**
	 * @var string
	 */
	private $type = null;

	/**
	 * @var int
	 */
	private $size = null;

	public function __construct( $text = '' ) {
		$this->span = new Span();
		$this->setText( $text );
		$this->span->getAttributes()->addClass( 'pxf-label' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->span->setContent( I18n::_( $text ) );
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ) {
		$this->type = $type;
		$this->span->getAttributes()->addClass( "pxf-label-{$type}" );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->span->getAttributes();
	}

	/**
	 * @param int $size
	 */
	public function setSize( $size ) {
		$this->size = $size;
	}

	protected function getDraw() {

		if ( is_null( $this->type ) ) {
			$this->setType( 'default' );
		}

		if( is_numeric( $this->size ) && !is_null( $this->size ) ){
			$heading = new Heading();
			$heading->setType( $this->size );
			$heading->setContent( $this->span->render() );
			return $heading;
		}

		return $this->span;
	}
} 
