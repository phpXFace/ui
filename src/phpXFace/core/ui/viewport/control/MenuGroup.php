<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\UnorderedList;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class MenuGroup extends AbstractComposite implements IMenuGroup {

	/**
	 * @var Container
	 */
	private $container;

	public function __construct() {
		$this->container = new Container();
		$this->container->getAttributes()->addClass( 'collapse' );
		$this->container->getAttributes()->addClass( 'navbar-collapse' );;
	}

	public function add(  IComponent &$component ){
		$menuGroup = new UnorderedList();
		$menuGroup->getAttributes()->addClass( 'pxf-menu-group' );
		$menuGroup->add( $component->render() );
		$this->container->add( $menuGroup );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->container->getAttributes();
	}

	protected function getDraw() {
		return $this->container;
	}
} 
