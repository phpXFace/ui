<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\form\FormInput;
use phpXFace\core\ui\html\form\InputType;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IInputProperties;
use phpXFace\core\ui\property\TextAreaProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;
use phpXFace\core\ui\viewport\shape\Icon;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TextArea extends AbstractComponent{

	/**
	 * @var \phpXFace\core\ui\html\form\TextArea
	 */
	private $textArea = null;

	public function __construct() {
		$this->textArea = new \phpXFace\core\ui\html\form\TextArea();
		$this->textArea->getAttributes()->addClass( 'pxf-textarea' );
	}

	public function setValue( $value ){
		$this->getProperties()->setValue( $value );
	}

	/**
	 * @return TextAreaProperties
	 */
	public function getProperties() {
		return $this->textArea->getAttributes();
	}

	protected function getDraw() {
		return $this->textArea;
	}

}
