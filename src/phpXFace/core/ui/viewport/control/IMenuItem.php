<?php
namespace phpXFace\core\ui\viewport\control;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IMenuItem {

	/**
	 * Set target of the menu item
	 *
	 * @param $target
	 * @return void
	 */
	public function setTarget( $target );

	/**
	 * Disable menu item
	 *
	 * @param boolean $disabled
	 * @return void
	 */
	public function setDisabled( $disabled );

	/**
	 * Check if menu item is disabled
	 *
	 * @return boolean
	 * @return void
	 */
	public function isDisabled();
} 
