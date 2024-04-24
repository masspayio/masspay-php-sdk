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
namespace MasspaySdk\Models;
/**
 * Type of wallet
 */
enum walletTxnRespType: string {
    case MASSPAY_CARD = "MASSPAY_CARD";
    case USER_FUNDS = "USER_FUNDS";
}
/**
 * In case type of wallet is MASSPAY_CARD, card_type would be provided with the type of card it is
 */
enum walletTxnRespCardType: string {
    case MASTERCARD = "MASTERCARD";
    case VISA = "VISA";
    case AMEX = "AMEX";
    case DISCOVER = "DISCOVER";
    case UNIONPAY = "UNIONPAY";
}
class WalletTxnResp
{
    /**
     * @var string $userToken Token representing the user
     */
    public string $userToken;
    /**
     * @var string $token Token representing the wallet
     */
    public string $token;
    /**
     * @var int $balance The wallet's current balance in USD
     */
    public int $balance;
    /**
     * @var string $currencyCode The currency wallet balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD
     */
    public string $currencyCode;
    /**
     * @var walletTxnRespType $type Type of wallet
     */
    public walletTxnRespType $type;
    /**
     * @var bool $active An indicator whether the wallet is active. If inactive, can still retrieve historical transactions history
     */
    public bool $active;
    /**
     * @var walletTxnRespCardType $cardType In case type of wallet is MASSPAY_CARD, card_type would be provided with the type of card it is
     */
    public ?walletTxnRespCardType $cardType;
    /**
     * @var string $last4 In case type of wallet is MASSPAY_CARD, last_4 would be provided with the last four digits of the card
     */
    public ?string $last4;
    /**
     * @var bool $clientPayingFees An indicator whether the fees for payouts using this wallet are paid by the client. If false, the user pays the fees
     */
    public ?bool $clientPayingFees;
    public function __construct(string $userToken, string $token, int $balance, string $currencyCode, walletTxnRespType $type, bool $active, ?walletTxnRespCardType $cardType = null, ?string $last4 = null, ?bool $clientPayingFees = null)
    {
        $this->userToken = $userToken;
        $this->token = $token;
        $this->balance = $balance;
        $this->currencyCode = $currencyCode;
        $this->type = $type;
        $this->active = $active;
        $this->cardType = $cardType;
        $this->last4 = $last4;
        $this->clientPayingFees = $clientPayingFees;
    }
    public static function fromArray(array $data): self
    {
        return new WalletTxnResp($data['user_token'], $data['token'], $data['balance'], $data['currency_code'], $data['type'], $data['active'], $data['card_type'], $data['last_4'], $data['client_paying_fees']);
    }
    public function toArray(): array
    {
        return [
            'user_token' => $this->userToken,
            'token' => $this->token,
            'balance' => $this->balance,
            'currency_code' => $this->currencyCode,
            'type' => $this->type,
            'active' => $this->active,
            'card_type' => $this->cardType,
            'last_4' => $this->last4,
            'client_paying_fees' => $this->clientPayingFees,
        ];
    }
}

