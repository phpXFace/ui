<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;
use phpXFace\i18n\lib\I18n;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Abbreviation extends AbstractComponent implements IAbbreviation {

	/**
	 * @var IAbbreviation
	 */
	private $abbreviation = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct( $text = '' ) {
		$this->abbreviation = new \phpXFace\core\ui\html\Abbreviation();
		$this->setText( $text );
		$this->abbreviation->getAttributes()->addClass( 'pxf-text' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->abbreviation->setContent( I18n::_( $text ) );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->abbreviation->getAttributes();
	}

	protected function getDraw() {
		return $this->abbreviation;
	}


} 
