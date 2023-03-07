# MassPayPhpSdk\InternalApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commitPayoutTxnInternal()**](InternalApi.md#commitPayoutTxnInternal) | **PUT** /payout/{user_token}/{payout_token}/internal | Commit payout transaction |
| [**decryptStatementJWT()**](InternalApi.md#decryptStatementJWT) | **GET** /decrypt-statement-JWT | Decrypt Statement JWT |
| [**distributorsBalances()**](InternalApi.md#distributorsBalances) | **GET** /distributors/balances | Retrieve available balances at distributors |
| [**generateInvoice()**](InternalApi.md#generateInvoice) | **OPTIONS** /payout/{user_token}/{payout_token} | Generate Invoice |
| [**generatePricingList()**](InternalApi.md#generatePricingList) | **POST** /generate_pricing_list | Generate pricing list |
| [**getCallbackCompanyId()**](InternalApi.md#getCallbackCompanyId) | **GET** /callback/{company_id} | Transaction Status Callback |
| [**getDevelopmentTest()**](InternalApi.md#getDevelopmentTest) | **GET** /development/test | Development |
| [**initiatePayoutInternal()**](InternalApi.md#initiatePayoutInternal) | **POST** /payout/{user_token}/internal | Initiate a payout transaction |
| [**postAccountApiKey()**](InternalApi.md#postAccountApiKey) | **POST** /account/api-key | Generate API Key |
| [**postCallbackCompanyId()**](InternalApi.md#postCallbackCompanyId) | **POST** /callback/{company_id} | Transaction Status Callback |
| [**updateUserInternal()**](InternalApi.md#updateUserInternal) | **PUT** /user/{user_token}/internal | Internal user update |
| [**uploadBatch()**](InternalApi.md#uploadBatch) | **POST** /batch | Upload a batch |


## `commitPayoutTxnInternal()`

```php
commitPayoutTxnInternal($user_token, $payout_token, $idempotency_key): \MassPayPhpSdk\Model\PayoutTxnCommitResp
```

Commit payout transaction

Commits a previously initiated transaction.

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = 'payout_token_example'; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->commitPayoutTxnInternal($user_token, $payout_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->commitPayoutTxnInternal: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `decryptStatementJWT()`

```php
decryptStatementJWT($token): array<string,string>
```

Decrypt Statement JWT



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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token

try {
    $result = $apiInstance->decryptStatementJWT($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->decryptStatementJWT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token | |

### Return type

**array<string,string>**

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `distributorsBalances()`

```php
distributorsBalances(): \MassPayPhpSdk\Model\DistributorsBalances200ResponseInner[]
```

Retrieve available balances at distributors



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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->distributorsBalances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->distributorsBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MassPayPhpSdk\Model\DistributorsBalances200ResponseInner[]**](../Model/DistributorsBalances200ResponseInner.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateInvoice()`

```php
generateInvoice($user_token, $payout_token, $idempotency_key): \MassPayPhpSdk\Model\GenerateInvoice200Response
```

Generate Invoice

Generate an invoice for the transaction

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Token representing the user to pay out
$payout_token = payout_ed75acf2-1c35-4073-9adc-389084d1e96b; // string | Token representing the trsanaction. Retrieved from `/payout/{user_token}`
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->generateInvoice($user_token, $payout_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->generateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to pay out | |
| **payout_token** | **string**| Token representing the trsanaction. Retrieved from &#x60;/payout/{user_token}&#x60; | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\GenerateInvoice200Response**](../Model/GenerateInvoice200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePricingList()`

```php
generatePricingList($generate_pricing_list_request)
```

Generate pricing list

Generates a pricing list for the provided countries and email it to the requesting employee

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_pricing_list_request = ["MEX","BRA"]; // \MassPayPhpSdk\Model\GeneratePricingListRequest

try {
    $apiInstance->generatePricingList($generate_pricing_list_request);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->generatePricingList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_pricing_list_request** | [**\MassPayPhpSdk\Model\GeneratePricingListRequest**](../Model/GeneratePricingListRequest.md)|  | [optional] |

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

## `getCallbackCompanyId()`

```php
getCallbackCompanyId($company_id)
```

Transaction Status Callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string

try {
    $apiInstance->getCallbackCompanyId($company_id);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->getCallbackCompanyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDevelopmentTest()`

```php
getDevelopmentTest()
```

Development



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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getDevelopmentTest();
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->getDevelopmentTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiatePayoutInternal()`

```php
initiatePayoutInternal($user_token, $payout_txn, $idempotency_key, $limit): \MassPayPhpSdk\Model\PayoutTxnResp
```

Initiate a payout transaction

Initiates a payout transaction to a provided user token.

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
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
    $result = $apiInstance->initiatePayoutInternal($user_token, $payout_txn, $idempotency_key, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->initiatePayoutInternal: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccountApiKey()`

```php
postAccountApiKey($post_account_api_key_request): \MassPayPhpSdk\Model\PostAccountApiKey200Response
```

Generate API Key

Generate API access key

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_account_api_key_request = new \MassPayPhpSdk\Model\PostAccountApiKeyRequest(); // \MassPayPhpSdk\Model\PostAccountApiKeyRequest

try {
    $result = $apiInstance->postAccountApiKey($post_account_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->postAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_account_api_key_request** | [**\MassPayPhpSdk\Model\PostAccountApiKeyRequest**](../Model/PostAccountApiKeyRequest.md)|  | [optional] |

### Return type

[**\MassPayPhpSdk\Model\PostAccountApiKey200Response**](../Model/PostAccountApiKey200Response.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCallbackCompanyId()`

```php
postCallbackCompanyId($company_id, $body)
```

Transaction Status Callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->postCallbackCompanyId($company_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->postCallbackCompanyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **body** | **object**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserInternal()`

```php
updateUserInternal($user_token, $update_user, $idempotency_key, $is_compliance_update, $employee_username): \MassPayPhpSdk\Model\StoredUser
```

Internal user update

Updates profile information for a provided user token.

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | user token that need to be updated
$update_user = new \MassPayPhpSdk\Model\UpdateUser(); // \MassPayPhpSdk\Model\UpdateUser | Updated user object
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$is_compliance_update = True; // bool | Whether this update was completed by compliance team
$employee_username = 'employee_username_example'; // string | Hashed username of the employee making the update

try {
    $result = $apiInstance->updateUserInternal($user_token, $update_user, $idempotency_key, $is_compliance_update, $employee_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->updateUserInternal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| user token that need to be updated | |
| **update_user** | [**\MassPayPhpSdk\Model\UpdateUser**](../Model/UpdateUser.md)| Updated user object | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **is_compliance_update** | **bool**| Whether this update was completed by compliance team | [optional] |
| **employee_username** | **string**| Hashed username of the employee making the update | [optional] |

### Return type

[**\MassPayPhpSdk\Model\StoredUser**](../Model/StoredUser.md)

### Authorization

[api_key](../../README.md#api_key), [AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadBatch()`

```php
uploadBatch($upload_batch_request)
```

Upload a batch

Uploads an XLSX file with batch instructions

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


$apiInstance = new MassPayPhpSdk\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_batch_request = new \MassPayPhpSdk\Model\UploadBatchRequest(); // \MassPayPhpSdk\Model\UploadBatchRequest

try {
    $apiInstance->uploadBatch($upload_batch_request);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->uploadBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_batch_request** | [**\MassPayPhpSdk\Model\UploadBatchRequest**](../Model/UploadBatchRequest.md)|  | [optional] |

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
