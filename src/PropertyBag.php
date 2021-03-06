<?php

namespace Hestabit\GoogleMerchant;

class PropertyBag
{
    use HasProperties;

    /**
     * Property name
     *
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return PropertyBag
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
