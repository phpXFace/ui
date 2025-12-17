<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\lib\collection\Map;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IListView {

	/**
	 * @param Map $items <ListItem>
	 * @return void
	 */
	public function setAll( Map $items );
}

?>
