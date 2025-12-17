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
use phpXFace\core\ui\viewport\shape\IDivider;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class DropdownMenu extends AbstractComposite implements IDropdownMenu{

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

	/**
	 * @var string
	 */
	private $iconContext = null;

	/**
	 * @var string
	 */
	private $align = null;

	public function __construct() {
		$this->menuList = new UnorderedList();
		$this->menuList->getAttributes()->setRole( 'menu' );
		$this->menuList->getAttributes()->addClass( 'dropdown-menu' );

		$this->button = new Anchor();
		$this->button->getAttributes()->addClass( 'pxf-menu-button' );
		$this->button->getAttributes()->addData( 'toggle', 'dropdown' );

		$this->menu = new ListItem();
		$this->menu->getAttributes()->addClass( 'pxf-menu' );
		$this->menu->getAttributes()->removeClass( 'pxf-pane' );
	}

	public function add( IComponent &$component ) {
		if( $component instanceof IDivider ){
			$listItem = new ListItem();
			$listItem->getAttributes()->addClass('divider');
			$this->menuList->add( $listItem );
		}elseif( $component instanceof IMenuItemHeader ){
			$listItem = new ListItem();
			$listItem->getAttributes()->addClass('dropdown-header');
			$listItem->add( $component->render() );
			$this->menuList->add( $listItem );
		}else{
			$this->menuList->add( $component->render() );
		}
	}

	public function setName( $name ) {
		$this->name = new Span( $name );
	}

	public function setIconContext( $iconContext ) {
		$this->iconContext = $iconContext;
	}

	public function setIcon( $icon ){
		$menuIcon = new Icon();
		$menuIcon->setType( $icon );
		$this->icon = $menuIcon;
	}

	/**
	 * @param string $align
	 */
	public function setAlign( $align ) {
		$this->align = $align;
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
			if( !is_null( $this->iconContext ) ) {
				$this->icon->setContext( $this->iconContext );
			}
			$this->button->add( $this->icon->render() );
		}

		if( $this->align === 'right' && !is_null( $this->align ) &&  is_null( $this->name ) ){
			$this->menuList->getAttributes()->addClass( 'dropdown-menu-right' );
		}

		if( is_null( $this->name ) && is_null( $this->icon ) ){
			return $this->menuList;
		}

		$this->menu->add( $this->button );
		$this->menu->add( $this->menuList );

		return $this->menu;
	}
}
