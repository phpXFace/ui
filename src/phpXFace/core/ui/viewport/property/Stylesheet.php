<?php
namespace phpXFace\core\ui\viewport\property;

use phpXFace\core\ui\html\Style;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Stylesheet extends AbstractComposite {

	/**
	 * @var \phpXFace\core\ui\html\Style
	 */
	private $stylesheet = null;

	private $content = null;

	public function __construct( $content = '' ) {
		$this->content = $content;
		$this->stylesheet = new Style( $content );
	}

	/**
	 * @param null|string $content
	 */
	public function setContent( $content ) {
		$this->content = $content;
		$this->stylesheet->setContent( $content );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->stylesheet->getAttributes();
	}

	protected function getDraw() {
		return $this->stylesheet;
	}

} 
