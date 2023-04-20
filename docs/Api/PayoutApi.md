# MassPayPhpSdk\PayoutApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commitPayoutTxn()**](PayoutApi.md#commitPayoutTxn) | **PUT** /payout/{user_token}/{payout_token} | Commit payout transaction |
| [**getPayoutStatus()**](PayoutApi.md#getPayoutStatus) | **GET** /payout/{user_token}/{payout_token} | Get status of a payout by payout token |
| [**getTransactionConfirmationDetails()**](PayoutApi.md#getTransactionConfirmationDetails) | **PATCH** /payout/{user_token}/{payout_token} | Get transaction confirmation details |
| [**getUserPayoutsByToken()**](PayoutApi.md#getUserPayoutsByToken) | **GET** /payout/{user_token} | Get history of payouts by user token |
| [**initiatePayout()**](PayoutApi.md#initiatePayout) | **POST** /payout/{user_token} | Initiate a payout transaction |


## `commitPayoutTxn()`

```php
commitPayoutTxn($user_token, $payout_token, $idempotency_key): \MassPayPhpSdk\Model\PayoutTxnCommitResp
```

Commit payout transaction

This **PUT** endpoint is used to commit a previously created payout transaction. <br> Once a payout transaction is created, you can use this endpoint to commit the transaction and initiate the actual payout. <br> To use this endpoint, you need to provide the `user_token` and `payout_token` of the payout transaction you want to commit in the URL Path. <br> The response will include a JSON object containing details about the committed payout transaction, including the `payout_token`, `payout_status`, `pickup_code` and possible errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = 'payout_token_example'; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->commitPayoutTxn($user_token, $payout_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->commitPayoutTxn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnCommitResp**](../Model/PayoutTxnCommitResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayoutStatus()`

```php
getPayoutStatus($user_token, $payout_token, $idempotency_key, $force_status_update, $include_payer_logo): \MassPayPhpSdk\Model\PayoutTxnResp
```

Get status of a payout by payout token

This **GET** endpoint is used to retrieve the status of a payout transaction for a user with the specified token and payout token. <br> You can use this endpoint to check the status of a specific payout transaction, including whether the payout has been successfully processed or if there was an error. <br> To use this endpoint, you need to provide the `user_token` and `payout_token` in the URL Path. <br> The response will include a JSON object containing details about the payout transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = payout_ed75acf2-1c35-4073-9adc-389084d1e96b; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$force_status_update = true; // bool | Attempts to get an updated status update from the payout destination
$include_payer_logo = True; // bool | Whether to include the payer logo in base64 format.

try {
    $result = $apiInstance->getPayoutStatus($user_token, $payout_token, $idempotency_key, $force_status_update, $include_payer_logo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **force_status_update** | **bool**| Attempts to get an updated status update from the payout destination | [optional] [default to false] |
| **include_payer_logo** | **bool**| Whether to include the payer logo in base64 format. | [optional] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnResp**](../Model/PayoutTxnResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionConfirmationDetails()`

```php
getTransactionConfirmationDetails($user_token, $payout_token, $idempotency_key): \MassPayPhpSdk\Model\GetTransactionConfirmationDetails200Response
```

Get transaction confirmation details

This **PATCH** endpoint is used to obtain a PDF document with all the details of a payout transaction for a user with the specified token and payout token. <br> You can use this endpoint to obtain confirmation details about a specific payout transaction. <br> To use this endpoint, you need to provide the `user_token` and `payout_token` in the URL Path. <br> The response will include a PDF document containing all the details of the payout transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = payout_ed75acf2-1c35-4073-9adc-389084d1e96b; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getTransactionConfirmationDetails($user_token, $payout_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getTransactionConfirmationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\GetTransactionConfirmationDetails200Response**](../Model/GetTransactionConfirmationDetails200Response.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPayoutsByToken()`

```php
getUserPayoutsByToken($user_token, $idempotency_key, $include_payer_logos): \MassPayPhpSdk\Model\PayoutTxnResp[]
```

Get history of payouts by user token

This **GET** endpoint is used to retrieve the payout history for a user with the specified token. <br> You can use this endpoint to view all payouts made to a user, including the `payout_token`, `destinantion_token` and `destination_amount`. <br> To use this endpoint, you need to provide the user token of the recipient in the URL Path. <br> The response will include a JSON object containing an array of payout transactions for the specified user, with each transaction including details such as the transaction ID, payout amount, currency, payout status, and date and time of the payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | The user token that needs to be fetched.
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$include_payer_logos = true; // bool | Whether to include the payers logo in base64 format.

try {
    $result = $apiInstance->getUserPayoutsByToken($user_token, $idempotency_key, $include_payer_logos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getUserPayoutsByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| The user token that needs to be fetched. | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **include_payer_logos** | **bool**| Whether to include the payers logo in base64 format. | [optional] [default to false] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnResp[]**](../Model/PayoutTxnResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiatePayout()`

```php
initiatePayout($user_token, $payout_txn, $idempotency_key, $limit): \MassPayPhpSdk\Model\PayoutTxnResp
```

Initiate a payout transaction

This **POST** endpoint is used to initiate a payout transaction from your account to a user with a specified token. <br> You can use this endpoint to pay out funds to your users, such as payments for services rendered or rewards for completing tasks. To use this endpoint, you need to provide the user token of the recipient in the URL Path. <br> The request body should include the funding source (`source_token`), payout destination (`destination_token`) and specify in which currency the payout should be made (`destination_currency_code`). <br> As a response API will return all details about your payout transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_txn = new \MassPayPhpSdk\Model\PayoutTxn(); // \MassPayPhpSdk\Model\PayoutTxn | Payout parameters for a quote
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$limit = 3.4; // float | Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent

try {
    $result = $apiInstance->initiatePayout($user_token, $payout_txn, $idempotency_key, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->initiatePayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_txn** | [**\MassPayPhpSdk\Model\PayoutTxn**](../Model/PayoutTxn.md)| Payout parameters for a quote | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **limit** | **float**| Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent | [optional] |

### Return type

[**\MassPayPhpSdk\Model\PayoutTxnResp**](../Model/PayoutTxnResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
