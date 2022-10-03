WombatInvest\LaravelFCM\Response\GroupResponse
===============

Class GroupResponse




* Class name: GroupResponse
* Namespace: WombatInvest\LaravelFCM\Response
* Parent class: [WombatInvest\LaravelFCM\Response\BaseResponse](WombatInvest\LaravelFCM-Response-BaseResponse.md)
* This class implements: [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)


Constants
----------


### FAILED_REGISTRATION_IDS

    const FAILED_REGISTRATION_IDS = "failed_registration_ids"





### SUCCESS

    const SUCCESS = 'success'





### FAILURE

    const FAILURE = 'failure'





### ERROR

    const ERROR = "error"





### MESSAGE_ID

    const MESSAGE_ID = "message_id"







Methods
-------


### __construct

    mixed WombatInvest\LaravelFCM\Response\BaseResponse::__construct(\GuzzleHttp\Psr7\Response $response)

BaseResponse constructor.



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\BaseResponse](WombatInvest\LaravelFCM-Response-BaseResponse.md)


#### Arguments
* $response **GuzzleHttp\Psr7\Response**



### parseResponse

    mixed WombatInvest\LaravelFCM\Response\BaseResponse::parseResponse(array $responseInJson)

parse the response



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [WombatInvest\LaravelFCM\Response\BaseResponse](WombatInvest\LaravelFCM-Response-BaseResponse.md)


#### Arguments
* $responseInJson **array**



### logResponse

    mixed WombatInvest\LaravelFCM\Response\BaseResponse::logResponse()

Log the response



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [WombatInvest\LaravelFCM\Response\BaseResponse](WombatInvest\LaravelFCM-Response-BaseResponse.md)




### numberSuccess

    integer WombatInvest\LaravelFCM\Response\GroupResponseContract::numberSuccess()

Get the number of device reached with success



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)




### numberFailure

    integer WombatInvest\LaravelFCM\Response\GroupResponseContract::numberFailure()

Get the number of device which thrown an error



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)




### tokensFailed

    array WombatInvest\LaravelFCM\Response\GroupResponseContract::tokensFailed()

Get all token in group that fcm cannot reach



* Visibility: **public**
* This method is defined by [WombatInvest\LaravelFCM\Response\GroupResponseContract](WombatInvest\LaravelFCM-Response-GroupResponseContract.md)




### isJsonResponse

    mixed WombatInvest\LaravelFCM\Response\BaseResponse::isJsonResponse(\GuzzleHttp\Psr7\Response $response)

Check if the response given by fcm is parsable



* Visibility: **private**
* This method is defined by [WombatInvest\LaravelFCM\Response\BaseResponse](WombatInvest\LaravelFCM-Response-BaseResponse.md)


#### Arguments
* $response **GuzzleHttp\Psr7\Response**


