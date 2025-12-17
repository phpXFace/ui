<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\common\IComponentElement;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IComponent {

	/**
	 * Renders the component collection and adding it to this component element
	 *
	 * @return IComponentElement
	 */
	public function render();

	/**
	 * Returns the drawn component elements
	 *
	 * @return string HTML
	 */
	public function draw();
}

?>
