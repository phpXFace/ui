<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\IDescriptionListTerm;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class DescriptionListTerm extends AbstractComponent implements IDescriptionListTerm {

    /**
     * @var IDescriptionListTerm
     */
    private $descriptionListTerm = null;

    /**
     * @var string
     */
    private $term = null;

    public function __construct() {
        $this->descriptionListTerm = new \phpXFace\core\ui\html\DescriptionListTerm();
    }

    /**
     * @param string $term
     */
    public function setText( $term ) {
        $this->term = $term;
        $this->descriptionListTerm->setContent( I18n::_( $this->term ) );
    }

    /**
     *  @return IBaseProperties
     */
    public function getProperties() {
        return $this->descriptionListTerm->getAttributes();
    }

    protected function getDraw() {
        return $this->descriptionListTerm;
    }

}
