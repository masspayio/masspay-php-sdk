# # PayoutTxnResp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_token** | **string** | Token that represents the transaction that was just created. Need to be used to commit the transaction in &#x60;/payout/{user_token}/{payout_token}&#x60;. Value would be NSF if there are not enough funds in the &#x60;source_token&#x60;. Value would be &#x60;DUPLICATE&#x60; if there is a duplicate &#x60;client_transfer_id&#x60;. |
**client_transfer_id** | **string** | A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters. |
**source_currency_code** | **string** | The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided |
**destination_currency_code** | **string** | The currency the funds will be deposited into. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format |
**source_token** | **string** | Token that represents the funding source i.e. your bank account, user&#39;s wallet. 36 characters long |
**destination_token** | **string** | Token that represents the payout destination i.e. Omnex-&gt;Brazil-&gt;Bank Deposit-&gt;Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long |
**destination_amount** | **float** | The amount to be sent for payout in source currency. i.e USD. Must be provided if source_amount is empty |
**source_amount** | **float** | The amount to be received by the payout in source currency. i.e USD. Must be provided if destination_amount is empty |
**attr_set_token** | **string** | Token that represents set of attributes that associated with destination_token. For example, bank account, mobile account, wallet id, etc. If not provided, uses the last one used. 36 characters long |
**exchange_rate** | **float** | The exchange rate to convert source_amount to destination_amount |
**fee** | **float** | Fee to be charged for the transaction |
**expiration** | **string** | The time and date at which the transaction will expire. The transaction has to be finalized before this time. Transactions are valid for 2 minutes from creation time. If expired, a new transaction has to be created. |
**pickup_code** | **string** | Code/pin that is required when collecting the money. Should be provided to the recipient to present to payout location. |
**status** | **string** | The status of the transaction |
**payer_logo** | **string** | base64 representation of the payer logo | [optional]
**payer_name** | **string** | Name of payer |
**delivery_type** | **string** | The type of delivery |
**country_code** | **string** | Country code [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) |
**metadata** | **object** | Optional JSON object with attributes that can later be searched to locate this payout. Do not include PII as this object is not encrypted. | [optional]
**estimated_availability** | **\DateTime** | Estimated availability of funds. When funds would be available to pickup/deposited |
**status_reason** | **string** | Optional. Contains the reason for the status change. Most commonly used for CANCELLED status with the reason for cancellation | [optional]
**attrs** | **object** | The relevant attributes that were used to fulfill this payout | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
