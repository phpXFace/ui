<?php
namespace phpXFace\core\ui\viewport\common;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IComposite extends IComponent {

	/**
	 * Adding further components
	 *
	 * @param IComponent $component
	 * @return AbstractComposite
	 */
	public function add( IComponent &$component );

	/**
	 * Removing a component and return true if successful
	 *
	 * @param IComponent $component
	 * @return boolean
	 */
	public function remove( IComponent $component );

	/**
	 * Removing all components
	 */
	public function removeAll();
}

?>
