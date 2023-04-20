# MassPayPhpSdk\TaxApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxUsers()**](TaxApi.md#getTaxUsers) | **GET** /tax | Get List Of Users Annual Balance |


## `getTaxUsers()`

```php
getTaxUsers($amount_threshold, $tax_year): \MassPayPhpSdk\Model\TaxYearUserResp[]
```

Get List Of Users Annual Balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount_threshold = 3.4; // float | If specified, only show users whose total balance exceeds the provided amount
$tax_year = 56; // int | The year for which we would like to obtain tax information for. If none provided, defaults to previous year.

try {
    $result = $apiInstance->getTaxUsers($amount_threshold, $tax_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount_threshold** | **float**| If specified, only show users whose total balance exceeds the provided amount | [optional] |
| **tax_year** | **int**| The year for which we would like to obtain tax information for. If none provided, defaults to previous year. | [optional] |

### Return type

[**\MassPayPhpSdk\Model\TaxYearUserResp[]**](../Model/TaxYearUserResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
