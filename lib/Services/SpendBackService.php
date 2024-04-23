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
use MasspaySdk\Models\SpendBackTxn;

/**
 * Service class
*/
class SpendBackService extends AbstractService
{
    /**
       * Get history of spend backs by user token
       * This **GET** endpoint is used to retrieve the history of spendbacks for a specific user token. <br> You can use this endpoint to help manage your payment operations and track the usage of funds by your users. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The endpoint will then return a list of all the historical spendbacks for the provided user token. The response will contain a JSON array with details for each spendback transaction.
     * @param string $userToken Token representing the user to fetch/initiate spend back
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns SpendBacksSuccesful operation.
    */
    public function getUserSpendbacksByToken(string $userToken, ?string $idempotencyKey = null)
    {
        $url = "/spendback/{$userToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Initiate a spend back transaction
       * This **POST** endpoint is used to initiate a spendback transaction to a provided user token. <br> You can use this endpoint to enable spendback transactions for your users and help them manage their funds more effectively. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path, along with the required parameters in the request Body, including `client_spendback_id`, `source_token`, `source_currency_code` and `amount`. <br> The endpoint will then initiate the spendback transaction, transferring funds from the source token to the user token. The response will contain a JSON object indicating the status of the request and any relevant transaction details.
     * @param string $userToken Token representing the user to fetch/initiate spend back
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param SpendBackTxn $requestBody Spend back information
     * @returns arraySuccesfully created.
    */
    public function initiateSpendback(string $userToken, ?string $idempotencyKey = null, ?SpendBackTxn $requestBody = null)
    {
        $url = "/spendback/{$userToken}";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
