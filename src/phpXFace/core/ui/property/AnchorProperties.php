<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class AnchorProperties extends AbstractDecoratorProperties implements IElementProperties {

	/**
	 * @var string
	 */
	private $href = null;

	/**
	 * @var string
	 */
	private $target = null;

	public function getHref() {
		return $this->href;
	}

	public function setHref( $url ) {
		$this->href = $url;
		$this->addAttribute( "href", $this->href );
	}

	public function getTarget() {
		return $this->target;
	}

	public function setTarget( $target ) {
		$this->target = $target;
		$this->addAttribute( "target", $this->target );
	}
}

?>
