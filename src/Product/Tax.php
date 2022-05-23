<?php

namespace Hestabit\GoogleMerchant\Product;

use Hestabit\GoogleMerchant\HasProperties;

/**
 * Describes product's specific shipping rules
 *
 * @see https://support.google.com/merchants/answer/6324484
 */
class Tax
{
    use HasProperties;

    public function setSection($country,$rate)
    {
        $this->setAttribute('country', $country, false);
        $this->setAttribute('rate', $rate, false);
        return $this;
    }
   
}
