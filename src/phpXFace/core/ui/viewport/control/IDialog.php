<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IDialog {

	/**
	 * Set content for the dialog header
	 *
	 * @param \phpXFace\core\ui\viewport\common\IComponent $component
	 * @return void
	 */
	public function setHeader( IComponent $component );

	/**
	 * Set content for the dialog body
	 *
	 * @param \phpXFace\core\ui\viewport\common\IComponent $component
	 * @return void
	 */
	public function setBody( IComponent $component );

	/**
	 * Set content for the dialog footer
	 *
	 * @param \phpXFace\core\ui\viewport\common\IComponent $component
	 * @return void
	 */
	public function setFooter( IComponent $component );
} 
