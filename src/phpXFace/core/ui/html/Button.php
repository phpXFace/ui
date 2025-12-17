<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\ButtonProperties;
use phpXFace\core\ui\property\IButtonProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Button extends AbstractCompositeElement implements IButton, IElementProperties {

	const ELEMENT_TAG = 'button';

	/**
	 * @var IButtonProperties
	 */
	private $properties = null;

	public function __construct() {
		$baseProperties = new BaseProperties();
		$this->properties = new ButtonProperties( $baseProperties );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return IButtonProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}
}

?>
