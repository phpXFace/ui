<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\layout\Pane;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Dialog extends AbstractComposite implements IDialog {

	/**
	 * @var Container
	 */
	private $dialog = null;

	/**
	 * @var Container
	 */
	private $dialogWrapper = null;

	/**
	 * @var Container
	 */
	private $dialogContent = null;

	/**
	 * @var Container
	 */
	private $dialogHeader = null;

	/**
	 * @var Container
	 */
	private $dialogBody = null;

	/**
	 * @var Container
	 */
	private $dialogFooter = null;

	/**
	 * @var string
	 */
	private $size = null;

	public function __construct() {
		$this->dialog = new Container();
		$this->dialog->getAttributes()->addClass( 'pxf-dialog' );
		$this->dialog->getAttributes()->setRole( 'dialog' );

		$this->dialogWrapper = new Pane();
		$this->dialogWrapper->getProperties()->addClass( 'modal-dialog' );

		$this->dialogContent = new Pane();
		$this->dialogContent->getProperties()->addClass( 'modal-content' );

		$this->dialogWrapper->add( $this->dialogContent );

		$this->dialogHeader = new Pane();
		$this->dialogHeader->getProperties()->addClass( 'pxf-dialog-header' );
		$this->dialogContent->add( $this->dialogHeader );

		$this->dialogBody = new Pane();
		$this->dialogBody->getProperties()->addClass( 'pxf-dialog-body' );
		$this->dialogContent->add( $this->dialogBody );

		$this->dialogFooter = new Pane();
		$this->dialogFooter->getProperties()->addClass( 'pxf-dialog-footer' );
		$this->dialogContent->add( $this->dialogFooter );
		parent::add( $this->dialogWrapper );
	}

	public function setHeader( IComponent $component ) {
		$this->dialogHeader->add( $component );
	}

	public function setBody( IComponent $component ) {
		$this->dialogBody->add( $component );
	}

	public function setFooter( IComponent $component ) {
		$this->dialogFooter->add( $component );
	}

	/**
	 * @param string $size
	 */
	public function setSize( $size ) {
		$this->size = $size;
		$this->dialogWrapper->getProperties()->addClass( 'modal-' . $size );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->dialog->getAttributes();
	}

	protected function getDraw() {
		return $this->dialog;
	}
} 
