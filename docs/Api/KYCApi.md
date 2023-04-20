# MassPayPhpSdk\KYCApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAttributesVelocity()**](KYCApi.md#findAttributesVelocity) | **POST** /attribute/{user_token}/velocity | Attributes velocity check |
| [**getUserUserTokenKycAu10tix()**](KYCApi.md#getUserUserTokenKycAu10tix) | **GET** /user/{user_token}/kyc/au10tix | Get an Au10tix session link |
| [**getUserUserTokenKycVeriff()**](KYCApi.md#getUserUserTokenKycVeriff) | **GET** /user/{user_token}/kyc/veriff | Get a Veriff session link |
| [**uploadIdPhotos()**](KYCApi.md#uploadIdPhotos) | **POST** /user/{user_token}/kyc/id | Upload ID Photos |


## `findAttributesVelocity()`

```php
findAttributesVelocity($user_token, $idempotency_key, $attr_velocity_request_inner): object[]
```

Attributes velocity check

This **POST** endpoint is used to perform an attributes velocity check to identify users with matching attribute values. <br> You can use this endpoint to help prevent fraudulent activities by monitoring for unusual attribute value changes over time. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL path and the required parameters in the request Body. <br> The endpoint will then compare the provided attribute value with the historical attribute values for the same user and determine if it meets the velocity check criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

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

This **GET** endpoint is used to obtain a link to an Au10tix session for the user with the provided user token. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The endpoint will then generate a session link that you can use to initiate an identity verification process for the user through the Au10tix platform. <br> The response will contain the session link as a URL in a JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserUserTokenKycVeriff()`

```php
getUserUserTokenKycVeriff($user_token): \MassPayPhpSdk\Model\GetUserUserTokenKycVeriff200Response
```

Get a Veriff session link

This **GET** endpoint is used to obtain a link to a Veriff session for the user with the provided user token. <br> The endpoint will then generate a session link that you can use to initiate an identity verification process for the user through the Veriff platform. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The response will contain the session link as a URL in a JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string

try {
    $result = $apiInstance->getUserUserTokenKycVeriff($user_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCApi->getUserUserTokenKycVeriff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**|  | |

### Return type

[**\MassPayPhpSdk\Model\GetUserUserTokenKycVeriff200Response**](../Model/GetUserUserTokenKycVeriff200Response.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadIdPhotos()`

```php
uploadIdPhotos($user_token, $id_upload): object
```

Upload ID Photos

Upload IDs for the provided user. This is an optional endpoint if the images are captured through means other than the link that is generated in the attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string
$id_upload = array(new \MassPayPhpSdk\Model\IDUpload()); // \MassPayPhpSdk\Model\IDUpload[]

try {
    $result = $apiInstance->uploadIdPhotos($user_token, $id_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCApi->uploadIdPhotos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**|  | |
| **id_upload** | [**\MassPayPhpSdk\Model\IDUpload[]**](../Model/IDUpload.md)|  | [optional] |

### Return type

**object**

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
