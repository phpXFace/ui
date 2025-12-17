<?php
namespace phpXFace\core\ui\viewport\shape;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class InputGroupAddon extends AbstractComposite implements IInputGroupAddon {

	/**
	 * @var Span
	 */
	private $span = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct() {
		$this->span = new Span();
		$this->getProperties()->addClass( 'input-group-addon' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->span->setContent( $text );
	}


	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->span->getAttributes();
	}

	protected function getDraw() {
		return $this->span;
	}

} 
