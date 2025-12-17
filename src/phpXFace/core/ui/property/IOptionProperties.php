<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IOptionProperties extends IBaseProperties{

	/**
	 * @return string
	 */
	public function getValue();

	/**
	 * @param string $value
	 */
	public function setValue( $value );

	/**
	 * @return boolean
	 */
	public function getSelected();

	/**
	 * @return boolean
	 */
	public function getDisabled();

	/**
	 * @param boolean $selected
	 */
	public function setSelected( $selected );

	/**
	 * @param boolean $disabled
	 */
	public function setDisabled( $disabled );
}
