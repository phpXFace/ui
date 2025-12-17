<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\html\IScript;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Script extends AbstractComposite {

    /**
     * @var IScript
     */
    private $script = null;

    public function __construct() {
        $this->script = new \phpXFace\core\ui\html\Script();
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
