# MassPayPhpSdk\CatalogApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCheapestCountryServices()**](CatalogApi.md#getCheapestCountryServices) | **GET** /country/{country_code}/cheapest | Gets a list of Companies and their cheapest service offerings for the given country code. |
| [**getCountryList()**](CatalogApi.md#getCountryList) | **GET** /country/list | Gets a list of countries where services offered. |
| [**getCountryServices()**](CatalogApi.md#getCountryServices) | **GET** /country/{country_code} | Gets a list of Companies and their service offerings for the given country code. |
| [**getDestinationTokenAlternatives()**](CatalogApi.md#getDestinationTokenAlternatives) | **GET** /service/{destination_token}/alternatives | Returns list of alternative service to a provided service |
| [**getUserAgreement()**](CatalogApi.md#getUserAgreement) | **GET** /user-agreements | Get User Agreement |
| [**getUserAgreementsNames()**](CatalogApi.md#getUserAgreementsNames) | **OPTIONS** /user-agreements | Get Available User Agreements |


## `getCheapestCountryServices()`

```php
getCheapestCountryServices($country_code, $amount, $limit, $idempotency_key, $wallet_token, $include_payer_logos, $user_token, $source_currency): \MassPayPhpSdk\Model\CompaniesResp
```

Gets a list of Companies and their cheapest service offerings for the given country code.

Gets a list of all the available services and pricing for each respected company for a provided country code. If two providers offer similar service, only show the cheapest option

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


$apiInstance = new MassPayPhpSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | Country code searching services for. 3 letters [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code\"
$amount = '200'; // string | Returns the results fee based on the given amount, defaults to $200
$limit = 3.4; // float | Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet used. If provided, the results would be custom-tailored to this user.
$include_payer_logos = true; // bool | Whether to include the payers logo in base64 format.
$user_token = 'user_token_example'; // string | Token representing the user for which we fetch the catalog. If provided, the results would be custom-tailored to this user. Not necessary if wallet_token is provided
$source_currency = 'source_currency_example'; // string | Required if amount is provided. The currency associated with the amount

try {
    $result = $apiInstance->getCheapestCountryServices($country_code, $amount, $limit, $idempotency_key, $wallet_token, $include_payer_logos, $user_token, $source_currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCheapestCountryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country code searching services for. 3 letters [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code\&quot; | |
| **amount** | **string**| Returns the results fee based on the given amount, defaults to $200 | [optional] [default to &#39;200&#39;] |
| **limit** | **float**| Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent | [optional] |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **wallet_token** | **string**| Token representing the wallet used. If provided, the results would be custom-tailored to this user. | [optional] |
| **include_payer_logos** | **bool**| Whether to include the payers logo in base64 format. | [optional] [default to false] |
| **user_token** | **string**| Token representing the user for which we fetch the catalog. If provided, the results would be custom-tailored to this user. Not necessary if wallet_token is provided | [optional] |
| **source_currency** | **string**| Required if amount is provided. The currency associated with the amount | [optional] |

### Return type

[**\MassPayPhpSdk\Model\CompaniesResp**](../Model/CompaniesResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountryList()`

```php
getCountryList(): \MassPayPhpSdk\Model\Country[]
```

Gets a list of countries where services offered.

Get a list of all currently available countries of service.

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


$apiInstance = new MassPayPhpSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountryList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCountryList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MassPayPhpSdk\Model\Country[]**](../Model/Country.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountryServices()`

```php
getCountryServices($country_code, $amount, $limit, $idempotency_key, $wallet_token, $include_payer_logos, $user_token, $source_currency): \MassPayPhpSdk\Model\CompaniesResp
```

Gets a list of Companies and their service offerings for the given country code.

Gets a list of all the available services and pricing for each respected company for a provided country code.

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


$apiInstance = new MassPayPhpSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | Country code searching services for. 3 letters [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code\"
$amount = '200'; // string | Returns the results fee based on the given amount, defaults to $200
$limit = 3.4; // float | Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$wallet_token = 'wallet_token_example'; // string | Token representing the wallet used. If provided, the results would be custom-tailored to this user. Not necessary if user_token is provided
$include_payer_logos = true; // bool | Whether to include the payers logo in base64 format.
$user_token = 'user_token_example'; // string | Token representing the user for which we fetch the catalog. If provided, the results would be custom-tailored to this user. Not necessary if wallet_token is provided
$source_currency = 'source_currency_example'; // string | Required if amount is provided. The currency associated with the amount

try {
    $result = $apiInstance->getCountryServices($country_code, $amount, $limit, $idempotency_key, $wallet_token, $include_payer_logos, $user_token, $source_currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCountryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country code searching services for. 3 letters [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code\&quot; | |
| **amount** | **string**| Returns the results fee based on the given amount, defaults to $200 | [optional] [default to &#39;200&#39;] |
| **limit** | **float**| Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent | [optional] |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **wallet_token** | **string**| Token representing the wallet used. If provided, the results would be custom-tailored to this user. Not necessary if user_token is provided | [optional] |
| **include_payer_logos** | **bool**| Whether to include the payers logo in base64 format. | [optional] [default to false] |
| **user_token** | **string**| Token representing the user for which we fetch the catalog. If provided, the results would be custom-tailored to this user. Not necessary if wallet_token is provided | [optional] |
| **source_currency** | **string**| Required if amount is provided. The currency associated with the amount | [optional] |

### Return type

[**\MassPayPhpSdk\Model\CompaniesResp**](../Model/CompaniesResp.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDestinationTokenAlternatives()`

```php
getDestinationTokenAlternatives($destination_token, $idempotency_key): \MassPayPhpSdk\Model\Service
```

Returns list of alternative service to a provided service

Gets a list of all the available services and pricing for each respected company for a provided country code.

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


$apiInstance = new MassPayPhpSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_token = 'destination_token_example'; // string | Destination token
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getDestinationTokenAlternatives($destination_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getDestinationTokenAlternatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_token** | **string**| Destination token | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\Service**](../Model/Service.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAgreement()`

```php
getUserAgreement($id): \MassPayPhpSdk\Model\GetUserAgreement200Response
```

Get User Agreement

Get available user agreements for payout services

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


$apiInstance = new MassPayPhpSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2; // int | Id representing user agreement (retrieved from OPTIONS call)

try {
    $result = $apiInstance->getUserAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getUserAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id representing user agreement (retrieved from OPTIONS call) | |

### Return type

[**\MassPayPhpSdk\Model\GetUserAgreement200Response**](../Model/GetUserAgreement200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAgreementsNames()`

```php
getUserAgreementsNames(): \MassPayPhpSdk\Model\GetUserAgreementsNames200ResponseInner[]
```

Get Available User Agreements

Get available user agreements for payout services (without content)

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


$apiInstance = new MassPayPhpSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserAgreementsNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getUserAgreementsNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MassPayPhpSdk\Model\GetUserAgreementsNames200ResponseInner[]**](../Model/GetUserAgreementsNames200ResponseInner.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
