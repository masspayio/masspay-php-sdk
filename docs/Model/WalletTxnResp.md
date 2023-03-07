# # WalletTxnResp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_token** | **string** | Token representing the user |
**token** | **string** | Token representing the wallet |
**balance** | **float** | The wallet&#39;s current balance in USD |
**currency_code** | **string** | The currency wallet balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD |
**type** | **string** | Type of wallet |
**card_type** | **string** | In case type of wallet is MASSPAY_CARD, card_type would be provided with the type of card it is | [optional]
**last_4** | **string** | In case type of wallet is MASSPAY_CARD, last_4 would be provided with the last four digits of the card | [optional]
**active** | **bool** | An indicator whether the wallet is active. If inactive, can still retrieve historical transactions history |
**client_paying_fees** | **bool** | An indicator whether the fees for payouts using this wallet are paid by the client. If false, the user pays the fees | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
