<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\html\IHtml;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Html extends AbstractComposite {

    /**
     * @var IHtml
     */
    private $html = null;

    public function __construct() {
        $this->html = new \phpXFace\core\ui\html\Html();
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->html->getAttributes();
    }

    protected function getDraw() {
        return $this->html;
    }

}
