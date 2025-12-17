<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\OrderedList;
use phpXFace\core\ui\property\IButtonProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Breadcrumb extends AbstractComposite implements IBreadcrumb {

    /**
     * @var OrderedList
     */
    private $breadcrumb = null;

    public function __construct() {
        $this->breadcrumb = new OrderedList();
        $this->breadcrumb->getAttributes()->addClass( 'pxf-breadcrumb' );
    }

    /**
     * @return IButtonProperties
     */
    public function getProperties() {
        return $this->breadcrumb->getAttributes();
    }

    protected function getDraw() {
        return $this->breadcrumb;
    }
}


?>
