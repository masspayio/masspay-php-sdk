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

/**
 * Service class
*/
class TaxService extends AbstractService
{
    /**
       * Get list of users' annual balance
       * This **GET**  endpoint is used to get tax information for a specific user identified by their `user_token`. It provides access to historical tax attribute values as well as the ability to perform attribute velocity checks. <br>  To use this endpoint, replace `user_token` in the URL path with the actual user token of the user whose tax information you want to retrieve. This endpoint's purpose is to aid in the identification of users with matching attribute values and to prevent fraudulent activities by monitoring unusual attribute value changes over time. It compares the provided attribute value to the historical attribute values for the same user to see if it meets the velocity check criteria.
     * @param int $amountThreshold If specified, only show users whose total balance exceeds the provided amount
     * @param int $taxYear The year for which we would like to obtain tax information for. If none provided, defaults to previous year.
     * @returns TaxYearUserRespSuccesful operation.
    */
    public function getTaxUsers(?int $amountThreshold = null, ?int $taxYear = null)
    {
        $url = "/tax";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($amountThreshold)) {
            $parameters->query['amount_threshold'] = $amountThreshold;
        }
        if (isset($taxYear)) {
            $parameters->query['tax_year'] = $taxYear;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get link for tax interview
       * This **GET**  endpoint is used to get a W8/W9 tax interview link for a specific user identified by their `user_token`. The user should be directed to link that is obtained by this endpoint.<br>To use this endpoint, replace `user_token` in the URL path with the actual user token of the user whose tax information you want to collect.
     * @param string $userToken
     * @returns arrayOK
    */
    public function getTaxInterviewLink(string $userToken)
    {
        $url = "/{$userToken}/tax";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
