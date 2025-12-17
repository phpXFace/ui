<?php
namespace phpXFace\core\ui\viewport\shape;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\ListItem;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\html\UnorderedList;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;
use phpXFace\core\ui\viewport\layout\IPanel;
use phpXFace\core\ui\viewport\layout\Pane;
use phpXFace\core\ui\viewport\shape\Icon;
use phpXFace\core\ui\viewport\shape\IDivider;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TimelineItem extends AbstractComposite implements ITimelineItem {

    /**
     * @var Pane
     */
    private $timelineItem = null;

    /**
     * @var Icon
     */
    private $icon = null;

    public function __construct() {
        $this->timelineItem = new ListItem();
        $this->timelineItem->getAttributes()->addClass( 'timeline-right' );
    }

    public function add( IComponent &$component ) {
        if( $component instanceof IPanel ){
            $component->getProperties()->addClass('timeline-panel');
            if( $component->getHeader() !== null ) {
                $component->getHeader()->getProperties()->addClass( 'timeline-copy' );
            }
            $this->timelineItem->add( $component->render() );
        }else{
            throw new \InvalidArgumentException( 'Component must be type of IPanel' );
        }
    }

    public function setIcon( $icon ){
        $menuIcon = new Icon();
        $menuIcon->setType( $icon );
        $menuIcon->setContext( 'fa' );
        $this->icon = $menuIcon;
    }

    /**
     * @return IBaseProperties
     */
    public function getProperties() {
        return $this->timelineItem->getAttributes();
    }

    protected function getDraw() {
        $pane = new Pane();
        $pane->getProperties()->addClass( 'timeline-badge' );

        if( !is_null( $this->icon ) ){
            $pane->add( $this->icon );
        }

        $this->timelineItem->add( $pane->render() );

        return $this->timelineItem;
    }
}
