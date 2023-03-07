# # PayoutTxnCommitResp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_token** | **string** | Token that represents the transaction that was just created. |
**status** | **string** | Status that indicates whether the transaction was successfully processed. If &#x60;success&#x60;, everything was processed correctly. &#x60;failure&#x60; indicates a generic error. &#x60;addtl_attr_req&#x60; indicates that in order to process this transaction, additional attributes are required to be updated for this customer. &#x60;ex_rate_expired&#x60; indicates that the transaction exchange rate has expired and a new transaction has to be created. |
**pickup_code** | **string** | Code/pin that is required when collecting the money. Should be provided to the recipient to present to payout location. | [optional]
**errors** | **string** | Description of errors preventing transfer from being injected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
