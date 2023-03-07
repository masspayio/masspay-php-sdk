# # SpendBackTxn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_spendback_id** | **string** | A client defined spend back identifier. This is the unique ID assigned to the load on your system. Max 50 characters. |
**source_token** | **string** | Token that represents the funding source i.e. bank account, wallet. 36 characters long |
**source_currency_code** | **string** | The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided | [default to 'USD']
**amount** | **float** | The amount to debit the user&#39;s wallet in source currency |
**notes** | **string** | A description for the spend back | [optional]
**metadata** | **object** | Optional JSON object with attributes that can later be searched to locate this spendback. Do not include PII as this object is not encrypted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
