<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Heading extends AbstractComponent implements IHeading {

	/**
	 * @var \phpXFace\core\ui\html\Heading
	 */
	private $heading = null;

	/**
	 * @var string
	 */
	private $text = null;

	/**
	 * @var string
	 */
	private $type = '1';

	public function __construct( $text = null ) {
		$this->heading = new \phpXFace\core\ui\html\Heading();
		$this->setText( $text );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->heading->setContent( I18n::_( $text )  );
	}

	public function setType( $type ){
		$this->type = $type;
		$this->heading->setType( $type );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->heading->getAttributes();
	}

	protected function getDraw() {
		return $this->heading;
	}
} 
