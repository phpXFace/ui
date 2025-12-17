<?php
namespace phpXFace\core\ui\html\table;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\common\IComponentElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\table
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Table extends AbstractCompositeElement implements ITable, IElementProperties {

	const ELEMENT_TAG = 'table';

	private $properties = null;

	public function __construct() {
		$this->properties = new BaseProperties();
	}

	public function add( IComponentElement $component ) {
		if ( !$component instanceof ITableChildren ) {
			throw new \RuntimeException( 'Components apart from ITableChildren are not allowed.' );
		}
		parent::add( $component );
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
