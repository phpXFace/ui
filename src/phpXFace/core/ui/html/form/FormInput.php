<?php
namespace phpXFace\core\ui\html\form;

use phpXFace\core\ui\common\AbstractComponentElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IElementProperties;
use phpXFace\core\ui\property\InputProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\form
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class FormInput extends AbstractComponentElement implements IFormInput, IElementProperties {

	const ELEMENT_TAG = 'input';

	/**
	 * @var \phpXFace\core\ui\property\IInputProperties
	 */
	private $properties = null;

	public function __construct() {
		$baseProperties = new BaseProperties();
		$this->properties = new InputProperties( $baseProperties );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return \phpXFace\core\ui\property\IInputProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}

	/**
	 * Get the child content
	 *
	 * @return string
	 */
	protected function getContent() {
		// TODO: Implement getContent() method.
	}
}

?>
