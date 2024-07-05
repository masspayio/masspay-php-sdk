<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
declare(strict_types=1);

namespace MasspaySdk\Services;

use MasspaySdk\Utils\RequestParameters;
use MasspaySdk\Services\AbstractService;
use MasspaySdk\Models\LoadTxn;

/**
 * Service class
*/
class LoadService extends AbstractService
{
    /**
       * Resend balance notification
       * This **PUT** endpoint is used to resend a balance notification to a user with the specified `user_token`. The balance notification informs the user about the current balance in their account. <br> To use this endpoint, you need to provide the required parameter `user_token` in the URL Path. Additionally, you have the option to include an optional parameter `wallet_token` in the query parameters. The `wallet_token` can be used to specify a particular wallet associated with the user, if applicable. <br> Upon a successful request, the API will return a boolean response indicating the success of the balance notification resend operation.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Optional wallet token. If none is provided, select the first wallet available
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arrayOK
    */
    public function resendBalanceNotification(string $userToken, ?string $walletToken = null, ?string $idempotencyKey = null)
    {
        $url = "/payout/wallet/{$userToken}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($walletToken)) {
            $parameters->query['wallet_token'] = $walletToken;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->put($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Initiate a load transaction
       * This **POST** endpoint is used to initiate a load transaction, allowing you to add funds to a user token's wallet. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. You also need to provide the `client_load_id`, `source_token`, and amount as JSON parameters in the Request Body. The `client_load_id` is a unique identifier for the transaction that you can use to track it, while the `source_token` is the token or account from which the funds will be loaded. The amount parameter specifies the amount of funds to be loaded into the user's wallet. <br> The response will contain a JSON object indicating the status of the load transaction and any relevant details.
     * @param string $userToken Token representing the user to load
     * @param LoadTxn $requestBody Load information
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraySuccessfully created.
    */
    public function loadUser(string $userToken, LoadTxn $requestBody, ?string $idempotencyKey = null)
    {
        $url = "/payout/load/{$userToken}";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get history of loads by user token
       * This **GET** endpoint is used to retrieve a transaction history of all loads that were made to the provided user token, including scheduled loads. <br> You can use this endpoint to obtain a comprehensive history of loads for the user token, allowing you to track and analyze their incoming payments over time. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The endpoint will then return a JSON array of load transactions, each including transactions details.
     * @param string $userToken The user token that needs to be fetched.
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns LoadsSuccessful operation.
    */
    public function getUserLoadsByToken(string $userToken, ?string $idempotencyKey = null)
    {
        $url = "/payout/load/{$userToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Resend load notification
       * This **PUT** endpoint is used to resend a load notification to the user associated with the provided `user_token` for a specific load transaction. <br> You can use this endpoint to help ensure that users are notified promptly and accurately of any incoming funds or other important payment events. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path, and the `load_token` as a parameter in the Query string. The endpoint will then resend a notification to the user for the specified load transaction. <br> The response will contain a JSON object indicating the status of the request.
     * @param string $userToken Token representing the user to load/fetch loads for
     * @param string $loadToken Load token
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraySuccesful operation.
    */
    public function resendLoadNotification(string $userToken, string $loadToken, ?string $idempotencyKey = null)
    {
        $url = "/payout/load/{$userToken}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['load_token'] = $loadToken;
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->put($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Reverse a user load
       * This **DELETE** endpoint is used to reverse a load transaction that was already processed, allowing you to remove funds from a user's wallet. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path, and the load_token as a parameter in the Query string. <br> The endpoint will then attempt to reverse the specified load transaction. If the load is still in scheduled status, it will be marked as cancelled.
     * @param string $userToken Token representing the user to load/fetch loads for
     * @param string $loadToken Load token
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns mixedSuccesfully deleted.
    */
    public function cancelUserLoad(string $userToken, string $loadToken, ?string $idempotencyKey = null)
    {
        $url = "/payout/load/{$userToken}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['load_token'] = $loadToken;
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->delete($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
