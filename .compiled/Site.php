<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Site extends Foundation\AbstractGraphDP {

    const T_EDITABLE = false;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x0f751;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"founder\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\"}}}";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , \PhoNetworksAutogenerated\User $founder)
    {
        parent::__construct($kernel, $actor, $graph);
                $this->setFounder($founder, true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1515581027
 * Size (in bytes): 1399
 * Compilation Time: 12
 * f46829f2265df26be1a161d708395d33
 ******************************************************/