<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IBaseProperties {

	/**
	 * Get the element identifier
	 *
	 * @return string
	 */
	public function getId();

	/**
	 * Set the element identifier
	 *
	 * @param string $id
	 * @return void
	 */
	public function setId( $id );

	/**
	 * Set element role
	 *
	 * @param string $role
	 * @return void
	 */
	public function setRole( $role );

	/**
	 * Get the element role
	 *
	 * @return string
	 */
	public function getRole();

	/**
	 * Get an array of all style classes
	 *
	 * @return array
	 */
	public function getClass();

	/**
	 * Add style class
	 *
	 * @param string $class style class name
	 */
	public function addClass( $class );

	/**
	 * Remove a style class
	 *
	 * @param string $class
	 * @return void
	 */
	public function removeClass( $class );

	/**
	 * Get an array with all element data attributes
	 *
	 * @return array
	 */
	public function getData();

	/**
	 * Add data attribute to an element
	 *
	 * @param string $name (example: company for "data-company")
	 * @param string $data
	 * @return void
	 */
	public function addData( $name, $data );

	/**
	 * Get an array with all style properties for this element
	 *
	 * @return array
	 */
	public function getStyle();

	/**
	 * Add a style property to element
	 *
	 * @param string $style (example: "margin: 10px")
	 * @return void
	 */
	public function addStyle( $style );

	/**
	 * Set data binding
	 *
	 * @deprecated will be removed soon
	 *
	 * @param string $bind
	 * @return void
	 */
	public function setBind( $bind );

	/**
	 * Get data binding
	 *
	 * @deprecated will be removed soon
	 *
	 * @return string
	 */
	public function getBind();
}

?>
