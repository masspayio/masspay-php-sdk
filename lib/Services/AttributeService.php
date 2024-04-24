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
use MasspaySdk\Models\AttrTxn;

/**
 * Service class
*/
class AttributeService extends AbstractService
{
    /**
       * Get all stored user attributes
       * This **GET** endpoint is used to retrieve all stored user attributes for all destination token. <br> You can use this endpoint to retrieve user attributes and provide personalized service to your users based on their preferences, demographic data, or other relevant information. <br> To use this endpoint, you need to provide the `user_token` as parameters in the URL Path. <br> The endpoint will then return all the stored attributes for the provided user in the context of the destination token. If multiple `attribute set tokens` are available, all the sets and their values will be returned.
     * @param string $userToken Token representing the user to retrieve attributes for
     * @returns AllAttributesRespsuccessful operation
    */
    public function getAllAttrs(string $userToken)
    {
        $url = "/attribute/{$userToken}";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Store user attributes
       * This **POST** endpoint is used to store user attributes, allowing you to associate additional data with a user token. <br> To use this endpoint, you need to provide the `user_token`, `destination_token`, and `currency` as parameters in the URL Path. You also need to provide the attribute values as JSON parameters in the Request body. <br> If existing attributes are already stored for the user, this call will override their values.
     * @param string $userToken Token representing the user to store attributes for
     * @param string $destinationToken Token that represents the payout destination i.e. Omnex->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback. 
     * @param string $currency The destination currency sending funds to. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format.
     * @param AttrTxn $requestBody Attr parameters to store
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraySuccesfully created.
    */
    public function storeAttrs(string $userToken, string $destinationToken, string $currency, AttrTxn $requestBody, ?string $idempotencyKey = null)
    {
        $url = "/attribute/{$userToken}/{$destinationToken}/{$currency}";
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
       * Get user attributes for destination_token
       * This **GET** endpoint is used to retrieve user attributes for a specific destination token. <br> You can use this endpoint to retrieve user attributes and provide personalized service to your users based on their preferences, demographic data, or other relevant information. <br> To use this endpoint, you need to provide the `user_token`, `destination_token`, and `currency` as parameters in the URL Path. <br> The endpoint will then return all the required attributes for the provided user for the specified destination token. If any of the attributes already have a stored value, it will be returned as well.
     * @param string $userToken Token representing the user to retrieve attributes for
     * @param string $destinationToken Token that represents the payout destination i.e. Omnex->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback.
     * @param string $currency The destination currency sending funds to. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format.
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns AttrsRequirementsuccessful operation
    */
    public function getAttrs(string $userToken, string $destinationToken, string $currency, ?string $idempotencyKey = null)
    {
        $url = "/attribute/{$userToken}/{$destinationToken}/{$currency}";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
