# MassPayPhpSdk\SpendBackApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserSpendbacksByToken()**](SpendBackApi.md#getUserSpendbacksByToken) | **GET** /spendback/{user_token} | Get history of spend backs by user token |
| [**initiateSpendback()**](SpendBackApi.md#initiateSpendback) | **POST** /spendback/{user_token} | Initiate a spend back transaction |


## `getUserSpendbacksByToken()`

```php
getUserSpendbacksByToken($user_token, $idempotency_key): \MassPayPhpSdk\Model\SpendBacks[]
```

Get history of spend backs by user token

This **GET** endpoint is used to retrieve the history of spendbacks for a specific user token. <br> You can use this endpoint to help manage your payment operations and track the usage of funds by your users. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The endpoint will then return a list of all the historical spendbacks for the provided user token. The response will contain a JSON array with details for each spendback transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\SpendBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = usr_3f5d3fe8-a9c0-48c7-90ad-a72948730f56; // string | Token representing the user to fetch/initiate spend back
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getUserSpendbacksByToken($user_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendBackApi->getUserSpendbacksByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to fetch/initiate spend back | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\SpendBacks[]**](../Model/SpendBacks.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateSpendback()`

```php
initiateSpendback($user_token, $idempotency_key, $spend_back_txn): \MassPayPhpSdk\Model\SpendBackTxnResp
```

Initiate a spend back transaction

This **POST** endpoint is used to initiate a spendback transaction to a provided user token. <br> You can use this endpoint to enable spendback transactions for your users and help them manage their funds more effectively. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path, along with the required parameters in the request Body, including `client_spendback_id`, `source_token`, `source_currency_code` and `amount`. <br> The endpoint will then initiate the spendback transaction, transferring funds from the source token to the user token. The response will contain a JSON object indicating the status of the request and any relevant transaction details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\SpendBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = usr_3f5d3fe8-a9c0-48c7-90ad-a72948730f56; // string | Token representing the user to fetch/initiate spend back
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$spend_back_txn = new \MassPayPhpSdk\Model\SpendBackTxn(); // \MassPayPhpSdk\Model\SpendBackTxn | Spend back information

try {
    $result = $apiInstance->initiateSpendback($user_token, $idempotency_key, $spend_back_txn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendBackApi->initiateSpendback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to fetch/initiate spend back | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **spend_back_txn** | [**\MassPayPhpSdk\Model\SpendBackTxn**](../Model/SpendBackTxn.md)| Spend back information | [optional] |

### Return type

[**\MassPayPhpSdk\Model\SpendBackTxnResp**](../Model/SpendBackTxnResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
