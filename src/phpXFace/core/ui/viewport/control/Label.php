<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Label extends AbstractComposite implements ILabel {

	/**
	 * @var \phpXFace\core\ui\html\form\IFormLabel
	 */
	private $label = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct( $text = '' ) {
		$this->label = new \phpXFace\core\ui\html\form\FormLabel();
		$this->setText( $text );
		$this->label->getAttributes()->addClass( 'pxf-fieldlabel' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->label->setContent( I18n::_( $text ) );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->label->getAttributes();
	}

	protected function getDraw() {
		return $this->label;
	}

}

?>
