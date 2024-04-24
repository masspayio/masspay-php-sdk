<div align='center' class='text-center'>
  <img alt='' src='./assets/logo.png' width='200' />
  <h1 align='center' class='text-center'>MasspaySdk</h1>
</div>

<div align='center' class='text-center'>
  <a aria-label='Version' href='#'>
    <img alt='' src='https://img.shields.io/badge/version-2.0.0-blue' />
  </a>
  <a aria-label='License' href='https://opensource.org/licenses/MIT'>
    <img alt='' src='https://img.shields.io/badge/License-MIT-blue.svg' />
  </a>
</div>

<!---
Repository badges to consider: (https://github.com/aleen42/badges)
  a. [![Build Status](https://travis-ci.com/username/repository.svg?branch=master)](https://travis-ci.com/)
  b. [![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
  c. [![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)]()
  d. [![Downloads](https://img.shields.io/badge/downloads-1000%2Fmonth-brightgreen.svg)]()
  e. [![Contributors](https://img.shields.io/github/contributors/username/repository.svg)]()
--->

Welcome to our MasspaySdk. We are committed to providing you with the best SDK services experience possible. Please use our step-by-step instructions to become familiar with how to use our SDK.

- Current API version: 0.1.4
- Current package version: 2.0.0

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [Frequently Asked Questions (FAQ)](#frequently-asked-questions-faq)

## Requirements

<!--- Instructions on what the user must do before using the SDK. --->

- PHP version >= 8.0.
- MassPay.io API credentials.

## Installation

### Composer

To install via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/masspayio/masspay-php-sdk.git"
    }
  ],
  "require": {
    "masspayio/masspay-php-sdk": "^2.0.0"
  }
}
```

Then run `composer install`.

### Manual Installation

Download the latest release and include `autoload.php`:

```php
<?php

require_once('/path/to/masspay-php-sdk/vendor/autoload.php');
```

## Usage

<!--- Description how users can use the SDK.--->

In case that you successfully installed our MasspaySdk please execute this code:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

use MasspaySdk\Client;
use MasspaySdk\Config\ApiConfig;

$config = new ApiConfig();
$config->bearer_token = 'YOUR_BEARER_TOKEN';

$client = new Client($config);
try {
  $result = $client->account->getAccountBalance();
  var_dump($result);
} catch (Exception $e) {
  var_dump($e);
}
```

## Features

<!--- Highlighting the key features and capabilities of the SDK. --->

Kindly note that every URI is relative to _https://api.masspay.io/v0.1.4_.

The table displays all features categorized based on their specific purposes.

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
Account | **getAccountBalance** | **GET** /account/balance | Get current available balance
Account | **getAccountStatement** | **GET** /account/statement | Get certified account statement
Attribute | **getAllAttrs** | **GET** /attribute/{user_token} | Get all stored user attributes
Attribute | **storeAttrs** | **POST** /attribute/{user_token}/{destination_token}/{currency} | Store user attributes
Attribute | **getAttrs** | **GET** /attribute/{user_token}/{destination_token}/{currency} | Get user attributes for destination_token
Card | **getWalletCardInfo** | **GET** /wallet/{user_token}/{wallet_token}/card | Get MassPay card information
Card | **updateWalletCardInfo** | **PUT** /wallet/{user_token}/{wallet_token}/card | Update MassPay card information
Catalog | **getCountryList** | **GET** /country/list | Gets a list of countries where services offered.
Catalog | **getCountryServices** | **GET** /country/{country_code} | Gets a list of Companies and their service offerings for the given country code.
Catalog | **getCheapestCountryServices** | **GET** /country/{country_code}/cheapest | Gets a list of Companies and their cheapest service offerings for the given country code.
Catalog | **getDestinationTokenAlternatives** | **GET** /service/{destination_token}/alternatives | Returns list of alternative service to a provided service
Catalog | **getDestinationToken** | **GET** /service/{destination_token} | Returns provided service
Catalog | **getUserAgreement** | **GET** /user-agreements | Get user agreement
Catalog | **getUserAgreementsNames** | **OPTIONS** /user-agreements | Get available user agreements
Kyc | **findAttributesVelocity** | **POST** /attribute/{user_token}/velocity | Attributes velocity check
Kyc | **getUserUserTokenKycAu10Tix** | **GET** /user/{user_token}/kyc/au10tix | Get an Au10tix session link
Kyc | **uploadIdPhotos** | **POST** /user/{user_token}/kyc/id | Upload ID photos
Kyc | **getUserUserTokenKycAttempts** | **GET** /user/{user_token}/kyc/id | Get all KYC sessions
Kyc | **getUserUserTokenKycVeriff** | **GET** /user/{user_token}/kyc/veriff | Get a Veriff session link
Load | **resendBalanceNotification** | **PUT** /wallet/{user_token} | Resend balance notification
Load | **loadUser** | **POST** /load/{user_token} | Initiate a load transaction
Load | **getUserLoadsByToken** | **GET** /load/{user_token} | Get history of loads by user token
Load | **resendLoadNotification** | **PUT** /load/{user_token} | Resend load notification
Load | **cancelUserLoad** | **DELETE** /load/{user_token} | Reverse a user load
Payout | **initiatePayout** | **POST** /payout/{user_token} | Initiate a payout transaction
Payout | **getUserPayoutsByToken** | **GET** /payout/{user_token} | Get history of payouts by user token
Payout | **commitPayoutTxn** | **PUT** /payout/{user_token}/{payout_token} | Commit payout transaction
Payout | **getPayoutStatus** | **GET** /payout/{user_token}/{payout_token} | Get status of a payout by payout token
Payout | **getTransactionConfirmationDetails** | **PATCH** /payout/{user_token}/{payout_token} | Get transaction confirmation details
SpendBack | **getUserSpendbacksByToken** | **GET** /spendback/{user_token} | Get history of spend backs by user token
SpendBack | **initiateSpendback** | **POST** /spendback/{user_token} | Initiate a spend back transaction
Tax | **getTaxUsers** | **GET** /tax | Get list of users' annual balance
Tax | **getTaxInterviewLink** | **GET** /{user_token}/tax | Get link for tax interview
User | **createUser** | **POST** /user | Create a user
User | **getUserByToken** | **GET** /user/{user_token} | Get user by user token
User | **updateUser** | **PUT** /user/{user_token} | Updated user
User | **userLookup** | **GET** /user/lookup | Lookup an existing user
User | **getUserHistory** | **GET** /user/{user_token}/history | Transactions history
User | **getAllUsersHistory** | **GET** /user/history | All Users' Transactions history
Wallet | **getWallet** | **GET** /wallet/{user_token} | Retrieve all available wallets for a user
Wallet | **getAutopayRules** | **GET** /wallet/{user_token}/{wallet_token}/autopay | Get all AutoPay rules
Wallet | **createAutopayRule** | **POST** /wallet/{user_token}/{wallet_token}/autopay | Add AutoPay rule
Wallet | **deleteAutopayRule** | **DELETE** /wallet/{user_token}/{wallet_token}/autopay | Delete AutoPay rule


## Contributing

<!--- Explaining how users can contribute to the project. Include guidelines for bug reports, feature requests, and pull requests.--->

To learn more about the possibility of contributing to the subsequent development of this SDK, please visit our [contributing page](./CONTRIBUTING.md). Kindly note that contributions are limited by a unique set of rules in order to ensure clarity.

## License

<!--- Including the license information for your project and the specification of the license type (e.g., MIT, Apache 2.0). --->

Please refer to the [license page](./LICENSE) for more information about the license type and the corresponding terms of use.

## Contact

<!--- Providing contact information or links to relevant communication channels (e.g., email, Slack, Gitter).--->

We kindly request that you direct all questions to our support email:

- [info@masspay.io](mailto:info@masspay.io)

## Frequently Asked Questions (FAQ)

<!--- Including a section addressing frequently asked questions about the SDK.--->


<!---  Questions that can be prefilled
What are the main functions or features supported by the SDK?
Are there any examples or tutorials to help me understand how to use the SDK effectively?
How can I get help or assistance if I encounter issues while using the SDK?
How often is the SDK updated, and how can users stay informed about updates?
Are there any best practices recommended for maintaining security while using the SDK?
What are the licensing terms for using the SDK?
--->
