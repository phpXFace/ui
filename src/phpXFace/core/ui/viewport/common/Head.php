<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\html\IHead;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Head extends AbstractComposite{

    /**
     * @var IHead
     */
    private $head = null;

    public function __construct() {
        $this->head = new \phpXFace\core\ui\html\Head();
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->head->getAttributes();
    }

    protected function getDraw() {
        return $this->head;
    }

}
