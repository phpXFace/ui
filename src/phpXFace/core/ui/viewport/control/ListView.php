<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\lib\collection\Map;
use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\IUnorderedList;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\shape\IDivider;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ListView extends AbstractComposite implements IListView {

	/**
	 * @var IUnorderedList
	 */
	private $listview = null;

	public function __construct() {
		$this->listview = new Container();
		$this->listview->getAttributes()->addClass( 'pxf-listview' );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->listview->getAttributes();
	}

	/**
	 * Add a given list item to the listview
	 *
	 * @param IComponent $listItem
	 * @return void
	 */
	public function add( IComponent &$listItem ) {
		if ( $listItem instanceof IListItem || $listItem instanceof IDivider || $listItem instanceof IListItemHeader ) {
			parent::add( $listItem );
		}
	}

	public function setAll( Map $items ) {
		foreach ( $items as $item ) {
			$this->add( $item );
		}
	}

	protected function getDraw() {
		return $this->listview;
	}
}

?>
