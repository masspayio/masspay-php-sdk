# # ServicePayersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_token** | **string** | Token that represents the payout destination. 36 characters long |
**payer_logo** | **string** | base64 representation of the payer logo |
**payer_name** | **string** | Name of payer |
**exchange_rate** | [**\MassPayPhpSdk\Model\ServicePayersInnerExchangeRateInner[]**](ServicePayersInnerExchangeRateInner.md) | Lists all available currencies and their estimated rates |
**fee** | **float** | Service fee |
**max_limit** | **float** | The maximum amount the user can send with this service. 0 if no upper limit |
**min_limit** | **float** | The minimum amount the user can send with this service. 0 if no lower limit |
**source_amount** | **float** | Optional return field. Will only show if &#x60;limit&#x60; parameter is provided | [optional]
**number_of_locations** | **int** | Total number of locations. Mostly relevant for cash pickup services. 0 if unknown or irrelevant | [optional] [default to 0]
**estimated_availability** | **\DateTime** | Estimated availability of funds. When funds would be available to pickup/deposited | [optional]
**additional_description** | **string** | When available, additional description that explains the service offered or requirements for funds delivery. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
