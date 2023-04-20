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
| [**loadUserTokenPut()**](LoadApi.md#loadUserTokenPut) | **PUT** /load/{user_token} | Resend Load Notification |
| [**resendBalanceNotification()**](LoadApi.md#resendBalanceNotification) | **PUT** /wallet/{user_token} | Resend Balance Notification |


## `cancelUserLoad()`

```php
cancelUserLoad($user_token, $load_token, $idempotency_key)
```

Reverse a user load

This **DELETE** endpoint is used to reverse a load transaction that was already processed, allowing you to remove funds from a user's wallet. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path, and the load_token as a parameter in the Query string. <br> The endpoint will then attempt to reverse the specified load transaction. If the load is still in scheduled status, it will be marked as cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

This **POST** endpoint is used to add an autopay rule that will initiate a payout whenever the provided wallet token is loaded. <br> You can use this endpoint to create an autopay rule that automatically sends a percentage of incoming load to a specific destination. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path, and the `destination_token` and percentage of incoming load that should be autopaid to the `destination_token` in the request Body. <br> The response will include a JSON object containing the details of the created autopay rule, including the token, `destination_token` and percentage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

This **DELETE** endpoint is used to delete an existing autopay rule. <br> You can use this endpoint to remove an autopay rule that is no longer needed. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path, and the token of the autopay rule you wish to delete in the request Body. <br> The response will include a message indicating the success of the deletion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

This **GET** endpoint is used to retrieve all autopay rules currently applied to the provided wallet token. <br> You can use this endpoint to obtain information about the autopay rules associated with the wallet. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path. <br> The response will include a JSON array containing details for each autopay rule, including the token, `destination_token` and percentage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

This **GET** endpoint is used to retrieve a transaction history of all loads that were made to the provided user token, including scheduled loads. <br> You can use this endpoint to obtain a comprehensive history of loads for the user token, allowing you to track and analyze their incoming payments over time. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The endpoint will then return a JSON array of load transactions, each including transactions details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

This **POST** endpoint is used to initiate a load transaction, allowing you to add funds to a user token's wallet. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. You also need to provide the `client_load_id`, `source_token`, and amount as JSON parameters in the Request Body. The `client_load_id` is a unique identifier for the transaction that you can use to track it, while the `source_token` is the token or account from which the funds will be loaded. The amount parameter specifies the amount of funds to be loaded into the user's wallet. <br> The response will contain a JSON object indicating the status of the load transaction and any relevant details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadUserTokenPut()`

```php
loadUserTokenPut($user_token, $load_token, $idempotency_key): \MassPayPhpSdk\Model\ResendBalanceNotification200Response
```

Resend Load Notification

This **PUT** endpoint is used to resend a load notification to the user associated with the provided `user_token` for a specific load transaction. <br> You can use this endpoint to help ensure that users are notified promptly and accurately of any incoming funds or other important payment events. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path, and the `load_token` as a parameter in the Query string. The endpoint will then resend a notification to the user for the specified load transaction. <br> The response will contain a JSON object indicating the status of the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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
    $result = $apiInstance->loadUserTokenPut($user_token, $load_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->loadUserTokenPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to load/fetch loads for | |
| **load_token** | **string**| Load token | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\ResendBalanceNotification200Response**](../Model/ResendBalanceNotification200Response.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendBalanceNotification()`

```php
resendBalanceNotification($user_token, $idempotency_key, $wallet_token): \MassPayPhpSdk\Model\ResendBalanceNotification200Response
```

Resend Balance Notification



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\LoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user who owns the wallet
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$wallet_token = 'wallet_token_example'; // string | Optional wallet token. If none is provided, select the first wallet available

try {
    $result = $apiInstance->resendBalanceNotification($user_token, $idempotency_key, $wallet_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadApi->resendBalanceNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **wallet_token** | **string**| Optional wallet token. If none is provided, select the first wallet available | [optional] |

### Return type

[**\MassPayPhpSdk\Model\ResendBalanceNotification200Response**](../Model/ResendBalanceNotification200Response.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
