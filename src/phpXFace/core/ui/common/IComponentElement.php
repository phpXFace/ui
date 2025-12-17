<?php
namespace phpXFace\core\ui\common;

/**
 * Represents a component element that can be rendered.
 *
 * @author      C.Pergande
 * @package     phpXFace\core\ui\common
 * @copyright   Copyright(c) 2014 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IComponentElement {

	/**
	 * Returns the rendered content
	 *
	 * @return string html
	 */
	public function render();
}

?>
