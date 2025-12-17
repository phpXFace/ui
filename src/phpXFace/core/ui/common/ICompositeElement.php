<?php
namespace phpXFace\core\ui\common;

/**
 * Represents a composite element that can contain and manage multiple component elements.
 *
 * @author      C.Pergande
 * @package     phpXFace\core\ui\common
 * @copyright   Copyright(c) 2014 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface ICompositeElement {

	/**
	 * Adding a component element to this composite element
	 *
	 * @param \phpXFace\core\ui\common\IComponentElement $component
	 */
	public function add( IComponentElement $component );

	/**
	 * Removes a component element from this composite element
	 *
	 * @param \phpXFace\core\ui\common\IComponentElement $component
	 * @return boolean true if remove was successful
	 */
	public function remove( IComponentElement $component ): bool;
}

?>
