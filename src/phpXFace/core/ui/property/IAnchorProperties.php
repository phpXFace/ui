<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IAnchorProperties extends IBaseProperties {

	/**
	 * Get the link url
	 *
	 * @return string
	 */
	public function getHref();

	/**
	 * Set the link url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setHref( $url );

	/**
	 * Get the target type (e.g. _blank, _parent, _self, _top)
	 *
	 * @return string
	 */
	public function getTarget();

	/**
	 * Set the target of the link (e.g. _blank, _parent, _self, _top)
	 *
	 * @param string $target
	 * @return void
	 */
	public function setTarget( $target );

}

?>
