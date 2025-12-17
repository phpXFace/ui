<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\form\Form;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class FormGroup extends AbstractComposite implements IFormGroup {

	/**
	 * @var Form
	 */
	private $formGroup = null;

	public function __construct() {
		$this->formGroup = new Form();
		$this->formGroup->getAttributes()->addClass( 'pxf-formgroup' );
		$this->formGroup->getAttributes()->setRole( 'form' );
	}

	/**
	 * @return \phpXFace\core\ui\property\IFormProperties
	 */
	public function getProperties() {
		return $this->formGroup->getAttributes();
	}

	protected function getDraw() {
		return $this->formGroup;
	}
} 
