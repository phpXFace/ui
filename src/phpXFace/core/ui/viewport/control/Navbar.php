<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Navbar extends AbstractComposite implements INavbar {

	/**
	 * @var Container
	 */
	private $navbar = null;

	public function __construct() {
		$this->navbar = new Container();
		$this->navbar->getAttributes()->addClass( 'pxf-navbar' );
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
