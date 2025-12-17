<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\ListItem;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\html\UnorderedList;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\layout\Pane;
use phpXFace\core\ui\viewport\shape\Icon;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Menu extends AbstractComposite implements IMenu {

	/**
	 * @var Pane
	 */
	private $menu = null;

	/**
	 * @var Button
	 */
	private $button = null;

	/**
	 * @var ListView
	 */
	private $menuList = null;

	/**
	 * @var string
	 */
	private $name = null;

	/**
	 * @var string
	 */
	private $icon = null;

	public function __construct() {
		$this->menu = new ListItem();
		$this->menuList = new UnorderedList();
		$this->menuList->getAttributes()->setRole( 'menu' );
		$this->menuList->getAttributes()->addClass( 'dropdown-menu' );
		$this->button = new Anchor();
		$this->menu->getAttributes()->addClass( 'pxf-menu' );
		$this->menu->getAttributes()->removeClass( 'pxf-pane' );
		$this->button->getAttributes()->addClass( 'pxf-menu-button' );
		$this->button->getAttributes()->addData( 'toggle', 'dropdown' );
		$this->menu->add( $this->button );
		$this->menu->add( $this->menuList );
	}

	public function add( IComponent &$component ) {
		$listItem = new ListItem();
		$listItem->getAttributes()->setRole( 'presentation' );
		$listItem->getAttributes()->addClass( 'dropdown' );
		$listItem->add( $component->render() );
		$this->menuList->add( $listItem );
	}

	public function setName( $name ) {
		$this->name = new Span( $name );
	}

	public function setIcon( $icon ){
		$menuIcon = new Icon();
		$menuIcon->setType( $icon );
		$this->icon = $menuIcon;
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->menu->getAttributes();
	}

	protected function getDraw() {
		if ( !is_null( $this->name ) ) {
			$this->button->add( $this->name );
			$caret = new Span();
			$caret->getAttributes()->addClass( 'caret' );
			$this->button->add( $caret );
		}
		if( !is_null( $this->icon ) ){
			$this->button->add( $this->icon->render() );
		}

		return $this->menu;
	}
} 
