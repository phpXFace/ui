<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IImageProperties extends IBaseProperties {

	/**
	 * Get the source path
	 *
	 * @return string
	 */
	public function getSource();

	/**
	 * Set the source path
	 *
	 * @param string $url
	 * @return void
	 */
	public function setSource( $url );

	/**
	 * Get the width of the image element
	 *
	 * @return string
	 */
	public function getWidth();

	/**
	 * Set the width of the image element
	 *
	 * @param string $width
	 * @return void
	 */
	public function setWidth( $width );

	/**
	 * Get the height of the image element
	 *
	 * @return string
	 */
	public function getHeight();

	/**
	 * Set the height of the image element
	 *
	 * @param string $height
	 * @return void
	 */
	public function setHeight( $height );
}

?>
