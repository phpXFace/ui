<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IProperty {

	/**
	 * @return IBaseProperties
	 */
	public function getProperties();
}

?>
