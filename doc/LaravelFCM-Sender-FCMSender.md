WombatInvest\LaravelFCM\Sender\FCMSender
===============

Class FCMSender




* Class name: FCMSender
* Namespace: WombatInvest\LaravelFCM\Sender
* Parent class: [WombatInvest\LaravelFCM\Sender\BaseSender](WombatInvest\LaravelFCM-Sender-BaseSender.md)



Constants
----------


### MAX_TOKEN_PER_REQUEST

    const MAX_TOKEN_PER_REQUEST = 1000





Properties
----------


### $client

    protected \Illuminate\Foundation\Application $client

Guzzle Client



* Visibility: **protected**


### $config

    protected array $config

configuration



* Visibility: **protected**


### $url

    protected mixed $url

url



* Visibility: **protected**


Methods
-------


### sendTo

    \WombatInvest\LaravelFCM\Response\DownstreamResponse|null WombatInvest\LaravelFCM\Sender\FCMSender::sendTo(String|array $to, \WombatInvest\LaravelFCM\Message\Options|null $options, \WombatInvest\LaravelFCM\Message\PayloadNotification|null $notification, \WombatInvest\LaravelFCM\Message\PayloadData|null $data)

send a downstream message to

- a unique device with is registration Token
- or to multiples devices with an array of registrationIds

* Visibility: **public**


#### Arguments
* $to **String|array**
* $options **[WombatInvest\LaravelFCM\Message\Options](WombatInvest\LaravelFCM-Message-Options.md)|null**
* $notification **[WombatInvest\LaravelFCM\Message\PayloadNotification](WombatInvest\LaravelFCM-Message-PayloadNotification.md)|null**
* $data **[WombatInvest\LaravelFCM\Message\PayloadData](WombatInvest\LaravelFCM-Message-PayloadData.md)|null**



### sendToGroup

    \WombatInvest\LaravelFCM\Response\GroupResponse WombatInvest\LaravelFCM\Sender\FCMSender::sendToGroup($notificationKey, \WombatInvest\LaravelFCM\Message\Options|null $options, \WombatInvest\LaravelFCM\Message\PayloadNotification|null $notification, \WombatInvest\LaravelFCM\Message\PayloadData|null $data)

Send a message to a group of devices identified with them notification key



* Visibility: **public**


#### Arguments
* $notificationKey **mixed**
* $options **[WombatInvest\LaravelFCM\Message\Options](WombatInvest\LaravelFCM-Message-Options.md)|null**
* $notification **[WombatInvest\LaravelFCM\Message\PayloadNotification](WombatInvest\LaravelFCM-Message-PayloadNotification.md)|null**
* $data **[WombatInvest\LaravelFCM\Message\PayloadData](WombatInvest\LaravelFCM-Message-PayloadData.md)|null**



### sendToTopic

    \WombatInvest\LaravelFCM\Response\TopicResponse WombatInvest\LaravelFCM\Sender\FCMSender::sendToTopic(\WombatInvest\LaravelFCM\Message\Topics $topics, \WombatInvest\LaravelFCM\Message\Options|null $options, \WombatInvest\LaravelFCM\Message\PayloadNotification|null $notification, \WombatInvest\LaravelFCM\Message\PayloadData|null $data)

Send message devices registered at a or more topics



* Visibility: **public**


#### Arguments
* $topics **[WombatInvest\LaravelFCM\Message\Topics](WombatInvest\LaravelFCM-Message-Topics.md)**
* $options **[WombatInvest\LaravelFCM\Message\Options](WombatInvest\LaravelFCM-Message-Options.md)|null**
* $notification **[WombatInvest\LaravelFCM\Message\PayloadNotification](WombatInvest\LaravelFCM-Message-PayloadNotification.md)|null**
* $data **[WombatInvest\LaravelFCM\Message\PayloadData](WombatInvest\LaravelFCM-Message-PayloadData.md)|null**



### getUrl

    string WombatInvest\LaravelFCM\Sender\BaseSender::getUrl()

get the url



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [WombatInvest\LaravelFCM\Sender\BaseSender](WombatInvest\LaravelFCM-Sender-BaseSender.md)




### __construct

    mixed WombatInvest\LaravelFCM\Sender\BaseSender::__construct()

BaseSender constructor.



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Sender\BaseSender](WombatInvest\LaravelFCM-Sender-BaseSender.md)



