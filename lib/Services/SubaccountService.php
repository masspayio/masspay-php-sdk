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
use MasspaySdk\Models\CreateSubaccountTxn;
use MasspaySdk\Models\AddUBORequest;
use MasspaySdk\Models\IDUpload;

/**
 * Service class
*/
class SubaccountService extends AbstractService
{
    /**
       * Create a subaccount
       * This **POST** endpoint is used to initiate create a subaccount under your organization. <br> You can use this endpoint to establish subaccounts which you can use to transact through the MassPay platform. <br> To use this endpoint, you need to provide the required parameters in the request Body, including `company_name`, `company_dba`, `incorporation_date`,  and other corporate related details. <br> The endpoint will then return a successful subaccount token for the newly created entity. The response will contain a JSON object indicating the status of the request and any relevant subaccount details.
     * @param CreateSubaccountTxn $requestBody
     * @returns arrayOK
    */
    public function createSubaccount(?CreateSubaccountTxn $requestBody = null)
    {
        $url = "/subaccount";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Add UBOs to subaccount
       * This **POST** endpoint is used to add UBOs to a subaccount under your organization. <br> To use this endpoint, you need to provide the required parameters in the request Body, including `first_name`, `last_name`, `tax_id`,  and other UBO details. <br> The endpoint will then return a successful subaccount UBO token for the newly added UBO. The response will contain a JSON object indicating the status of the request and any relevant subaccount UBO details.
     * @param string $subaccountToken
     * @param AddUBORequest $requestBody
     * @returns arrayOK
    */
    public function getSubaccountSubaccountTokenUbo(string $subaccountToken, ?AddUBORequest $requestBody = null)
    {
        $url = "/subaccount/{$subaccountToken}/ubo";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Upload UBO ID photos
       * This **POST** endpoint is used to upload UBOs IDs. <br> Upload IDs for the provided UBO.
     * @param string $subaccountToken
     * @param string $uboToken
     * @param IDUpload $requestBody
     * @returns arrayOK
    */
    public function uploadSubaccountUboId(string $subaccountToken, string $uboToken, ?IDUpload $requestBody = null)
    {
        $url = "/subaccount/{$subaccountToken}/ubo/{$uboToken}/id";
        $parameters = new RequestParameters();
        if (!is_null($requestBody) && !empty($requestBody)) {
            $parameters->setBody($requestBody->toArray());
        }

        return $this->post($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
