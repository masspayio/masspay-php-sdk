# MassPayPhpSdk\KYCApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAttributesVelocity()**](KYCApi.md#findAttributesVelocity) | **POST** /attribute/{user_token}/velocity | Attributes velocity check |
| [**getUserUserTokenKycAu10tix()**](KYCApi.md#getUserUserTokenKycAu10tix) | **GET** /user/{user_token}/kyc/au10tix | Get an Au10tix session link |
| [**getUserUserTokenKycVeriiff()**](KYCApi.md#getUserUserTokenKycVeriiff) | **GET** /user/{user_token}/kyc/veriff | Get a Veriff session link |


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


$apiInstance = new MassPayPhpSdk\Api\KYCApi(
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
    echo 'Exception when calling KYCApi->findAttributesVelocity: ', $e->getMessage(), PHP_EOL;
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

## `getUserUserTokenKycAu10tix()`

```php
getUserUserTokenKycAu10tix($user_token): \MassPayPhpSdk\Model\GetUserUserTokenKycAu10tix200Response
```

Get an Au10tix session link

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


$apiInstance = new MassPayPhpSdk\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string

try {
    $result = $apiInstance->getUserUserTokenKycAu10tix($user_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCApi->getUserUserTokenKycAu10tix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**|  | |

### Return type

[**\MassPayPhpSdk\Model\GetUserUserTokenKycAu10tix200Response**](../Model/GetUserUserTokenKycAu10tix200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserUserTokenKycVeriiff()`

```php
getUserUserTokenKycVeriiff($user_token): \MassPayPhpSdk\Model\GetUserUserTokenKycVeriiff200Response
```

Get a Veriff session link

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


$apiInstance = new MassPayPhpSdk\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string

try {
    $result = $apiInstance->getUserUserTokenKycVeriiff($user_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCApi->getUserUserTokenKycVeriiff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**|  | |

### Return type

[**\MassPayPhpSdk\Model\GetUserUserTokenKycVeriiff200Response**](../Model/GetUserUserTokenKycVeriiff200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
