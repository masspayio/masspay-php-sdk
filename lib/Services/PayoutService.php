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
use MasspaySdk\Models\PayoutTxn;

/**
 * Service class
*/
class PayoutService extends AbstractService
{
    /**
       * Initiate a payout transaction
       * This **POST** endpoint is used to initiate a payout transaction from your account to a user with a specified token. <br> You can use this endpoint to pay out funds to your users, such as payments for services rendered or rewards for completing tasks. To use this endpoint, you need to provide the user token of the recipient in the URL Path. <br> The request body should include the funding source (`source_token`), payout destination (`destination_token`) and specify in which currency the payout should be made (`destination_currency_code`). <br> As a response API will return all details about your payout transaction.
     * @param string $userToken Token representing the user to pay out
     * @param PayoutTxn $requestBody Payout parameters for a quote
     * @param int $limit Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns (payoutTxnResp | payoutTxnCommitResp)Successfully created.
    */
    public function initiatePayout(string $userToken, PayoutTxn $requestBody, ?int $limit = null, ?string $idempotencyKey = null)
    {
        $url = "/payout/{$userToken}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($limit)) {
            $parameters->query['limit'] = $limit;
        }
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get history of payouts by user token
       * This **GET** endpoint is used to retrieve the payout history for a user with the specified token. <br> You can use this endpoint to view all payouts made to a user, including the `payout_token`, `destinantion_token` and `destination_amount`. <br> To use this endpoint, you need to provide the user token of the recipient in the URL Path. <br> The response will include a JSON object containing an array of payout transactions for the specified user, with each transaction including details such as the transaction ID, payout amount, currency, payout status, and date and time of the payout.
     * @param string $userToken The user token that needs to be fetched.
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param bool $includePayerLogos Whether to include the payers logo in base64 format. 
     * @returns PayoutTxnRespsuccessful operation
    */
    public function getUserPayoutsByToken(string $userToken, ?string $idempotencyKey = null, ?bool $includePayerLogos = null)
    {
        $url = "/payout/{$userToken}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($includePayerLogos)) {
            $parameters->query['include_payer_logos'] = $includePayerLogos;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Commit payout transaction
       * This **PUT** endpoint is used to commit a previously created payout transaction. <br> Once a payout transaction is created, you can use this endpoint to commit the transaction and initiate the actual payout. <br> To use this endpoint, you need to provide the `user_token` and `payout_token` of the payout transaction you want to commit in the URL Path. <br> The response will include a JSON object containing details about the committed payout transaction, including the `payout_token`, `payout_status`, `pickup_code` and possible errors.
     * @param string $userToken Token representing the user to pay out
     * @param string $payoutToken Token representing the trsanaction. Retrieved from `/payout/{user_token}`
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraysuccessful operation
    */
    public function commitPayoutTxn(string $userToken, string $payoutToken, ?string $idempotencyKey = null)
    {
        $url = "/payout/{$userToken}/{$payoutToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->put($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get status of a payout by payout token
       * This **GET** endpoint is used to retrieve the status of a payout transaction for a user with the specified token and payout token. <br> You can use this endpoint to check the status of a specific payout transaction, including whether the payout has been successfully processed or if there was an error. <br> To use this endpoint, you need to provide the `user_token` and `payout_token` in the URL Path. <br> The response will include a JSON object containing details about the payout transaction.
     * @param string $userToken Token representing the user to pay out
     * @param string $payoutToken Token representing the trsanaction. Retrieved from `/payout/{user_token}`
     * @param bool $includePayerLogo Whether to include the payer logo in base64 format. 
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param bool $forceStatusUpdate Attempts to get an updated status update from the payout destination
     * @returns arrayOK
    */
    public function getPayoutStatus(string $userToken, string $payoutToken, ?bool $includePayerLogo = null, ?string $idempotencyKey = null, ?bool $forceStatusUpdate = null)
    {
        $url = "/payout/{$userToken}/{$payoutToken}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($forceStatusUpdate)) {
            $parameters->query['force_status_update'] = $forceStatusUpdate;
        }
        if (isset($includePayerLogo)) {
            $parameters->query['include_payer_logo'] = $includePayerLogo;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get transaction confirmation details
       * This **PATCH** endpoint is used to obtain a PDF document with all the details of a payout transaction for a user with the specified token and payout token. <br> You can use this endpoint to obtain confirmation details about a specific payout transaction. <br> To use this endpoint, you need to provide the `user_token` and `payout_token` in the URL Path. <br> The response will include a PDF document containing all the details of the payout transaction.
     * @param string $userToken Token representing the user to pay out
     * @param string $payoutToken Token representing the trsanaction. Retrieved from `/payout/{user_token}`
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arrayOK
    */
    public function getTransactionConfirmationDetails(string $userToken, string $payoutToken, ?string $idempotencyKey = null)
    {
        $url = "/payout/{$userToken}/{$payoutToken}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->patch($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
