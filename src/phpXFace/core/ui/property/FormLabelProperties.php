<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class FormLabelProperties extends AbstractDecoratorProperties{

	private $for = null;

	public function getFor() {
		return $this->for;
	}

	public function setFor( $for ) {
		$this->for = $for;
		$this->addAttribute( 'for', $this->for );
	}

} 
