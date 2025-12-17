<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IHBox {

	/**
	 * Adding a component child to the HBox
	 *
	 * @param IComponent $component
	 */
	public function addChildren( IComponent &$component );
}

?>
