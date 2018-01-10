<?php

namespace PhoNetworksAutogenerated\PageOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Mention extends Foundation\ObjectOut\Mention {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "mention";
    const HEAD_LABELS = "mentions";
    const TAIL_LABEL = "notification";
    const TAIL_LABELS = "notifications";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class];
    


}

/* Predicate to load as a partial */
class MentionPredicate extends Foundation\ObjectOut\MentionPredicate
{
    protected $binding = false;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class MentionNotification extends Foundation\ObjectOut\MentionNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1378
 * Compilation Time: 75
 * f2a2d5e657c8d10739056cefb738ca33
 ******************************************************/