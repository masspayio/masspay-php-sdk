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
        $url = "/payout/wallet/{$userToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get all AutoPayout rules
       * This **GET** endpoint is used to retrieve all autopayout rules currently applied to the provided wallet token. <br> You can use this endpoint to obtain information about the autopayout rules associated with the wallet. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path. <br> The response will include a JSON array containing details for each autopayout rule, including the token, `destination_token` and percentage.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @returns AutopayoutRespSuccesful operation.
    */
    public function getAutopayoutRules(string $userToken, string $walletToken)
    {
        $url = "/payout/wallet/{$userToken}/{$walletToken}/autopayout";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Add AutoPayout rule
       * This **POST** endpoint is used to add an autopayout rule that will initiate a payout whenever the provided wallet token is loaded. <br> You can use this endpoint to create an autopayout rule that automatically sends a percentage of incoming load to a specific destination. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path, and the `destination_token` and percentage of incoming load that should be autopaid to the `destination_token` in the request Body. <br> The response will include a JSON object containing the details of the created autopayout rule, including the token, `destination_token` and percentage.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @param AutopayRule $requestBody Autopayout rule configuration.
     * @returns arraySuccesfully created.
    */
    public function createAutopayoutRule(string $userToken, string $walletToken, ?AutopayRule $requestBody = null)
    {
        $url = "/payout/wallet/{$userToken}/{$walletToken}/autopayout";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Delete AutoPayout rule
       * This **DELETE** endpoint is used to delete an existing autopayout rule. <br> You can use this endpoint to remove an autopayout rule that is no longer needed. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path, and the token of the autopayout rule you wish to delete in the request Body. <br> The response will include a message indicating the success of the deletion.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @param string $token Autopayout token to delete
     * @returns void
    */
    public function deleteAutopayoutRule(string $userToken, string $walletToken, string $token)
    {
        $url = "/payout/wallet/{$userToken}/{$walletToken}/autopayout";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['token'] = $token;

        $this->delete($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
