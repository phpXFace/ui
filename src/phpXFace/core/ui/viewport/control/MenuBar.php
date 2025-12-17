<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Nav;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class MenuBar extends AbstractComposite implements IMenuBar {

	/**
	 * @var Nav
	 */
	private $navbar = null;

	public function __construct() {
		$this->navbar = new Nav();
		$this->navbar->getAttributes()->addClass( 'pxf-menu-bar' );
		$this->navbar->getAttributes()->setRole( 'navigation' );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->navbar->getAttributes();
	}

	protected function getDraw() {
		return $this->navbar;
	}
}
