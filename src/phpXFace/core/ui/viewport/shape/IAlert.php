<?php
namespace phpXFace\core\ui\viewport\shape;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IAlert {

	/**
	 * @param string $type (e.g. success, info, warning, danger)
	 * @return void
	 */
	public function setType( $type );

	/**
	 * Set dismissible true to make the close button visible
	 *
	 * @param boolean $isdismissible
	 */
	public function setIsdismissible( $isdismissible );
} 
