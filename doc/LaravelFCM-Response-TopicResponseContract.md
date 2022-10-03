WombatInvest\LaravelFCM\Response\TopicResponseContract
===============

Interface TopicResponseContract




* Interface name: TopicResponseContract
* Namespace: WombatInvest\LaravelFCM\Response
* This is an **interface**






Methods
-------


### isSuccess

    boolean WombatInvest\LaravelFCM\Response\TopicResponseContract::isSuccess()

true if topic sent with success



* Visibility: **public**




### error

    string WombatInvest\LaravelFCM\Response\TopicResponseContract::error()

return error message
you should test if it's necessary to resent it



* Visibility: **public**




### shouldRetry

    boolean WombatInvest\LaravelFCM\Response\TopicResponseContract::shouldRetry()

return true if it's necessary resent it using exponential backoff



* Visibility: **public**



