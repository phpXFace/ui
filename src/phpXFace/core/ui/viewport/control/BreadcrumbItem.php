<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\IListItem;
use phpXFace\core\ui\html\ListItem;
use phpXFace\core\ui\html\OrderedList;
use phpXFace\core\ui\property\IButtonProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\shape\IText;
use phpXFace\core\ui\viewport\shape\Text;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class BreadcrumbItem extends AbstractComposite implements IBreadcrumbItem {

    /**
     * @var IListItem
     */
    private $breadcrumbItem;

    /**
     * @var IHyperlink
     */
    private $link;

    /**
     * @var IText
     */
    private $text;

    public function __construct() {
        $this->breadcrumbItem = new ListItem();
        $this->breadcrumbItem->getAttributes()->addClass( 'pxf-breadcrumb-item' );
    }

    /**
     * @param IHyperlink $link
     */
    public function setLink( $link ) {
        $this->link = new Hyperlink();
        $this->link->getProperties()->setHref( $link );
    }

    /**
     * @param IText $text
     */
    public function setText( $text ) {
        $this->text = new Text();
        $this->text->setText( $text );
    }

    /**
     * @return IButtonProperties
     */
    public function getProperties() {
        return $this->breadcrumbItem->getAttributes();
    }

    protected function getDraw() {

        if( $this->link !== null ){
            $this->link->add( $this->text );
            $this->breadcrumbItem->add( $this->link->render() );
        }else{
            $this->breadcrumbItem->add( $this->text->render() );
            $this->breadcrumbItem->getAttributes()->addClass( 'active' );
        }

        return $this->breadcrumbItem;
    }
}


?>
