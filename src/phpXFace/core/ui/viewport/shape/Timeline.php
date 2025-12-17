<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\UnorderedList;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\control\ListView;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Timeline extends AbstractComposite implements ITimeline {

    /**
     * @var ListView
     */
    private $timeline = null;

    public function __construct() {
        $this->timeline = new UnorderedList();
        $this->timeline->getAttributes()->addClass( 'bs_timeline' );
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->timeline->getAttributes();
    }

    protected function getDraw() {
        return $this->timeline;
    }
}
