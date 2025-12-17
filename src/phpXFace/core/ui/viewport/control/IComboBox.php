<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\property\ISelectProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IComboBox {

	/**
	 * @return ISelectProperties
	 */
	public function getProperties();
}
