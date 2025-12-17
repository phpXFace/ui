<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\property\IOptionProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IComboBoxItem {

	/**
	 * @return IOptionProperties
	 */
	public function getProperties();

	/**
	 * Set text for the list description or name
	 *
	 * @param string $text
	 * @return void
	 */
	public function setText( $text );
}
