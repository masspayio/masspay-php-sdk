# MassPayPhpSdk\AccountApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountBalance()**](AccountApi.md#getAccountBalance) | **GET** /account/balance | Get current available balance |
| [**getAccountStatement()**](AccountApi.md#getAccountStatement) | **GET** /account/statement | Get certified account statement |


## `getAccountBalance()`

```php
getAccountBalance(): \MassPayPhpSdk\Model\AvailableBalanceTxnResp[]
```

Get current available balance

This **GET** endpoint is used to retrieve the current available balance for the MassPay account. <br> You can use this endpoint to obtain information about the current balance in your account. <br> There are no required parameters needed to access this endpoint. <br> The response will include a JSON objects containing details for the current available balance, including the token, balance and `currency_code`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MassPayPhpSdk\Model\AvailableBalanceTxnResp[]**](../Model/AvailableBalanceTxnResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountStatement()`

```php
getAccountStatement($start_date, $ending_date): \MassPayPhpSdk\Model\GetAccountStatement200Response
```

Get certified account statement

This **GET** endpoint is used to retrieve a certified PDF ledger statement for a provided timeframe. <br> You can use this endpoint to obtain a ledger statement for your MassPay account for a specific time period. <br> To use this endpoint, you need to provide the `start_date` and `ending_date` as required parameters in the Query string of the URL. <br> The response will include a certified PDF ledger statement containing transaction details for the specified timeframe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = Fri Jan 01 01:00:00 CET 2021; // \DateTime | Starting date of the statement
$ending_date = Mon Feb 01 01:00:00 CET 2021; // \DateTime | Ending date of the statement (not more than 31 days than `start_date`)

try {
    $result = $apiInstance->getAccountStatement($start_date, $ending_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| Starting date of the statement | |
| **ending_date** | **\DateTime**| Ending date of the statement (not more than 31 days than &#x60;start_date&#x60;) | |

### Return type

[**\MassPayPhpSdk\Model\GetAccountStatement200Response**](../Model/GetAccountStatement200Response.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
