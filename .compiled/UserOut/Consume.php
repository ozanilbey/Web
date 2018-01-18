<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Consume extends Foundation\ActorOut\Read {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "read";
    const HEAD_LABELS = "reads";
    const TAIL_LABEL = "reader";
    const TAIL_LABELS = "readers";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class,\PhoNetworksAutogenerated\Page::class,\PhoNetworksAutogenerated\Group::class];
    


}

/* Predicate to load as a partial */
class ConsumePredicate extends Foundation\ActorOut\ReadPredicate
{
    protected $binding = false;
    protected $multiplicable = true;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */

}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1349
 * Compilation Time: 76
 * 8a94960b217dc0728dd119bb94e88d89
 ******************************************************/