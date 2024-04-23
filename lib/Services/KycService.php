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
use MasspaySdk\Models\AttrVelocityRequest;
use MasspaySdk\Models\IDUpload;

/**
 * Service class
*/
class KycService extends AbstractService
{
    /**
       * Attributes velocity check
       * This **POST** endpoint is used to perform an attributes velocity check to identify users with matching attribute values. <br> You can use this endpoint to help prevent fraudulent activities by monitoring for unusual attribute value changes over time. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL path and the required parameters in the request Body. <br> The endpoint will then compare the provided attribute value with the historical attribute values for the same user and determine if it meets the velocity check criteria.
     * @param string $userToken Token representing the user to retrieve attributes for
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param AttrVelocityRequest $requestBody
     * @returns array[]Succesfully created.
    */
    public function findAttributesVelocity(string $userToken, ?string $idempotencyKey = null, ?AttrVelocityRequest $requestBody = null)
    {
        $url = "/attribute/{$userToken}/velocity";
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
       * Get an Au10tix session link
       * This **GET** endpoint is used to obtain a link to an Au10tix session for the user with the provided user token. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The endpoint will then generate a session link that you can use to initiate an identity verification process for the user through the Au10tix platform. <br> The response will contain the session link as a URL in a JSON format.
     * @param string $userToken
     * @returns arraySuccesful operation.
    */
    public function getUserUserTokenKycAu10Tix(string $userToken)
    {
        $url = "/user/{$userToken}/kyc/au10tix";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Upload ID photos
       * Upload IDs for the provided user. This is an optional endpoint if the images are captured through means other than the link that is generated in the attributes.
     * @param string $userToken
     * @param IDUpload $requestBody
     * @returns arrayOK
    */
    public function uploadIdPhotos(string $userToken, ?IDUpload $requestBody = null)
    {
        $url = "/user/{$userToken}/kyc/id";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get all KYC sessions
       * This **GET** endpoint is used to obtain all previous KYC sessions for the user with the provided user token. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path.
     * @param string $userToken
     * @returns KYCSessionSuccesful operation.
    */
    public function getUserUserTokenKycAttempts(string $userToken)
    {
        $url = "/user/{$userToken}/kyc/id";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get a Veriff session link
       * This **GET** endpoint is used to obtain a link to a Veriff session for the user with the provided user token. <br> The endpoint will then generate a session link that you can use to initiate an identity verification process for the user through the Veriff platform. <br> To use this endpoint, you need to provide the `user_token` as a parameter in the URL Path. <br> The response will contain the session link as a URL in a JSON format.
     * @param string $userToken
     * @returns arraySuccesful operation.
    */
    public function getUserUserTokenKycVeriff(string $userToken)
    {
        $url = "/user/{$userToken}/kyc/veriff";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
