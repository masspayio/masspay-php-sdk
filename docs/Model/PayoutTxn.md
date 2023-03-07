# # PayoutTxn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_transfer_id** | **string** | A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters. | [optional]
**source_currency_code** | **string** | The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided | [optional] [default to 'USD']
**destination_currency_code** | **string** | The currency the funds will be deposited into. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format |
**source_token** | **string** | Token that represents the funding source i.e. bank account, wallet. 36 characters long |
**destination_token** | **string** | Token that represents the payout destination i.e. Omnex-&gt;Brazil-&gt;Bank Deposit-&gt;Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long |
**destination_amount** | **float** | The amount to be sent for payout in source currency. i.e USD. Must be provided if source_amount is empty | [optional]
**source_amount** | **float** | The amount to be received by the payout in source currency. i.e USD. Must be provided if destination_amount is empty | [optional]
**attr_set_token** | **string** | Token that represents set of attributes that associated with destination_token. For example, bank account, mobile account, wallet id, etc. If not provided, uses the last one used. 36 characters long | [optional]
**metadata** | **string** | Optional JSON object with attributes that can later be searched to locate this payout. Do not include PII as this object is not encrypted. | [optional]
**notify_user** | **bool** | Should we notify the user via email/sms about status updates for this payout? | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
