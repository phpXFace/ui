<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ImageProperties extends AbstractDecoratorProperties implements IElementProperties {

	/**
	 * @var string
	 */
	private $source = null;

	/**
	 * @var string
	 */
	private $width = null;

	/**
	 * @var string
	 */
	private $height = null;


	public function getSource() {
		return $this->source;
	}

	public function setSource( $source ) {
		$this->source = $source;
		$this->addAttribute( 'src', $this->source );
	}

	public function getWidth() {
		return $this->width;
	}

	public function setWidth( $width ) {
		$this->width = $width;
		$this->addAttribute( 'width', $this->width );
	}

	public function getHeight() {
		return $this->height;
	}

	public function setHeight( $height ) {
		$this->height = $height;
		$this->addAttribute( 'height', $this->height );
	}

}

?>
