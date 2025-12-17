<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\IParagraph;
use phpXFace\core\ui\html\Paragraph;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;
use phpXFace\i18n\lib\I18n;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class HelpBlock extends AbstractComponent implements IHelpBlock {

	/**
	 * @var IParagraph
	 */
	private $paragraph = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct( $text = '' ) {
		$this->paragraph = new Paragraph();
		$this->setText( $text );
		$this->paragraph->getAttributes()->addClass( 'help-block' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->paragraph->setContent( I18n::_( $text ) );
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
