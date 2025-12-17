<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\IComponentElement;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IUnorderedList {

	/**
	 * @param IComponentElement $component
	 * @return void
	 */
	public function add( IComponentElement $component );
}

?>
