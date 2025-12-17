<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\i18n\lib\I18n;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Paragraph extends AbstractComposite implements IParagraph {

	/**
	 * @var IParagraph
	 */
	private $paragraph = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct( $text = '' ) {
		$this->paragraph = new \phpXFace\core\ui\html\Paragraph();
		$this->setText( $text );
		$this->paragraph->getAttributes()->addClass( 'pxf-paragraph' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->paragraph->setContent( I18n::_( $text ) );
	}

	public function setContent( $text ){
		$this->paragraph->setContent( $text );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->paragraph->getAttributes();
	}

	protected function getDraw() {
		return $this->paragraph;
	}

} 
