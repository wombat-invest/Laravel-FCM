WombatInvest\LaravelFCM\Test\Mocks\MockGroupResponse
===============

Class MockGroupResponse **Only use it for testing**




* Class name: MockGroupResponse
* Namespace: WombatInvest\LaravelFCM\Test\Mocks
* This class implements: [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)






Methods
-------


### setNumberSuccess

    mixed WombatInvest\LaravelFCM\Test\Mocks\MockGroupResponse::setNumberSuccess($numberSuccess)

set number of success



* Visibility: **public**


#### Arguments
* $numberSuccess **mixed**



### numberSuccess

    integer WombatInvest\LaravelFCM\Response\GroupResponseContract::numberSuccess()

Get the number of device reached with success



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)




### setNumberFailure

    mixed WombatInvest\LaravelFCM\Test\Mocks\MockGroupResponse::setNumberFailure($numberFailures)

set number of failures



* Visibility: **public**


#### Arguments
* $numberFailures **mixed**



### numberFailure

    integer WombatInvest\LaravelFCM\Response\GroupResponseContract::numberFailure()

Get the number of device which thrown an error



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)




### addTokenFailed

    mixed WombatInvest\LaravelFCM\Test\Mocks\MockGroupResponse::addTokenFailed($tokenFailed)

add a token to the failed list



* Visibility: **public**


#### Arguments
* $tokenFailed **mixed**



### tokensFailed

    array WombatInvest\LaravelFCM\Response\GroupResponseContract::tokensFailed()

Get all token in group that fcm cannot reach



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)



