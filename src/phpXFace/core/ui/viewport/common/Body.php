<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\html\IBody;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Body extends AbstractComposite {

    /**
     * @var IBody
     */
    private $body = null;

    public function __construct() {
        $this->body = new \phpXFace\core\ui\html\Body();
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->body->getAttributes();
    }

    protected function getDraw() {
        return $this->body;
    }

}
