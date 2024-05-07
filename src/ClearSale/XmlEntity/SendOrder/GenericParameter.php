<?php

namespace ClearSale\XmlEntity\SendOrder;

use ClearSale\XmlEntity\XmlEntityInterface;
use XMLWriter;

class GenericParameter implements XmlEntityInterface
{
    private $name;
    private $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function toXML(XMLWriter $xml)
    {
        $xml->startElement("Generic");

        $xml->writeElement("Name", $this->getName());

        $xml->writeElement("Value", $this->getValue());

        $xml->endElement();
    }
}
