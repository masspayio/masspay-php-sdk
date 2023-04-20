# MassPayPhpSdk\UserApi

All URIs are relative to https://api.masspay.io/v0.1.4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUser()**](UserApi.md#createUser) | **POST** /user | Create a user |
| [**getUserByToken()**](UserApi.md#getUserByToken) | **GET** /user/{user_token} | Get user by user token |
| [**getUserHistory()**](UserApi.md#getUserHistory) | **GET** /user/{user_token}/history | Transactions history |
| [**updateUser()**](UserApi.md#updateUser) | **PUT** /user/{user_token} | Updated user |
| [**userLookup()**](UserApi.md#userLookup) | **GET** /user/lookup | Lookup an existing user |


## `createUser()`

```php
createUser($user): \MassPayPhpSdk\Model\StoredUser
```

Create a user

This **POST** endpoint is used to create a new user in MassPay. <br> You can use this endpoint to create a new user with the specified user details in JSON format in the request Body. <br> To use this endpoint, you need to provide the `internal_user_id`, `country`, `first_name`, `last_name`, and `email` as required parameters in the Request Body. <br> The response will include details about the newly created user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \MassPayPhpSdk\Model\User(); // \MassPayPhpSdk\Model\User | Created user object

try {
    $result = $apiInstance->createUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | [**\MassPayPhpSdk\Model\User**](../Model/User.md)| Created user object | |

### Return type

[**\MassPayPhpSdk\Model\StoredUser**](../Model/StoredUser.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserByToken()`

```php
getUserByToken($user_token, $idempotency_key): \MassPayPhpSdk\Model\StoredUser
```

Get user by user token

This **GET** endpoint is used to retrieve a user's profile by their user token in MassPay. <br> You can use this endpoint to obtain a user profile for a specified user token. <br> To use this endpoint, you need to provide the `user_token` as a required parameter in the URL Path. <br> The response will include all available details for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | The user token that needs to be fetched.
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->getUserByToken($user_token, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| The user token that needs to be fetched. | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\StoredUser**](../Model/StoredUser.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserHistory()`

```php
getUserHistory($user_token, $idempotency_key, $number_of_records, $start_date, $end_date, $page, $type, $wallet_token, $show_all_clients): \MassPayPhpSdk\Model\TxnHistoryResp[]
```

Transactions history

This **GET** endpoint is used to retrieve a list of all transactions, including payouts, loads, and spendbacks, for a provider user with the provided user token. <br> You can use this endpoint to obtain a comprehensive history of transactions for the provider user, allowing you to track and analyze their payment activities over time. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The response will contain a JSON array of transaction objects, each including transactions details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = usr_f4741aa2-9f39-4358-8247-2409e3fc2715; // string | Token representing the user to get transactions history for
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing
$number_of_records = 10; // float | Number of records to return
$start_date = Tue Mar 31 02:00:00 CEST 2020; // \DateTime | Starting date
$end_date = Tue Mar 31 02:00:00 CEST 2020; // \DateTime | Ending date
$page = 1; // int | Page number
$type = payout; // string | Filter particular types of transactions. Comma separated to include multiple types
$wallet_token = 'wallet_token_example'; // string | Filter transactions to include only provided wallet token.
$show_all_clients = false; // bool | Wether to show transactions from all clients

try {
    $result = $apiInstance->getUserHistory($user_token, $idempotency_key, $number_of_records, $start_date, $end_date, $page, $type, $wallet_token, $show_all_clients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| Token representing the user to get transactions history for | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |
| **number_of_records** | **float**| Number of records to return | [optional] [default to 10] |
| **start_date** | **\DateTime**| Starting date | [optional] |
| **end_date** | **\DateTime**| Ending date | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **type** | **string**| Filter particular types of transactions. Comma separated to include multiple types | [optional] |
| **wallet_token** | **string**| Filter transactions to include only provided wallet token. | [optional] |
| **show_all_clients** | **bool**| Wether to show transactions from all clients | [optional] [default to false] |

### Return type

[**\MassPayPhpSdk\Model\TxnHistoryResp[]**](../Model/TxnHistoryResp.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_token, $update_user, $idempotency_key): \MassPayPhpSdk\Model\StoredUser
```

Updated user

This **PUT** endpoint is used to update the profile information of a user with the provided user token. <br> You need to provide the `user_token` in the URL path to identify the user whose information you want to update. The updated information should be provided in the request Body as a JSON object. This endpoint can be used to update various profile information, such as the user's name, email address, phone number, and more. <br> The response will contain the updated user information in a JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | user token that need to be updated
$update_user = new \MassPayPhpSdk\Model\UpdateUser(); // \MassPayPhpSdk\Model\UpdateUser | Updated user object
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->updateUser($user_token, $update_user, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_token** | **string**| user token that need to be updated | |
| **update_user** | [**\MassPayPhpSdk\Model\UpdateUser**](../Model/UpdateUser.md)| Updated user object | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\StoredUser**](../Model/StoredUser.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userLookup()`

```php
userLookup($email, $first_name, $internal_user_id, $idempotency_key): \MassPayPhpSdk\Model\FoundUser
```

Lookup an existing user

This **GET** endpoint is used to lookup whether a user with the provided email and first name exists in the MassPay system. <br> To use this endpoint, you need to provide the `email`, `first_name`, and `internal_user_id` as Query parameters in the URL. <br> The endpoint will then search for the user based on the provided information and return a JSON response indicating whether the user exists or not. If the user exists, the response will also contain the user's details, `user_token`, `first_name`, `last_name` and `internal_user_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AUTHORIZER_NAME
$config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MassPayPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MassPayPhpSdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | User's email address. Required if First Name is provided
$first_name = 'first_name_example'; // string | User's first name. Required if email is provided
$internal_user_id = 'internal_user_id_example'; // string | A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ |. Required if email and first name are not provided
$idempotency_key = 'idempotency_key_example'; // string | Unique key to prevent duplicate processing

try {
    $result = $apiInstance->userLookup($email, $first_name, $internal_user_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| User&#39;s email address. Required if First Name is provided | |
| **first_name** | **string**| User&#39;s first name. Required if email is provided | |
| **internal_user_id** | **string**| A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ |. Required if email and first name are not provided | |
| **idempotency_key** | **string**| Unique key to prevent duplicate processing | [optional] |

### Return type

[**\MassPayPhpSdk\Model\FoundUser**](../Model/FoundUser.md)

### Authorization

[AUTHORIZER_NAME](../../README.md#AUTHORIZER_NAME)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
