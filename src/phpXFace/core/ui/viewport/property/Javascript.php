<?php
namespace phpXFace\core\ui\viewport\property;

use phpXFace\core\ui\html\Script;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Javascript extends AbstractComposite {

	/**
	 * @var \phpXFace\core\ui\html\Style
	 */
	private $script = null;

	private $content = null;

	public function __construct( $content = '' ) {
		$this->content = $content;
		$this->script = new Script( $content );
	}

	/**
	 * @param null|string $content
	 */
	public function setContent( $content ) {
		$this->content = $content;
		$this->script->setContent( $content );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->script->getAttributes();
	}

	protected function getDraw() {
		return $this->script;
	}
} 
