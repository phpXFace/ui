<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface ISelectProperties extends IBaseProperties{

	/**
	 * @return boolean
	 */
	public function getMultiple();

	/**
	 * @param int $size
	 */
	public function setSize( $size );

	/**
	 * @param string $name
	 */
	public function setName( $name );

	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @return int
	 */
	public function getSize();

	/**
	 * @param boolean $multiple
	 */
	public function setMultiple( $multiple );
}
