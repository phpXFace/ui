<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\AnchorProperties;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IAnchorProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Anchor extends AbstractCompositeElement implements IAnchor, IElementProperties {

	const ELEMENT_TAG = 'a';

	/**
	 * @var IAnchorProperties
	 */
	private $properties = null;

	public function __construct() {
		$baseProperties = new BaseProperties();
		$this->properties = new AnchorProperties( $baseProperties );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return IAnchorProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}
}

?>
