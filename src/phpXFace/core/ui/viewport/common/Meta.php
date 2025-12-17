<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\html\IMeta;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Meta extends AbstractComposite {

    /**
     * @var IMeta
     */
    private $meta = null;

    public function __construct() {
        $this->meta = new \phpXFace\core\ui\html\Meta();
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->meta->getAttributes();
    }

    protected function getDraw() {
        return $this->meta;
    }

}
