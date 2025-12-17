<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\Button;
use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\shape\Icon;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ResponsiveMenu extends AbstractComposite implements IResponsiveMenu{

	/**
	 * @var Container
	 */
	private $container = null;

	/**
	 * @var Button
	 */
	private $button = null;

	/**
	 * @var Anchor
	 */
	private $link = null;

	/**
	 * @var Span
	 */
	private $name = null;

	public function __construct() {
		$this->container = new Container();
		$this->container->getAttributes()->addClass( 'pxf-responsive-menu' );

		$this->button = new Button();
		$this->button->getAttributes()->addClass('navbar-toggle');
		$this->button->getAttributes()->addClass('navbar-left');
		$this->button->getAttributes()->addClass('collapsed');
		$this->button->getAttributes()->addData( 'toggle', 'collapse');

		$this->button->add( $this->getHLine() );
		$this->button->add( $this->getHLine() );
		$this->button->add( $this->getHLine() );

		$this->link = new Anchor();
		$this->link->getAttributes()->addClass( 'pxf-navbar-brand' );

		$this->name = new Span();
		$this->link->add( $this->name );

		$container = new Container();
		$container->getAttributes()->addClass( 'pxf-navbar-header' );

		$icon = new Icon();
		$icon->setContext('fa');
		$icon->setType('list');

		$container2 = new Anchor();
		$container2->getAttributes()->setId('responsiveSideBar');
		$container2->getAttributes()->addClass('navbar-brand');
		$container2->add($icon->render());
		$container->add( $container2 );

		$container->add( $this->button );
		$container->add( $this->link );


		$this->container->add( $container );
	}

	public function setTarget( $target ){
		$this->button->getAttributes()->addData( 'target', $target );
	}

	public function setLink( $link ){
		$this->link->getAttributes()->setHref( $link );
	}

	public function setName( $name ){
		$this->name->setContent( $name );
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

	private function getHLine(){
		$span = new Span();
		$span->getAttributes()->addClass( 'icon-bar' );
		return $span;
	}
}
