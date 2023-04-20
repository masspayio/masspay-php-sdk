# MassPayPhpSdk\AttributeApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttrs()**](AttributeApi.md#getAttrs) | **GET** /attribute/{user_token}/{destination_token}/{currency} | Get user attributes for destination_token |
| [**storeAttrs()**](AttributeApi.md#storeAttrs) | **POST** /attribute/{user_token}/{destination_token}/{currency} | Store user attributes |


## `getAttrs()`

```php
getAttrs($currency, $user_token, $destination_token, $idempotency_key): \MassPayPhpSdk\Model\AttrsRequirement[]
```

Get user attributes for destination_token

This **GET** endpoint is used to retrieve user attributes for a specific destination token. <br> You can use this endpoint to retrieve user attributes and provide personalized service to your users based on their preferences, demographic data, or other relevant information. <br> To use this endpoint, you need to provide the `user_token`, `destination_token`, and currency as parameters in the URL Path. <br> The endpoint will then return all the required attributes for the provided user for the specified destination token. If any of the attributes already have a stored value, it will be returned as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = BRL; // string | The destination currency sending funds to. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format.
$user_token = 'user_token_example'; // string | Token representing the user to retrieve attributes for
$destination_token = 'destination_token_example'; // string | Token that represents the payout destination i.e. Omnex->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback.
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getAttrs($currency, $user_token, $destination_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->getAttrs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| The destination currency sending funds to. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. | |
| **user_token** | **string**| Token representing the user to retrieve attributes for | |
| **destination_token** | **string**| Token that represents the payout destination i.e. Omnex-&gt;Brazil-&gt;Bank Deposit-&gt;Itau. To be retrieved from the #pricing callback. | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\AttrsRequirement[]**](../Model/AttrsRequirement.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeAttrs()`

```php
storeAttrs($currency, $user_token, $destination_token, $attr_txn, $idempotency_key)
```

Store user attributes

This **POST** endpoint is used to store user attributes, allowing you to associate additional data with a user token. <br> To use this endpoint, you need to provide the `user_token`, `destination_token`, and currency as parameters in the URL Path. You also need to provide the attribute values as JSON parameters in the Request body. <br> If existing attributes are already stored for the user, this call will override their values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = BRL; // string | The destination currency sending funds to. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format.
$user_token = 'user_token_example'; // string | Token representing the user to store attributes for
$destination_token = 'destination_token_example'; // string | Token that represents the payout destination i.e. Omnex->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback.
$attr_txn = new \MassPayPhpSdk\Model\AttrTxn(); // \MassPayPhpSdk\Model\AttrTxn | Attr parameters to store
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $apiInstance->storeAttrs($currency, $user_token, $destination_token, $attr_txn, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->storeAttrs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| The destination currency sending funds to. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. | |
| **user_token** | **string**| Token representing the user to store attributes for | |
| **destination_token** | **string**| Token that represents the payout destination i.e. Omnex-&gt;Brazil-&gt;Bank Deposit-&gt;Itau. To be retrieved from the #pricing callback. | |
| **attr_txn** | [**\MassPayPhpSdk\Model\AttrTxn**](../Model/AttrTxn.md)| Attr parameters to store | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

void (empty response body)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
