WombatInvest\LaravelFCM\Message\PayloadDataBuilder
===============

Class PayloadDataBuilder

Official google documentation :


* Class name: PayloadDataBuilder
* Namespace: WombatInvest\LaravelFCM\Message







Methods
-------


### addData

    \WombatInvest\LaravelFCM\Message\PayloadDataBuilder WombatInvest\LaravelFCM\Message\PayloadDataBuilder::addData(array $data)

add data to existing data



* Visibility: **public**


#### Arguments
* $data **array**



### setData

    \WombatInvest\LaravelFCM\Message\PayloadDataBuilder WombatInvest\LaravelFCM\Message\PayloadDataBuilder::setData(array $data)

erase data with new data



* Visibility: **public**


#### Arguments
* $data **array**



### removeAllData

    mixed WombatInvest\LaravelFCM\Message\PayloadDataBuilder::removeAllData()

Remove all data



* Visibility: **public**




### getData

    array WombatInvest\LaravelFCM\Message\PayloadDataBuilder::getData()

return data



* Visibility: **public**




### build

    \WombatInvest\LaravelFCM\Message\PayloadData WombatInvest\LaravelFCM\Message\PayloadDataBuilder::build()

generate a PayloadData



* Visibility: **public**



