WombatInvest\LaravelFCM\Response\GroupResponseContract
===============

Interface GroupResponseContract




* Interface name: GroupResponseContract
* Namespace: WombatInvest\LaravelFCM\Response
* This is an **interface**






Methods
-------


### numberSuccess

    integer WombatInvest\LaravelFCM\Response\GroupResponseContract::numberSuccess()

Get the number of device reached with success



* Visibility: **public**




### numberFailure

    integer WombatInvest\LaravelFCM\Response\GroupResponseContract::numberFailure()

Get the number of device which thrown an error



* Visibility: **public**




### tokensFailed

    array WombatInvest\LaravelFCM\Response\GroupResponseContract::tokensFailed()

Get all token in group that fcm cannot reach



* Visibility: **public**



