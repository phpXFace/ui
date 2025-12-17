<?php
namespace phpXFace\core\ui\html\form;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\FormProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\form
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Form extends AbstractCompositeElement implements IForm, IElementProperties {

	const ELEMENT_TAG = 'form';

	/**
	 * @var \phpXFace\core\ui\property\IFormProperties
	 */
	private $properties = null;

	public function __construct() {
		$baseProperties = new BaseProperties();
		$this->properties = new FormProperties( $baseProperties );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return \phpXFace\core\ui\property\IFormProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}
}

?>
