<?php
namespace phpXFace\core\ui\html\table;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\table
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TableData extends AbstractCompositeElement implements ITableData, IElementProperties {

	const ELEMENT_TAG = 'td';

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

?>
