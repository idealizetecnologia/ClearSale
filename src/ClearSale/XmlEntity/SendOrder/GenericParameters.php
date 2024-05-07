<?php

namespace ClearSale\XmlEntity\SendOrder;

use ClearSale\XmlEntity\XmlEntityInterface;
use XMLWriter;

class GenericParameters implements XmlEntityInterface
{
    private $genericParameters = array();

    public function addParamGeneric(GenericParameter $genericParameter)
    {
        $this->genericParameters[] = $genericParameter;
    }

    public function toXML(XMLWriter $xml)
    {
        $xml->startElement("Generics");

        foreach ($this->genericParameters as $genericParameter) {
            $genericParameter->toXML($xml);
        }

        $xml->endElement();
    }
}
