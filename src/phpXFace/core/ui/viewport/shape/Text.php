<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\lib\di\InjectionSingelton;
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
class Text extends AbstractComponent implements IText {

	/**
	 * @var ISpan
	 */
	private $span = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct( $text = '' ) {
		$this->span = new Span();
		$this->setText( $text );
		$this->span->getAttributes()->addClass( 'pxf-text' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->span->setContent( I18n::_( $text ) );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->span->getAttributes();
	}

	protected function getDraw() {
		return $this->span;
	}


}

?>
