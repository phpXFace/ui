<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\Button;
use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Alert extends AbstractComposite implements IAlert {

	/**
	 * @var Container
	 */
	private $alert = null;

	/**
	 * @var string
	 */
	private $type = null;

	/**
	 * @var boolean
	 */
	private $isdismissible = null;

	public function __construct() {
		$this->alert = new Container();
		$this->alert->getAttributes()->addClass( 'pxf-alert' );
		$this->alert->getAttributes()->setRole( 'alert' );
	}

	public function setType( $type ) {
		$this->type = $type;
		$this->getProperties()->addClass( "pxf-alert-{$type}" );
	}

	public function setIsdismissible( $isdismissible ) {
		$this->isdismissible = $isdismissible;
		if ( $isdismissible ) {
			$button = new Button();
			$button->getAttributes()->addClass( 'close' );
			$button->getAttributes()->setType( 'button' );
			$button->getAttributes()->addData( 'dismiss', 'alert' );

			$span1 = new Span( '&times;' );
			$span2 = new Span( 'Close' );
			$span2->getAttributes()->addClass( 'sr-only' );

			$button->add( $span1 );
			$button->add( $span2 );

			$this->alert->add( $button );
		}
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->alert->getAttributes();
	}

	protected function getDraw() {
		if ( is_null( $this->type ) ) {
			$this->setType( 'success' );
		}

		return $this->alert;
	}

} 
