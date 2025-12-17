<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IBorderPane {

	public function setTop( IComponent $component );

	public function setRight( IComponent $component );

	public function setBottom( IComponent $component );

	public function setLeft( IComponent $component );

	public function setCenter( IComponent $component );
}

?>
