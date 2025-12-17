<?php
namespace phpXFace\core\ui\viewport\control;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IMenu {

	/**
	 * Set menu name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName( $name );

	/**
	 * Set menu icon
	 *
	 * @param string $icon
	 * @return void
	 */
	public function setIcon( $icon );
} 
