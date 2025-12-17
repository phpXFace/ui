<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IFormLabelProperties extends IBaseProperties{

	/**
	 * Get "for" identifier
	 *
	 * @return string
	 */
	public function getFor();

	/**
	 * Set "for" identifier
	 *
	 * @param string $for
	 * @return void
	 */
	public function setFor( $for );
} 
