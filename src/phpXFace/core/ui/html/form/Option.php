<?php
namespace phpXFace\core\ui\html\form;
use phpXFace\core\ui\common\AbstractComponentElement;
use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IElementProperties;
use phpXFace\core\ui\property\OptionProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\form
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Option extends AbstractComponentElement implements IElementProperties, IOption{

	const ELEMENT_TAG = 'option';

	/**
	 * @var \phpXFace\core\ui\property\IOptionProperties
	 */
	private $properties = null;

	/**
	 * @var string
	 */
	private $content = null;

	public function __construct() {
		$baseProperties = new BaseProperties();
		$this->properties = new OptionProperties( $baseProperties );
	}

	protected function getContent() {
		return $this->content;
	}

	public function setContent( $text ) {
		$this->content = $text;
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return \phpXFace\core\ui\property\IOptionProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}
}

?>
