<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\common\IComponentElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class UnorderedList extends AbstractCompositeElement implements IUnorderedList, IElementProperties {

	const ELEMENT_TAG = 'ul';

	/**
	 * @var IBaseProperties
	 */
	private $properties = null;

	public function __construct() {
		$this->properties = new BaseProperties();
	}

	public function add( IComponentElement $component ) {
		if ( !$component instanceof IListItem ) {
			throw new \RuntimeException( 'Components apart from IListItem are not allowed.' );
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
