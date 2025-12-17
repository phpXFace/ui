<?php

namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ListItem extends AbstractComposite implements IListItem {

	/**
	 * @var Anchor
	 */
	private $listItem = null;

	public function __construct() {
		$this->listItem = new Anchor();
		$this->listItem->getAttributes()->addClass( 'pxf-listview-item' );
	}

	/**
	 * @return \phpXFace\core\ui\property\IAnchorProperties
	 */
	public function getProperties() {
		return $this->listItem->getAttributes();
	}

	protected function getDraw() {
		return $this->listItem;
	}
}

?>
