<?php
namespace phpXFace\core\ui\html;

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
class Nav extends AbstractCompositeElement implements INav, IElementProperties {

	const ELEMENT_TAG = 'nav';

	/**
	 * @var IBaseProperties
	 */
	private $properties = null;

	public function __construct() {
		$this->properties = new BaseProperties();
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return IBaseProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}
} 
