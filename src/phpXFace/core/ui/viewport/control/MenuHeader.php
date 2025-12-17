<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class MenuHeader extends AbstractComposite implements IMenuHeader {

	/**
	 * @var Container
	 */
	private $menuHeader = null;

	/**
	 * @var Hyperlink
	 */
	private $anchor = null;

	public function __construct() {
		$this->menuHeader = new Container();
		$this->menuHeader->getAttributes()->addClass( 'pxf-navbar-header' );
		$this->anchor = new Hyperlink();
		$this->anchor->getProperties()->addClass( 'pxf-menu-brand' );
	}

	public function add( IComponent &$component ) {
		$this->anchor->add( $component );
	}

	public function setHref( $link ) {
		$this->anchor->getProperties()->setHref( $link );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->menuHeader->getAttributes();
	}

	protected function getDraw() {
		$this->menuHeader->add( $this->anchor->render() );

		return $this->menuHeader;
	}
} 
