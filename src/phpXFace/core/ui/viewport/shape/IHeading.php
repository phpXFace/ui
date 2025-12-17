<?php
namespace phpXFace\core\ui\viewport\shape;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IHeading {

	/**
	 * Set heading text
	 *
	 * @param string $text
	 * @return void
	 */
	public function setText( $text );

	/**
	 * Set heading type (e.g. 1, 2, 3, 4, 5, 6)
	 *
	 * @param string $type
	 * @return void
	 */
	public function setType( $type );
}
