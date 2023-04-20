# MassPayPhpSdk\WalletApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAutopayRule()**](WalletApi.md#createAutopayRule) | **POST** /wallet/{user_token}/{wallet_token}/autopay | Add autopay rule |
| [**deleteAutopayRule()**](WalletApi.md#deleteAutopayRule) | **DELETE** /wallet/{user_token}/{wallet_token}/autopay | Delete autopay rule |
| [**getAutopayRules()**](WalletApi.md#getAutopayRules) | **GET** /wallet/{user_token}/{wallet_token}/autopay | Get all autopay rules |
| [**getWallet()**](WalletApi.md#getWallet) | **GET** /wallet/{user_token} | Retrieve all available wallets for a user |
| [**getWalletCardInfo()**](WalletApi.md#getWalletCardInfo) | **GET** /wallet/{user_token}/{wallet_token}/card | Get MassPay Card Information |
| [**updateWalletCardInfo()**](WalletApi.md#updateWalletCardInfo) | **PUT** /wallet/{user_token}/{wallet_token}/card | Update MassPay Card Information |


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


$apiInstance = new MassPayPhpSdk\Api\WalletApi(
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
    echo 'Exception when calling WalletApi->createAutopayRule: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new MassPayPhpSdk\Api\WalletApi(
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
    echo 'Exception when calling WalletApi->deleteAutopayRule: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new MassPayPhpSdk\Api\WalletApi(
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
    echo 'Exception when calling WalletApi->getAutopayRules: ', $e->getMessage(), PHP_EOL;
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

## `getWallet()`

```php
getWallet($user_token, $idempotency_key): \MassPayPhpSdk\Model\WalletTxnResp[]
```

Retrieve all available wallets for a user

This **GET** endpoint is used to retrieve all available wallets for a provided user token. <br> You can use this endpoint to obtain information about the wallets associated with the provided user token. <br> To use this endpoint, you need to provide the `user_token` as a required parameter in the URL Path. <br> The response will include a JSON array containing details for each wallet including `user_token`, `balance`, `currency_code`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user who owns the wallet
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getWallet($user_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\WalletTxnResp[]**](../Model/WalletTxnResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletCardInfo()`

```php
getWalletCardInfo($user_token, $wallet_token): \MassPayPhpSdk\Model\GetWalletCardInfo200Response
```

Get MassPay Card Information

This **GET** endpoint is used to retrieve MassPay card information associated with the provided wallet token. <br> You can use this endpoint to obtain information about the MassPay card associated with the wallet. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path. <br> The response will include a JSON object containing details for the MassPay card, including the card number, balance, status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = usr_62727c1f-38a3-4a98-b7c9-e84093a106cd; // string | Token representing the user who owns the wallet
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet

try {
    $result = $apiInstance->getWalletCardInfo($user_token, $wallet_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletCardInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **wallet_token** | **string**| Token representing the wallet | |

### Return type

[**\MassPayPhpSdk\Model\GetWalletCardInfo200Response**](../Model/GetWalletCardInfo200Response.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWalletCardInfo()`

```php
updateWalletCardInfo($user_token, $wallet_token, $pin, $status)
```

Update MassPay Card Information

This **PUT** endpoint is used to update the MassPay card information for a provided user token and wallet token. <br> You can use this endpoint to help your users manage their MassPay card information, including updating their card PIN number or status. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as parameters in the URL Path, along with the parameters in the request Query, including the card pin number or(and) status. <br> The endpoint will then update the card information for the provided user and wallet token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = usr_62727c1f-38a3-4a98-b7c9-e84093a106cd; // string | Token representing the user who owns the wallet
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet
$pin = 0123; // string | New 4 digit pin number for the card (To be used in ATM machines)
$status = CLOSE; // string | New status for the card

try {
    $apiInstance->updateWalletCardInfo($user_token, $wallet_token, $pin, $status);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->updateWalletCardInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user who owns the wallet | |
| **wallet_token** | **string**| Token representing the wallet | |
| **pin** | **string**| New 4 digit pin number for the card (To be used in ATM machines) | [optional] |
| **status** | **string**| New status for the card | [optional] |

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
