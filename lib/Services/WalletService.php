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
use MasspaySdk\Models\AutopayRule;

/**
 * Service class
*/
class WalletService extends AbstractService
{
    /**
       * Retrieve all available wallets for a user
       * This **GET** endpoint is used to retrieve all available wallets for a provided user token. <br> You can use this endpoint to obtain information about the wallets associated with the provided user token. <br> To use this endpoint, you need to provide the `user_token` as a required parameter in the URL Path. <br> The response will include a JSON array containing details for each wallet including `user_token`, `balance`, `currency_code`.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns WalletTxnRespSuccessful operation.
    */
    public function getWallet(string $userToken, ?string $idempotencyKey = null)
    {
        $url = "/wallet/{$userToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get all AutoPay rules
       * This **GET** endpoint is used to retrieve all autopay rules currently applied to the provided wallet token. <br> You can use this endpoint to obtain information about the autopay rules associated with the wallet. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path. <br> The response will include a JSON array containing details for each autopay rule, including the token, `destination_token` and percentage.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @returns AutopayRespSuccesful operation.
    */
    public function getAutopayRules(string $userToken, string $walletToken)
    {
        $url = "/wallet/{$userToken}/{$walletToken}/autopay";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Add AutoPay rule
       * This **POST** endpoint is used to add an autopay rule that will initiate a payout whenever the provided wallet token is loaded. <br> You can use this endpoint to create an autopay rule that automatically sends a percentage of incoming load to a specific destination. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path, and the `destination_token` and percentage of incoming load that should be autopaid to the `destination_token` in the request Body. <br> The response will include a JSON object containing the details of the created autopay rule, including the token, `destination_token` and percentage. <br> Note: AutoPay can only be created on wallets that have the same currency as the `destination_token`. It cannot initiate transactions with  an exchange rate.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @param AutopayRule $requestBody Autopay rule configuration.
     * @returns arraySuccesfully created.
    */
    public function createAutopayRule(string $userToken, string $walletToken, ?AutopayRule $requestBody = null)
    {
        $url = "/wallet/{$userToken}/{$walletToken}/autopay";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Delete AutoPay rule
       * This **DELETE** endpoint is used to delete an existing autopay rule. <br> You can use this endpoint to remove an autopay rule that is no longer needed. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path, and the token of the autopay rule you wish to delete in the request Body. <br> The response will include a message indicating the success of the deletion.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @param string $token Autopay token to delete
     * @returns void
    */
    public function deleteAutopayRule(string $userToken, string $walletToken, string $token)
    {
        $url = "/wallet/{$userToken}/{$walletToken}/autopay";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['token'] = $token;

        $this->delete($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
