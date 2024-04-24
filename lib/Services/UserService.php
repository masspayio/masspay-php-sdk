<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 0.1.4
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
declare(strict_types=1);

namespace MasspaySdk\Services;

use MasspaySdk\Utils\RequestParameters;
use MasspaySdk\Services\AbstractService;
use MasspaySdk\Models\User;
use MasspaySdk\Models\UpdateUser;

/**
 * Service class
*/
class UserService extends AbstractService
{
    /**
       * Create a user
       * This **POST** endpoint is used to create a new user in MassPay. <br> You can use this endpoint to create a new user with the specified user details in JSON format in the request Body. <br> To use this endpoint, you need to provide the `internal_user_id`, `country`, `first_name`, `last_name`, and `email` as required parameters in the Request Body. <br> The response will include details about the newly created user.
     * @param User $requestBody Created user object
     * @returns arraySuccessfully created.
    */
    public function createUser(User $requestBody)
    {
        $url = "/user";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get user by user token
       * This **GET** endpoint is used to retrieve a user's profile by their user token in MassPay. <br> You can use this endpoint to obtain a user profile for a specified user token. <br> To use this endpoint, you need to provide the `user_token` as a required parameter in the URL Path. <br> The response will include all available details for the user.
     * @param string $userToken The user token that needs to be fetched.
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraysuccessful operation
    */
    public function getUserByToken(string $userToken, ?string $idempotencyKey = null)
    {
        $url = "/user/{$userToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Updated user
       * This **PUT** endpoint is used to update the profile information of a user with the provided user token. <br> You need to provide the `user_token` in the URL path to identify the user whose information you want to update. The updated information should be provided in the request Body as a JSON object. This endpoint can be used to update various profile information, such as the user's name, email address, phone number, and more. <br> The response will contain the updated user information in a JSON format.
     * @param string $userToken user token that need to be updated
     * @param UpdateUser $requestBody Updated user object
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraysuccessful operation
    */
    public function updateUser(string $userToken, UpdateUser $requestBody, ?string $idempotencyKey = null)
    {
        $url = "/user/{$userToken}";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->put($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Lookup an existing user
       * This **GET** endpoint is used to lookup whether a user with the provided email and first name exists in the MassPay system. <br> To use this endpoint, you need to provide the `email`, `first_name`, and `internal_user_id` as Query parameters in the URL. <br> The endpoint will then search for the user based on the provided information and return a JSON response indicating whether the user exists or not. If the user exists, the response will also contain the user's details, `user_token`, `first_name`, `last_name` and `internal_user_id`.
     * @param string $email User's email address. Required if First Name is provided
     * @param string $firstName User's first name. Required if email is provided
     * @param string $internalUserId A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ |. Required if email and first name are not provided
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arrayFound a matching user
    */
    public function userLookup(string $email, string $firstName, string $internalUserId, ?string $idempotencyKey = null)
    {
        $url = "/user/lookup";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['email'] = $email;
        $parameters->query['first_name'] = $firstName;
        $parameters->query['internal_user_id'] = $internalUserId;
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Transactions history
       * This **GET** endpoint is used to retrieve a list of all transactions, including payouts, loads, and spendbacks, for a provided user with the provided user token. <br> You can use this endpoint to obtain a comprehensive history of transactions for the provider user, allowing you to track and analyze their payment activities over time. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The response will contain a JSON array of transaction objects, each including transactions details.
     * @param string $userToken Token representing the user to get transactions history for. If none is provided, retrieve transactions for all users.
     * @param string $startDate Starting date
     * @param string $endDate Ending date
     * @param string $type Filter particular types of transactions. Comma separated to include multiple types
     * @param string $walletToken Filter transactions to include only provided wallet token.
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param int $numberOfRecords Number of records to return. Defaults to 10 if no value is provided
     * @param int $page Page number
     * @param bool $showAllClients Wether to show transactions from all clients
     * @returns TxnHistoryRespSuccesful operation.
    */
    public function getUserHistory(string $userToken, ?string $startDate = null, ?string $endDate = null, ?getUserHistoryType $type = null, ?string $walletToken = null, ?string $idempotencyKey = null, ?int $numberOfRecords = 10, ?int $page = 1, ?bool $showAllClients = null)
    {
        $url = "/user/{$userToken}/history";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($numberOfRecords)) {
            $parameters->query['number_of_records'] = $numberOfRecords;
        }
        if (isset($startDate)) {
            $parameters->query['start_date'] = $startDate;
        }
        if (isset($endDate)) {
            $parameters->query['end_date'] = $endDate;
        }
        if (isset($page)) {
            $parameters->query['page'] = $page;
        }
        if (isset($type)) {
            $parameters->query['type'] = $type;
        }
        if (isset($walletToken)) {
            $parameters->query['wallet_token'] = $walletToken;
        }
        if (isset($showAllClients)) {
            $parameters->query['show_all_clients'] = $showAllClients;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * All Users' Transactions history
       * This **GET** endpoint is used to retrieve a list of all transactions, including payouts, loads, and spendbacks, for all users. <br> You can use this endpoint to obtain a comprehensive history of transactions for all users, allowing you to track and analyze their payment activities over time. <br> The response will contain a JSON array of transaction objects, each including transactions details.
     * @param string $startDate Starting date
     * @param string $endDate Ending date
     * @param string $type Filter particular types of transactions. Comma separated to include multiple types
     * @param string $walletToken Filter transactions to include only provided wallet token.
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param int $numberOfRecords Number of records to return. Defaults to 10 if no value is provided
     * @param int $page Page number
     * @param bool $showAllClients Wether to show transactions from all clients
     * @returns TxnHistoryRespSuccesful operation.
    */
    public function getAllUsersHistory(?string $startDate = null, ?string $endDate = null, ?getAllUsersHistoryType $type = null, ?string $walletToken = null, ?string $idempotencyKey = null, ?int $numberOfRecords = 10, ?int $page = 1, ?bool $showAllClients = null)
    {
        $url = "/user/history";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($numberOfRecords)) {
            $parameters->query['number_of_records'] = $numberOfRecords;
        }
        if (isset($startDate)) {
            $parameters->query['start_date'] = $startDate;
        }
        if (isset($endDate)) {
            $parameters->query['end_date'] = $endDate;
        }
        if (isset($page)) {
            $parameters->query['page'] = $page;
        }
        if (isset($type)) {
            $parameters->query['type'] = $type;
        }
        if (isset($walletToken)) {
            $parameters->query['wallet_token'] = $walletToken;
        }
        if (isset($showAllClients)) {
            $parameters->query['show_all_clients'] = $showAllClients;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
