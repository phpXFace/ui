<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractComponentElement;
use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Heading extends AbstractCompositeElement implements IHeading, IElementProperties {

	const ELEMENT_TAG = 'h';

	/**
	 * @var IBaseProperties
	 */
	private $properties = null;

	/**
	 * @var string
	 */
	private $content = null;

	/**
	 * @var string
	 */
	private $type = '1';

	public function __construct( $content = null ) {
		$this->content = $content;
		$this->properties = new BaseProperties();
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ) {
		$this->type = $type;
	}


	protected function getElementTag() {
		return self::ELEMENT_TAG . $this->type;
	}

	protected function getContent() {
		return $this->content;
	}

	/**
	 * @param string $content
	 */
	public function setContent( $content ) {
		$this->content = $content;
	}


	/**
	 * @return IBaseProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}
}

?>
