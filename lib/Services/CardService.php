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
class CardService extends AbstractService
{
    /**
       * Get MassPay card information
       * This **GET** endpoint is used to retrieve MassPay card information associated with the provided wallet token. <br> You can use this endpoint to obtain information about the MassPay card associated with the wallet. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as required parameters in the URL Path. <br> The response will include a JSON object containing details for the MassPay card, including the card number, balance, status. If your company is not PCI compliant, each field would contain a url that displays the corresponding card detail once accessed through an iFrame.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @returns arraySuccesful operation.
    */
    public function getWalletCardInfo(string $userToken, string $walletToken)
    {
        $url = "/wallet/{$userToken}/{$walletToken}/card";
        $parameters = new RequestParameters();

        return $this->get($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
    /**
       * Update MassPay card information
       * This **PUT** endpoint is used to update the MassPay card information for a provided user token and wallet token. <br> You can use this endpoint to help your users manage their MassPay card information, including updating their card PIN number or status. <br> To use this endpoint, you need to provide the `user_token` and `wallet_token` as parameters in the URL Path, along with the parameters in the request Query, including the card pin number or(and) status. <br> The endpoint will then update the card information for the provided user and wallet token.
     * @param string $userToken Token representing the user who owns the wallet
     * @param string $walletToken Token representing the wallet
     * @param string $pin New 4 digit pin number for the card (To be used in ATM machines)
     * @param string $status New status for the card
     * @returns mixedSuccesful operation.
    */
    public function updateWalletCardInfo(string $userToken, string $walletToken, ?string $pin = null, ?updateWalletCardInfoStatus $status = null)
    {
        $url = "/wallet/{$userToken}/{$walletToken}/card";
        $parameters = new RequestParameters();
        $parameters->setQuery([]);
        if (isset($pin)) {
            $parameters->query['pin'] = $pin;
        }
        if (isset($status)) {
            $parameters->query['status'] = $status;
        }

        return $this->put($parameters->getFormattedQuery($url), $parameters->getRequestBody(), $parameters->headers);
    }
}
