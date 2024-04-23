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
class AccountService extends AbstractService
{
    /**
       * Get current available balance
       * This **GET** endpoint is used to retrieve the current available balance for the MassPay account. <br> You can use this endpoint to obtain information about the current balance in your account. <br> There are no required parameters needed to access this endpoint. <br> The response will include a JSON objects containing details for the current available balance, including the token, balance and `currency_code`.
     * @returns AvailableBalanceTxnRespsuccessful operation
    */
    public function getAccountBalance()
    {
        $url = "/account/balance";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get certified account statement
       * This **GET** endpoint is used to retrieve a certified PDF ledger statement for a provided timeframe. <br> You can use this endpoint to obtain a ledger statement for your MassPay account for a specific time period. <br> To use this endpoint, you need to provide the `start_date` and `ending_date` as required parameters in the Query string of the URL. <br> The response will include a certified PDF ledger statement containing transaction details for the specified timeframe.
     * @param string $startDate Starting date of the statement
     * @param string $endingDate Ending date of the statement (not more than 31 days than `start_date`)
     * @returns arraySuccessful operation.
    */
    public function getAccountStatement(string $startDate, string $endingDate)
    {
        $url = "/account/statement";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['start_date'] = $startDate;
        $parameters->query['ending_date'] = $endingDate;

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
