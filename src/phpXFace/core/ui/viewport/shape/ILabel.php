<?php
namespace phpXFace\core\ui\viewport\shape;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface ILabel {

	/**
	 * Set label text
	 *
	 * @param string $text
	 * @return void
	 */
	public function setText( $text );

	/**
	 * Set the type of label
	 *
	 * @param string $type (e.g. default, primary, success, info, warning, danger)
	 * @return void
	 */
	public function setType( $type );
} 
