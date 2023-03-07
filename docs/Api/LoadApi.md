# MassPayPhpSdk\LoadApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelUserLoad()**](LoadApi.md#cancelUserLoad) | **DELETE** /load/{user_token} | Reverse a user load |
| [**createAutopayRule()**](LoadApi.md#createAutopayRule) | **POST** /wallet/{user_token}/{wallet_token}/autopay | Add autopay rule |
| [**deleteAutopayRule()**](LoadApi.md#deleteAutopayRule) | **DELETE** /wallet/{user_token}/{wallet_token}/autopay | Delete autopay rule |
| [**getAutopayRules()**](LoadApi.md#getAutopayRules) | **GET** /wallet/{user_token}/{wallet_token}/autopay | Get all autopay rules |
| [**getUserLoadsByToken()**](LoadApi.md#getUserLoadsByToken) | **GET** /load/{user_token} | Get history of loads by user token |
| [**loadUser()**](LoadApi.md#loadUser) | **POST** /load/{user_token} | Initiate a load transaction |
| [**resendLoadNotification()**](LoadApi.md#resendLoadNotification) | **PUT** /load/{user_token} | Resend Load Notification |


## `cancelUserLoad()`

```php
cancelUserLoad($user_token, $load_token, $idempotency_key)
```

Reverse a user load

Reverse a load that was already processed. If the load is still in scheduled status, it will mark it as cancelled

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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to load/fetch loads for
$load_token = 'load_token_example'; // string | Load token
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $apiInstance->cancelUserLoad($user_token, $load_token, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->cancelUserLoad: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to load/fetch loads for | |
| **load_token** | **string**| Load token | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutopayRule()`

```php
createAutopayRule($user_token, $wallet_token, $autopay_rule): \MassPayPhpSdk\Model\AutopayResp
```

Add autopay rule

Create an autopay rule that will automatically initiate a payout whenever the `wallet_token` is loaded

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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user who owns the wallet
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet
$autopay_rule = new \MassPayPhpSdk\Model\AutopayRule(); // \MassPayPhpSdk\Model\AutopayRule | Autopay rule configuration

try {
    $result = $apiInstance->createAutopayRule($user_token, $wallet_token, $autopay_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->createAutopayRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **wallet_token** | **string**| Token representing the wallet | |
| **autopay_rule** | [**\MassPayPhpSdk\Model\AutopayRule**](../Model/AutopayRule.md)| Autopay rule configuration | [optional] |

### Return type

[**\MassPayPhpSdk\Model\AutopayResp**](../Model/AutopayResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutopayRule()`

```php
deleteAutopayRule($user_token, $wallet_token, $token)
```

Delete autopay rule

Deletes an autopay rule

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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user who owns the wallet
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet
$token = autopay_3684cc43-fe3b-4994-8ca1-7dc0db94430f; // string | Autopay token to delete

try {
    $apiInstance->deleteAutopayRule($user_token, $wallet_token, $token);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->deleteAutopayRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **wallet_token** | **string**| Token representing the wallet | |
| **token** | **string**| Autopay token to delete | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutopayRules()`

```php
getAutopayRules($user_token, $wallet_token): \MassPayPhpSdk\Model\AutopayResp[]
```

Get all autopay rules

Obtain list of all autopay rules currently applied to this wallet

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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user who owns the wallet
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet

try {
    $result = $apiInstance->getAutopayRules($user_token, $wallet_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->getAutopayRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **wallet_token** | **string**| Token representing the wallet | |

### Return type

[**\MassPayPhpSdk\Model\AutopayResp[]**](../Model/AutopayResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserLoadsByToken()`

```php
getUserLoadsByToken($user_token, $idempotency_key): \MassPayPhpSdk\Model\Loads[]
```

Get history of loads by user token

Gets a transaction history of all loads that were made to the provided user token, including scheduled loads.

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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | The user token that needs to be fetched.
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getUserLoadsByToken($user_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->getUserLoadsByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| The user token that needs to be fetched. | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\Loads[]**](../Model/Loads.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadUser()`

```php
loadUser($user_token, $load_txn, $idempotency_key): \MassPayPhpSdk\Model\LoadTxnResp
```

Initiate a load transaction

Initiates a load of funds into a user token's wallet.

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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to load
$load_txn = new \MassPayPhpSdk\Model\LoadTxn(); // \MassPayPhpSdk\Model\LoadTxn | Load information
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->loadUser($user_token, $load_txn, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->loadUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to load | |
| **load_txn** | [**\MassPayPhpSdk\Model\LoadTxn**](../Model/LoadTxn.md)| Load information | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\LoadTxnResp**](../Model/LoadTxnResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendLoadNotification()`

```php
resendLoadNotification($user_token, $load_token, $idempotency_key): \MassPayPhpSdk\Model\ResendLoadNotification200Response
```

Resend Load Notification



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


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to load/fetch loads for
$load_token = 'load_token_example'; // string | Load token
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->resendLoadNotification($user_token, $load_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->resendLoadNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to load/fetch loads for | |
| **load_token** | **string**| Load token | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\ResendLoadNotification200Response**](../Model/ResendLoadNotification200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
