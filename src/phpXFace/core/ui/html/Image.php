<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IElementProperties;
use phpXFace\core\ui\property\IImageProperties;
use phpXFace\core\ui\property\ImageProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Image extends AbstractCompositeElement implements IImage, IElementProperties {

	const ELEMENT_TAG = 'img';

	/**
	 * @var IImageProperties
	 */
	private $properties = null;

	public function __construct() {
		$baseProperty = new BaseProperties();
		$this->properties = new ImageProperties( $baseProperty );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return IImageProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}

}

?>
