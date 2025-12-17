<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\form\FormInput;
use phpXFace\core\ui\html\form\InputType;
use phpXFace\core\ui\property\IInputProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Checkbox extends AbstractComponent implements ICheckbox {

	/**
	 * @var FormInput
	 */
	private $textField = null;

	public function __construct() {
		$this->textField = new FormInput();
		$this->textField->getAttributes()->addClass( 'pxf-checkbox' );
		$this->textField->getAttributes()->setType( InputType::CHECKBOX );
	}

	/**
	 * @return IInputProperties
	 */
	public function getProperties() {
		return $this->textField->getAttributes();
	}

	protected function getDraw() {
		if( !is_null( $this->getProperties()->getBind()) ){
			$bind = explode( ':', $this->getProperties()->getBind() );
			$this->getProperties()->setName( $bind[1] );
		}
		return $this->textField;
	}


} 
