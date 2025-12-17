<?php
namespace phpXFace\core\ui\html\form;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\FormLabelProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\form
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class FormLabel extends AbstractCompositeElement implements IFormLabel, IElementProperties {

	const ELEMENT_TAG = 'label';

	/**
	 * @var \phpXFace\core\ui\property\IBaseProperties
	 */
	private $properties = null;

	/**
	 * @var string
	 */
	private $content = null;

	public function __construct( $content = null ) {
		$this->content = $content;
		$this->properties = new FormLabelProperties( new BaseProperties() );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return \phpXFace\core\ui\property\IBaseProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}

	protected function getContent() {
		return $this->content;
	}

	public function setContent( $text ) {
		$this->content = $text;
	}
}

?>
