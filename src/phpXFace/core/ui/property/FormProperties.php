<?php
namespace phpXFace\core\ui\property;
use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class FormProperties extends AbstractDecoratorProperties{

	private $action = null;

	private $method = null;

	public function getAction() {
		return $this->action;
	}

	public function setAction( $action ) {
		$this->action = $action;
		$this->addAttribute( 'action', $this->action );
	}

	/**
	 * @param null $method
	 */
	public function setMethod( $method ) {
		$this->method = $method;
		$this->addAttribute( 'method', $this->method );
	}

	/**
	 * @return null
	 */
	public function getMethod() {
		return $this->method;
	}


}
