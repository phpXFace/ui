<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\Heading;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class PageHeader extends AbstractComposite implements IPageHeader {

	/**
	 * @var Container
	 */
	private $container = null;

	/**
	 * @var string
	 */
	private $text = null;

	/**
	 * @var Span
	 */
	private $subline = null;

	public function __construct() {
		$this->container = new Container();
		$this->getProperties()->addClass( 'pxf-page-header' );
	}

	public function setText( $text ) {
		$heading = new Heading( I18n::_( $text ) );
		$heading->setType(2);
		$this->text = $text;
		$this->container->add( $heading );
	}

	public function setSubline( $subline ) {
		$this->subline = new Span();
		$this->subline->setContent( I18n::_( $subline ) );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->container->getAttributes();
	}

	protected function getDraw() {
		if( !is_null( $this->subline ) ){
			$this->container->add( $this->subline );
		}
		return $this->container;
	}
} 
