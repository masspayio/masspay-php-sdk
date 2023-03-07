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

Gets a list of all historical spendbacks for a provided user token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

Initiates a spend back transaction to a provided user token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
