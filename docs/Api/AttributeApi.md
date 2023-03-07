# MassPayPhpSdk\AttributeApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAttributesVelocity()**](AttributeApi.md#findAttributesVelocity) | **POST** /attribute/{user_token}/velocity | Attributes velocity check |
| [**getAttrs()**](AttributeApi.md#getAttrs) | **GET** /attribute/{user_token}/{destination_token}/{currency} | Get user attributes for destination_token |
| [**storeAttrs()**](AttributeApi.md#storeAttrs) | **POST** /attribute/{user_token}/{destination_token}/{currency} | Store user attributes |


## `findAttributesVelocity()`

```php
findAttributesVelocity($user_token, $idempotency_key, $attr_velocity_request_inner): object[]
```

Attributes velocity check

Identify users with matching attribute values

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


$apiInstance = new MassPayPhpSdk\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to retrieve attributes for
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$attr_velocity_request_inner = array(new \MassPayPhpSdk\Model\AttrVelocityRequestInner()); // \MassPayPhpSdk\Model\AttrVelocityRequestInner[]

try {
    $result = $apiInstance->findAttributesVelocity($user_token, $idempotency_key, $attr_velocity_request_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->findAttributesVelocity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to retrieve attributes for | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **attr_velocity_request_inner** | [**\MassPayPhpSdk\Model\AttrVelocityRequestInner[]**](../Model/AttrVelocityRequestInner.md)|  | [optional] |

### Return type

**object[]**

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttrs()`

```php
getAttrs($currency, $user_token, $destination_token, $idempotency_key): \MassPayPhpSdk\Model\AttrsRequirement[]
```

Get user attributes for destination_token

Get all the required attributes for the provided user for a prticular destination token. If any of the attributes already have a stored value, it will be returned as well.

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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

If existing attributes are already stored, this call will override its values.

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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
