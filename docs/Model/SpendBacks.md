# # SpendBacks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**spendback_token** | **string** | Token representing the load token |
**time_of_spendback** | **string** | The timestamp the spend back was created in the system. Using UTC timestamp.[ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) |
**client_spendback_id** | **string** | A client defined spend back identifier. This is the unique ID assigned to the spend back on your system. Max 50 characters. |
**source_token** | **string** | Token that represents the funding source i.e. bank account, wallet. 36 characters long |
**wallet_token** | **string** | Token that represents the wallet that received the funds. 36 characters long |
**amount** | **float** | The amount to credit the user&#39;s wallet in source currency |
**source_currency_code** | **string** | The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided |
**notes** | **string** | A description for the load. Will be visible to the user receiving the load |
**metadata** | **object** | Optional JSON object with attributes that can later be searched to locate this spendback. Do not include PII as this object is not encrypted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
