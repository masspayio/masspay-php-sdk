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

This **GET** endpoint is used to retrieve MassPay card information associated with the provided wallet token. <br> You can use this endpoint to obtain information about the MassPay card associated with the wallet. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path. <br> The response will include a JSON object containing details for the MassPay card, including the card number, balance, status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
