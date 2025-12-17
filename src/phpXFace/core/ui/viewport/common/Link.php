<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\html\ILink;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Link extends AbstractComposite {

    /**
     * @var ILink
     */
    private $link = null;

    public function __construct() {
        $this->link = new \phpXFace\core\ui\html\Link();
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->link->getAttributes();
    }

    protected function getDraw() {
        return $this->link;
    }

}
