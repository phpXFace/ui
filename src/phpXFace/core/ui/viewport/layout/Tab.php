<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\ListItem;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\control\Hyperlink;
use phpXFace\core\ui\viewport\control\ListView;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Tab extends AbstractComposite implements ITab {

	/**
	 * @var ListView
	 */
	private $tabItem = null;

	/**
	 * @var Anchor
	 */
	private $link = null;

	/**
	 * @var boolean
	 */
	private $active = null;

	public function __construct() {
		$this->tabItem = new ListItem();
		$this->tabItem->getAttributes()->setRole( 'presentation' );
		$this->link = new Hyperlink();
		$this->link->getProperties()->addData( 'toggle', 'tab' );
		$this->link->getProperties()->setRole( 'tab' );
		parent::add( $this->link );
	}

	public function add( IComponent &$component ) {
		$this->link->add( $component );
	}

	public function setTab( $tabId ) {
		$this->link->getProperties()->setHref( "#{$tabId}" );
	}

	/**
	 * @param boolean $active
	 */
	public function setActive( $active ) {
		$this->active = $active;
		if ( $active ) {
			$this->getProperties()->addClass( 'active' );
		}
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tabItem->getAttributes();
	}

	protected function getDraw() {
		return $this->tabItem;
	}

} 
