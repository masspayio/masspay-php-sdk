# masspay-php-sdk

MassPay API

For more information, please visit [https://www.masspay.io](https://www.masspay.io).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/masspayio/masspay-php-sdk.git"
    }
  ],
  "require": {
    "masspayio/masspay-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/masspay-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = MassPayPhpSdk\Configuration::getDefaultConfiguration();

// Configuration to run on a staging environment (optional)
$host = $config->getHostFromSettings(0, ["environment" => "staging-api"]);
$config->setHost($host);

// Configure Bearer authorization: AUTHORIZER_NAME
$config->setAccessToken('YOUR_ACCESS_TOKEN');

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

## API Endpoints

All URIs are relative to *https://api.masspay.io/v0.1.4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccountBalance**](docs/Api/AccountApi.md#getaccountbalance) | **GET** /account/balance | Get current available balance
*AccountApi* | [**getAccountStatement**](docs/Api/AccountApi.md#getaccountstatement) | **GET** /account/statement | Get certified account statement
*AttributeApi* | [**findAttributesVelocity**](docs/Api/AttributeApi.md#findattributesvelocity) | **POST** /attribute/{user_token}/velocity | Attributes velocity check
*AttributeApi* | [**getAttrs**](docs/Api/AttributeApi.md#getattrs) | **GET** /attribute/{user_token}/{destination_token}/{currency} | Get user attributes for destination_token
*AttributeApi* | [**storeAttrs**](docs/Api/AttributeApi.md#storeattrs) | **POST** /attribute/{user_token}/{destination_token}/{currency} | Store user attributes
*CardApi* | [**getWalletCardInfo**](docs/Api/CardApi.md#getwalletcardinfo) | **GET** /wallet/{user_token}/{wallet_token}/card | Get MassPay Card Information
*CardApi* | [**updateWalletCardInfo**](docs/Api/CardApi.md#updatewalletcardinfo) | **PUT** /wallet/{user_token}/{wallet_token}/card | Update MassPay Card Information
*CatalogApi* | [**getCheapestCountryServices**](docs/Api/CatalogApi.md#getcheapestcountryservices) | **GET** /country/{country_code}/cheapest | Gets a list of Companies and their cheapest service offerings for the given country code.
*CatalogApi* | [**getCountryList**](docs/Api/CatalogApi.md#getcountrylist) | **GET** /country/list | Gets a list of countries where services offered.
*CatalogApi* | [**getCountryServices**](docs/Api/CatalogApi.md#getcountryservices) | **GET** /country/{country_code} | Gets a list of Companies and their service offerings for the given country code.
*CatalogApi* | [**getDestinationTokenAlternatives**](docs/Api/CatalogApi.md#getdestinationtokenalternatives) | **GET** /service/{destination_token}/alternatives | Returns list of alternative service to a provided service
*CatalogApi* | [**getUserAgreement**](docs/Api/CatalogApi.md#getuseragreement) | **GET** /user-agreements | Get User Agreement
*CatalogApi* | [**getUserAgreementsNames**](docs/Api/CatalogApi.md#getuseragreementsnames) | **OPTIONS** /user-agreements | Get Available User Agreements
*InternalApi* | [**commitPayoutTxnInternal**](docs/Api/InternalApi.md#commitpayouttxninternal) | **PUT** /payout/{user_token}/{payout_token}/internal | Commit payout transaction
*InternalApi* | [**decryptStatementJWT**](docs/Api/InternalApi.md#decryptstatementjwt) | **GET** /decrypt-statement-JWT | Decrypt Statement JWT
*InternalApi* | [**distributorsBalances**](docs/Api/InternalApi.md#distributorsbalances) | **GET** /distributors/balances | Retrieve available balances at distributors
*InternalApi* | [**generateInvoice**](docs/Api/InternalApi.md#generateinvoice) | **OPTIONS** /payout/{user_token}/{payout_token} | Generate Invoice
*InternalApi* | [**generatePricingList**](docs/Api/InternalApi.md#generatepricinglist) | **POST** /generate_pricing_list | Generate pricing list
*InternalApi* | [**getCallbackCompanyId**](docs/Api/InternalApi.md#getcallbackcompanyid) | **GET** /callback/{company_id} | Transaction Status Callback
*InternalApi* | [**getDevelopmentTest**](docs/Api/InternalApi.md#getdevelopmenttest) | **GET** /development/test | Development
*InternalApi* | [**initiatePayoutInternal**](docs/Api/InternalApi.md#initiatepayoutinternal) | **POST** /payout/{user_token}/internal | Initiate a payout transaction
*InternalApi* | [**postAccountApiKey**](docs/Api/InternalApi.md#postaccountapikey) | **POST** /account/api-key | Generate API Key
*InternalApi* | [**postCallbackCompanyId**](docs/Api/InternalApi.md#postcallbackcompanyid) | **POST** /callback/{company_id} | Transaction Status Callback
*InternalApi* | [**updateUserInternal**](docs/Api/InternalApi.md#updateuserinternal) | **PUT** /user/{user_token}/internal | Internal user update
*InternalApi* | [**uploadBatch**](docs/Api/InternalApi.md#uploadbatch) | **POST** /batch | Upload a batch
*KYCApi* | [**findAttributesVelocity**](docs/Api/KYCApi.md#findattributesvelocity) | **POST** /attribute/{user_token}/velocity | Attributes velocity check
*KYCApi* | [**getUserUserTokenKycAu10tix**](docs/Api/KYCApi.md#getuserusertokenkycau10tix) | **GET** /user/{user_token}/kyc/au10tix | Get an Au10tix session link
*KYCApi* | [**getUserUserTokenKycVeriiff**](docs/Api/KYCApi.md#getuserusertokenkycveriiff) | **GET** /user/{user_token}/kyc/veriff | Get a Veriff session link
*LoadApi* | [**cancelUserLoad**](docs/Api/LoadApi.md#canceluserload) | **DELETE** /load/{user_token} | Reverse a user load
*LoadApi* | [**createAutopayRule**](docs/Api/LoadApi.md#createautopayrule) | **POST** /wallet/{user_token}/{wallet_token}/autopay | Add autopay rule
*LoadApi* | [**deleteAutopayRule**](docs/Api/LoadApi.md#deleteautopayrule) | **DELETE** /wallet/{user_token}/{wallet_token}/autopay | Delete autopay rule
*LoadApi* | [**getAutopayRules**](docs/Api/LoadApi.md#getautopayrules) | **GET** /wallet/{user_token}/{wallet_token}/autopay | Get all autopay rules
*LoadApi* | [**getUserLoadsByToken**](docs/Api/LoadApi.md#getuserloadsbytoken) | **GET** /load/{user_token} | Get history of loads by user token
*LoadApi* | [**loadUser**](docs/Api/LoadApi.md#loaduser) | **POST** /load/{user_token} | Initiate a load transaction
*LoadApi* | [**resendLoadNotification**](docs/Api/LoadApi.md#resendloadnotification) | **PUT** /load/{user_token} | Resend Load Notification
*PayoutApi* | [**commitPayoutTxn**](docs/Api/PayoutApi.md#commitpayouttxn) | **PUT** /payout/{user_token}/{payout_token} | Commit payout transaction
*PayoutApi* | [**getPayoutStatus**](docs/Api/PayoutApi.md#getpayoutstatus) | **GET** /payout/{user_token}/{payout_token} | Get status of a payout by payout token
*PayoutApi* | [**getTransactionConfirmationDetails**](docs/Api/PayoutApi.md#gettransactionconfirmationdetails) | **PATCH** /payout/{user_token}/{payout_token} | Get transaction confirmation details
*PayoutApi* | [**getUserPayoutsByToken**](docs/Api/PayoutApi.md#getuserpayoutsbytoken) | **GET** /payout/{user_token} | Get history of payouts by user token
*PayoutApi* | [**initiatePayout**](docs/Api/PayoutApi.md#initiatepayout) | **POST** /payout/{user_token} | Initiate a payout transaction
*SpendBackApi* | [**getUserSpendbacksByToken**](docs/Api/SpendBackApi.md#getuserspendbacksbytoken) | **GET** /spendback/{user_token} | Get history of spend backs by user token
*SpendBackApi* | [**initiateSpendback**](docs/Api/SpendBackApi.md#initiatespendback) | **POST** /spendback/{user_token} | Initiate a spend back transaction
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /user | Create a user
*UserApi* | [**getUserByToken**](docs/Api/UserApi.md#getuserbytoken) | **GET** /user/{user_token} | Get user by user token
*UserApi* | [**getUserHistory**](docs/Api/UserApi.md#getuserhistory) | **GET** /user/{user_token}/history | Transactions history
*UserApi* | [**getUserUserTokenKycAu10tix**](docs/Api/UserApi.md#getuserusertokenkycau10tix) | **GET** /user/{user_token}/kyc/au10tix | Get an Au10tix session link
*UserApi* | [**getUserUserTokenKycVeriiff**](docs/Api/UserApi.md#getuserusertokenkycveriiff) | **GET** /user/{user_token}/kyc/veriff | Get a Veriff session link
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PUT** /user/{user_token} | Updated user
*UserApi* | [**userLookup**](docs/Api/UserApi.md#userlookup) | **GET** /user/lookup | Lookup an existing user
*WalletApi* | [**createAutopayRule**](docs/Api/WalletApi.md#createautopayrule) | **POST** /wallet/{user_token}/{wallet_token}/autopay | Add autopay rule
*WalletApi* | [**deleteAutopayRule**](docs/Api/WalletApi.md#deleteautopayrule) | **DELETE** /wallet/{user_token}/{wallet_token}/autopay | Delete autopay rule
*WalletApi* | [**getAutopayRules**](docs/Api/WalletApi.md#getautopayrules) | **GET** /wallet/{user_token}/{wallet_token}/autopay | Get all autopay rules
*WalletApi* | [**getWallet**](docs/Api/WalletApi.md#getwallet) | **GET** /wallet/{user_token} | Retrieve all available wallets for a user
*WalletApi* | [**getWalletCardInfo**](docs/Api/WalletApi.md#getwalletcardinfo) | **GET** /wallet/{user_token}/{wallet_token}/card | Get MassPay Card Information
*WalletApi* | [**updateWalletCardInfo**](docs/Api/WalletApi.md#updatewalletcardinfo) | **PUT** /wallet/{user_token}/{wallet_token}/card | Update MassPay Card Information

## Models

- [ApiResponse](docs/Model/ApiResponse.md)
- [AttrTxn](docs/Model/AttrTxn.md)
- [AttrValue](docs/Model/AttrValue.md)
- [AttrVelocityRequestInner](docs/Model/AttrVelocityRequestInner.md)
- [AttrsRequirement](docs/Model/AttrsRequirement.md)
- [AutopayResp](docs/Model/AutopayResp.md)
- [AutopayRule](docs/Model/AutopayRule.md)
- [AvailableBalanceTxnResp](docs/Model/AvailableBalanceTxnResp.md)
- [CompaniesResp](docs/Model/CompaniesResp.md)
- [Company](docs/Model/Company.md)
- [Country](docs/Model/Country.md)
- [DistributorsBalances200ResponseInner](docs/Model/DistributorsBalances200ResponseInner.md)
- [DistributorsBalances200ResponseInnerBalancesInner](docs/Model/DistributorsBalances200ResponseInnerBalancesInner.md)
- [Exception](docs/Model/Exception.md)
- [FoundUser](docs/Model/FoundUser.md)
- [GenerateInvoice200Response](docs/Model/GenerateInvoice200Response.md)
- [GeneratePricingListRequest](docs/Model/GeneratePricingListRequest.md)
- [GetAccountStatement200Response](docs/Model/GetAccountStatement200Response.md)
- [GetTransactionConfirmationDetails200Response](docs/Model/GetTransactionConfirmationDetails200Response.md)
- [GetUserAgreement200Response](docs/Model/GetUserAgreement200Response.md)
- [GetUserAgreementsNames200ResponseInner](docs/Model/GetUserAgreementsNames200ResponseInner.md)
- [GetUserUserTokenKycAu10tix200Response](docs/Model/GetUserUserTokenKycAu10tix200Response.md)
- [GetUserUserTokenKycVeriiff200Response](docs/Model/GetUserUserTokenKycVeriiff200Response.md)
- [GetWalletCardInfo200Response](docs/Model/GetWalletCardInfo200Response.md)
- [LoadTxn](docs/Model/LoadTxn.md)
- [LoadTxnResp](docs/Model/LoadTxnResp.md)
- [Loads](docs/Model/Loads.md)
- [PayoutTxn](docs/Model/PayoutTxn.md)
- [PayoutTxnCommitResp](docs/Model/PayoutTxnCommitResp.md)
- [PayoutTxnResp](docs/Model/PayoutTxnResp.md)
- [PostAccountApiKey200Response](docs/Model/PostAccountApiKey200Response.md)
- [PostAccountApiKeyRequest](docs/Model/PostAccountApiKeyRequest.md)
- [ResendLoadNotification200Response](docs/Model/ResendLoadNotification200Response.md)
- [Service](docs/Model/Service.md)
- [ServicePayersInner](docs/Model/ServicePayersInner.md)
- [ServicePayersInnerExchangeRateInner](docs/Model/ServicePayersInnerExchangeRateInner.md)
- [SpendBackTxn](docs/Model/SpendBackTxn.md)
- [SpendBackTxnResp](docs/Model/SpendBackTxnResp.md)
- [SpendBacks](docs/Model/SpendBacks.md)
- [StoredUser](docs/Model/StoredUser.md)
- [TxnHistoryResp](docs/Model/TxnHistoryResp.md)
- [UpdateUser](docs/Model/UpdateUser.md)
- [UploadBatchRequest](docs/Model/UploadBatchRequest.md)
- [User](docs/Model/User.md)
- [WalletTxnResp](docs/Model/WalletTxnResp.md)

## Authorization

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@masspay.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
