# MassPayPhpSdk\CardApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWalletCardInfo()**](CardApi.md#getWalletCardInfo) | **GET** /wallet/{user_token}/{wallet_token}/card | Get MassPay Card Information |
| [**updateWalletCardInfo()**](CardApi.md#updateWalletCardInfo) | **PUT** /wallet/{user_token}/{wallet_token}/card | Update MassPay Card Information |


## `getWalletCardInfo()`

```php
getWalletCardInfo($user_token, $wallet_token): \MassPayPhpSdk\Model\GetWalletCardInfo200Response
```

Get MassPay Card Information

Retrieves MassPay card information that is associated with the provided wallet token

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


$apiInstance = new MassPayPhpSdk\Api\CardApi(
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
    echo 'Exception when calling CardApi->getWalletCardInfo: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

Update card pin number or/and status

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


$apiInstance = new MassPayPhpSdk\Api\CardApi(
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
    echo 'Exception when calling CardApi->updateWalletCardInfo: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
