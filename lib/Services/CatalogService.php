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
class CatalogService extends AbstractService
{
    /**
       * Gets a list of countries where services offered.
       * This **GET** endpoint is used to retrieve a list of all currently available countries of service. <br> You can use this endpoint to obtain a list of countries where MassPay services are offered. <br> There are no required parameters for this endpoint. <br> The response will include a JSON array containing details for each country, including the country code, name, and `three_letter_code`.
     * @returns CountrySuccessful operation.
    */
    public function getCountryList()
    {
        $url = "/country/list";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Gets a list of Companies and their service offerings for the given country code.
       * This **GET** endpoint is used to retrieve a list of companies and their service offerings for a specific country. <br> You can use this endpoint to obtain information about available services and pricing for each respected company in the provided country. <br> To use this endpoint, you need to provide the `country_code` in the URL Path. <br> The response will include a JSON array containing details for each company, including the company name, service offerings, and pricing.
     * @param string $countryCode Country code searching services for. 3 letters [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code"
     * @param int $limit Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent
     * @param string $walletToken Token representing the wallet used. If provided, the results would be custom-tailored to this user. Not necessary if user_token is provided
     * @param string $userToken Token representing the user for which we fetch the catalog. If provided, the results would be custom-tailored to this user. Not necessary if wallet_token is provided
     * @param string $sourceCurrency Required if amount is provided. The currency associated with the amount
     * @param string $payerName Filter services that match payer name
     * @param string $destinationCurrency Filter services that support the destination currency
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param string $amount Returns the results fee based on the given amount, defaults to $200
     * @param bool $includePayerLogos Whether to include the payers logo in base64 format. 
     * @returns arraySuccessful operation.
    */
    public function getCountryServices(string $countryCode, ?int $limit = null, ?string $walletToken = null, ?string $userToken = null, ?string $sourceCurrency = null, ?string $payerName = null, ?string $destinationCurrency = null, ?string $idempotencyKey = null, ?string $amount = "200", ?bool $includePayerLogos = null)
    {
        $url = "/country/{$countryCode}";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($amount)) {
            $parameters->query['amount'] = $amount;
        }
        if (isset($limit)) {
            $parameters->query['limit'] = $limit;
        }
        if (isset($walletToken)) {
            $parameters->query['wallet_token'] = $walletToken;
        }
        if (isset($includePayerLogos)) {
            $parameters->query['include_payer_logos'] = $includePayerLogos;
        }
        if (isset($userToken)) {
            $parameters->query['user_token'] = $userToken;
        }
        if (isset($sourceCurrency)) {
            $parameters->query['source_currency'] = $sourceCurrency;
        }
        if (isset($payerName)) {
            $parameters->query['payer_name'] = $payerName;
        }
        if (isset($destinationCurrency)) {
            $parameters->query['destination_currency'] = $destinationCurrency;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Gets a list of Companies and their cheapest service offerings for the given country code.
       * This **GET** endpoint is used to retrieve a list of companies and their cheapest service offerings for a specific country. <br> You can use this endpoint to obtain information about available services and pricing for each respected company in the provided country. If two providers offer similar services, only the cheapest option will be displayed. <br> To use this endpoint, you need to provide the `country_code` as a required parameter in the URL Path. <br> The response will include a JSON array containing details for each company, including the company name, cheapest service offerings, and pricing.
     * @param string $countryCode Country code searching services for. 3 letters [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code"
     * @param int $limit Limit amount for transaction amount + fee. If fee + amount are higher than the limit, the output will automatically adjust to maximize the possible amount sent
     * @param string $walletToken Token representing the wallet used. If provided, the results would be custom-tailored to this user.
     * @param string $userToken Token representing the user for which we fetch the catalog. If provided, the results would be custom-tailored to this user. Not necessary if wallet_token is provided
     * @param string $sourceCurrency Required if amount is provided. The currency associated with the amount
     * @param string $payerName Filter services that match payer name
     * @param string $destinationCurrency Filter services that support the destination currency
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @param string $amount Returns the results fee based on the given amount, defaults to $200
     * @param bool $includePayerLogos Whether to include the payers logo in base64 format. 
     * @returns arraySuccessful operation.
    */
    public function getCheapestCountryServices(string $countryCode, ?int $limit = null, ?string $walletToken = null, ?string $userToken = null, ?string $sourceCurrency = null, ?string $payerName = null, ?string $destinationCurrency = null, ?string $idempotencyKey = null, ?string $amount = "200", ?bool $includePayerLogos = null)
    {
        $url = "/country/{$countryCode}/cheapest";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($amount)) {
            $parameters->query['amount'] = $amount;
        }
        if (isset($limit)) {
            $parameters->query['limit'] = $limit;
        }
        if (isset($walletToken)) {
            $parameters->query['wallet_token'] = $walletToken;
        }
        if (isset($includePayerLogos)) {
            $parameters->query['include_payer_logos'] = $includePayerLogos;
        }
        if (isset($userToken)) {
            $parameters->query['user_token'] = $userToken;
        }
        if (isset($sourceCurrency)) {
            $parameters->query['source_currency'] = $sourceCurrency;
        }
        if (isset($payerName)) {
            $parameters->query['payer_name'] = $payerName;
        }
        if (isset($destinationCurrency)) {
            $parameters->query['destination_currency'] = $destinationCurrency;
        }
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Returns list of alternative service to a provided service
       * This **GET** endpoint is used to retrieve a list of alternative services to a provided service. <br> You can use this endpoint to obtain information about other available services and pricing offered by different companies for a particular destination. <br> To use this endpoint, you need to provide the `destination_token` as a required parameter in the URL Path. <br> The response will include a JSON array containing details for each company, including the company name, available alternative services, and pricing.
     * @param string $destinationToken Destination token
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraySuccessful operation.
    */
    public function getDestinationTokenAlternatives(string $destinationToken, ?string $idempotencyKey = null)
    {
        $url = "/service/{$destinationToken}/alternatives";
        $parameters = new RequestParameters();
        if (isset($idempotencyKey)) {
            $parameters->headers['Idempotency-Key'] = $idempotencyKey;
        }

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Returns provided service
       * This **GET** endpoint is used to retrieve the details of the provided service. <br> To use this endpoint, you need to provide the `destination_token` as a required parameter in the URL Path. <br> The response will include a JSON object containing details for the company, including the company name, and pricing.
     * @param string $destinationToken Destination token
     * @param bool $includePayerLogos Whether to include the payers logo in base64 format. 
     * @param string $idempotencyKey Unique key to prevent duplicate processing
     * @returns arraySuccessful operation.
    */
    public function getDestinationToken(string $destinationToken, ?bool $includePayerLogos = null, ?string $idempotencyKey = null)
    {
        $url = "/service/{$destinationToken}";
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
       * Get user agreement
       * This **GET** endpoint is used to retrieve the user agreement for payout services. <br> You can use this endpoint to obtain information about the available user agreements for payout services offered by MassPay. <br> To use this endpoint, you need to provide the `ID` representing the user agreement as a required parameter in the URL Path. <br> The response will include the user agreement details.
     * @param int $id Id representing user agreement (retrieved from OPTIONS call)
     * @returns arraySuccessful operation.
    */
    public function getUserAgreement(int $id)
    {
        $url = "/user-agreements";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        $parameters->query['id'] = $id;

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Get available user agreements
       * This OPTIONS endpoint is used to retrieve a list of available user agreements for payout services offered by MassPay without the content. <br> You can use this endpoint to obtain the names of available user agreements. <br> There are no required parameters needed to use this endpoint. <br> The response will include a list of user agreement names
     * @returns array[]Successful operation.
    */
    public function getUserAgreementsNames()
    {
        $url = "/user-agreements";
        $parameters = new RequestParameters();

        return $this->options($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
