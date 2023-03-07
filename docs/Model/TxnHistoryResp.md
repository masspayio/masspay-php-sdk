# # TxnHistoryResp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Token represnting the transaction |
**type** | **string** | Type of transaction |
**time_of_txn** | **\DateTime** | Time the transaction was created. In UTC |
**source_amount** | **float** | Source amount |
**source_currency_code** | **string** | The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided | [default to 'USD']
**destination_amount** | **float** | The amount that was received in &#x60;destination_currency_code&#x60; |
**destination_currency_code** | **string** | The currency of the funds received. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format |
**fee** | **float** | Fee of the transaction |
**status** | **string** | Status of the transaction |
**notes** | **string** | Notes of the transaction when load or spend back | [optional]
**payer_name** | **string** | Name of the payer when payout transaction | [optional]
**pickup_code** | **string** | Code/pin that is required when collecting the money when payout transaction | [optional]
**source_token** | **string** | Token that represents the funding source i.e. bank account, wallet. 36 characters long | [optional]
**destination_token** | **string** | Token that represents the payout destination i.e. Omnex-&gt;Brazil-&gt;Bank Deposit-&gt;Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long |
**delivery_type** | **string** | The type of service. I.e. cash pickup, home delivery, etc. Only provided for payouts | [optional]
**client_transfer_id** | **string** | A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters. | [optional]
**status_reason** | **string** | The reason for the status change. Usually would include reason for an ERROR or CANCEL status | [optional]
**client_id** | **int** | Optional client id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
