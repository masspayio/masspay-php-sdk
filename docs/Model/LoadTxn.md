# # LoadTxn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_load_id** | **string** | A client defined load identifier. This is the unique ID assigned to the load on your system. Max 50 characters. |
**source_token** | **string** | Token that represents the funding source i.e. bank account, wallet. 36 characters long |
**amount** | **float** | The amount to credit the user&#39;s wallet in source currency |
**source_currency_code** | **string** | The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided | [optional]
**notes** | **string** | A description for the load. Will be visible to the user receiving the load | [optional]
**notify_user** | **bool** | Should we notify the user via email that they&#39;ve received a load? If the user has no existing account, they will receive instructions to establish such account. | [optional] [default to true]
**time_to_process** | **string** | Future date/time to process the load on. If none is provided, it is processed right away. Time to be provided in UTC [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) | [optional]
**metadata** | **object** | Optional JSON object with attributes that can later be searched to locate this load. Do not include PII as this object is not encrypted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
