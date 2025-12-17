<?php
namespace phpXFace\core\ui\html\form;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IElementProperties;
use phpXFace\core\ui\property\ISelectProperties;
use phpXFace\core\ui\property\SelectProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\form
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Select extends AbstractCompositeElement implements IElementProperties, ISelect {

	const ELEMENT_TAG = 'select';

	/**
	 * @var ISelectProperties
	 */
	private $properties = null;

	public function __construct() {
		$baseProperties = new BaseProperties();
		$this->properties = new SelectProperties( $baseProperties );
	}

	protected function getElementTag() {
		return self::ELEMENT_TAG;
	}

	/**
	 * @return ISelectProperties
	 */
	public function getAttributes() {
		return $this->properties;
	}

}

?>
