<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\Img;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Image extends AbstractComponent implements IImage {

    /**
     * @var Img
     */
    private $image = null;

    public function __construct() {
        $this->image = new Img();
        $this->image->getAttributes()->addClass( 'pxf-image' );
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->image->getAttributes();
    }

    protected function getDraw() {
        return $this->image;
    }
}
