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

class Message extends Foundation\ObjectOut\Mention {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "messageRecipient";
    const HEAD_LABELS = "messageRecipients";
    const TAIL_LABEL = "messageSender";
    const TAIL_LABELS = "messageSenders";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class];
    

    const FIELDS = "{\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"sent_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"is_read\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":false,\"unique\":false,\"index\":false}}}";

}

/* Predicate to load as a partial */
class MessagePredicate extends Foundation\ObjectOut\MentionPredicate
{
    protected $binding = false;
    protected $multiplicable = true;
    
    const T_CONSUMER = false;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class MessageNotification extends Foundation\ObjectOut\MentionNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 2265
 * Compilation Time: 68
 * b76e107bde62ae37456dc3a75537f8e4
 ******************************************************/