# MassPayPhpSdk\PayoutApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commitPayoutTxn()**](PayoutApi.md#commitPayoutTxn) | **PUT** /payout/{user_token}/{payout_token} | Commit payout transaction |
| [**getPayoutStatus()**](PayoutApi.md#getPayoutStatus) | **GET** /payout/{user_token}/{payout_token} | Get status of a payout by payout token |
| [**getTransactionConfirmationDetails()**](PayoutApi.md#getTransactionConfirmationDetails) | **PATCH** /payout/{user_token}/{payout_token} | Get transaction confirmation details |
| [**getUserPayoutsByToken()**](PayoutApi.md#getUserPayoutsByToken) | **GET** /payout/{user_token} | Get history of payouts by user token |
| [**initiatePayout()**](PayoutApi.md#initiatePayout) | **POST** /payout/{user_token} | Initiate a payout transaction |


## `commitPayoutTxn()`

```php
commitPayoutTxn($user_token, $payout_token, $idempotency_key): \MassPayPhpSdk\Model\PayoutTxnCommitResp
```

Commit payout transaction

Commits a previously initiated transaction.

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


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = 'payout_token_example'; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->commitPayoutTxn($user_token, $payout_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->commitPayoutTxn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnCommitResp**](../Model/PayoutTxnCommitResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayoutStatus()`

```php
getPayoutStatus($user_token, $payout_token, $idempotency_key, $force_status_update): \MassPayPhpSdk\Model\PayoutTxnResp
```

Get status of a payout by payout token

Retrieves information including status update for a payout token

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


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = payout_ed75acf2-1c35-4073-9adc-389084d1e96b; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$force_status_update = true; // bool | Attempts to get an updated status update from the payout destination

try {
    $result = $apiInstance->getPayoutStatus($user_token, $payout_token, $idempotency_key, $force_status_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **force_status_update** | **bool**| Attempts to get an updated status update from the payout destination | [optional] [default to false] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnResp**](../Model/PayoutTxnResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionConfirmationDetails()`

```php
getTransactionConfirmationDetails($user_token, $payout_token, $idempotency_key): \MassPayPhpSdk\Model\GetTransactionConfirmationDetails200Response
```

Get transaction confirmation details

Obtains a PDF with all the details of the payout

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


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = payout_ed75acf2-1c35-4073-9adc-389084d1e96b; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getTransactionConfirmationDetails($user_token, $payout_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getTransactionConfirmationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\GetTransactionConfirmationDetails200Response**](../Model/GetTransactionConfirmationDetails200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPayoutsByToken()`

```php
getUserPayoutsByToken($user_token, $idempotency_key, $include_payer_logos): \MassPayPhpSdk\Model\PayoutTxnResp[]
```

Get history of payouts by user token

Gets a list of all historical payouts for a provided user token.

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


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | The user token that needs to be fetched.
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$include_payer_logos = true; // bool | Whether to include the payers logo in base64 format.

try {
    $result = $apiInstance->getUserPayoutsByToken($user_token, $idempotency_key, $include_payer_logos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getUserPayoutsByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| The user token that needs to be fetched. | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **include_payer_logos** | **bool**| Whether to include the payers logo in base64 format. | [optional] [default to false] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnResp[]**](../Model/PayoutTxnResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiatePayout()`

```php
initiatePayout($user_token, $payout_txn, $idempotency_key, $limit): \MassPayPhpSdk\Model\PayoutTxnResp
```

Initiate a payout transaction

Initiates a payout transaction to a provided user token.

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


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_txn = new \MassPayPhpSdk\Model\PayoutTxn(); // \MassPayPhpSdk\Model\PayoutTxn | Payout parameters for a quote
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$limit = 3.4; // float | Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent

try {
    $result = $apiInstance->initiatePayout($user_token, $payout_txn, $idempotency_key, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->initiatePayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_txn** | [**\MassPayPhpSdk\Model\PayoutTxn**](../Model/PayoutTxn.md)| Payout parameters for a quote | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **limit** | **float**| Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent | [optional] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnResp**](../Model/PayoutTxnResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
