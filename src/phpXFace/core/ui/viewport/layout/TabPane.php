<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\UnorderedList;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\control\ListView;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TabPane extends AbstractComposite implements ITabPane {

	/**
	 * @var Container
	 */
	private $tabPane = null;

	/**
	 * @var ListView
	 */
	private $tabs = null;

	/**
	 * @var Container
	 */
	private $content = null;

	public function __construct() {
		$this->tabPane = new Container();
		$this->tabPane->getAttributes()->setRole( 'tabpanel' );

		$this->tabs = new UnorderedList();
		$this->tabs->getAttributes()->setRole( 'tablist' );
		$this->tabs->getAttributes()->addClass( 'pxf-tab' );
		$this->tabs->getAttributes()->addClass( 'nav' );

		$this->content = new Container();
		$this->content->getAttributes()->addClass( 'pxf-tab-content' );
	}

	public function add( IComponent &$component ) {
		if ( $component instanceof ITab ) {
			$this->tabs->add( $component->render() );
		} elseif ( $component instanceof ITabContent ) {
			$this->content->add( $component->render() );
		}
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tabPane->getAttributes();
	}

	protected function getDraw() {
		$this->tabPane->add( $this->tabs );
		$this->tabPane->add( $this->content );

		return $this->tabPane;
	}

} 
