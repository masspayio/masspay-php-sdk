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
namespace MasspaySdk\Models;
class AvailableBalanceTxnResp
{
    /**
     * @var string $token Token representing your funding account. You should use this as source_token when paying out transactions.
     */
    public string $token;
    /**
     * @var int $balance Your account's current available balance in USD
     */
    public int $balance;
    /**
     * @var string $currencyCode The currency the balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD
     */
    public string $currencyCode;
    public function __construct(string $token, int $balance, string $currencyCode)
    {
        $this->token = $token;
        $this->balance = $balance;
        $this->currencyCode = $currencyCode;
    }
    public static function fromArray(array $data): self
    {
        return new AvailableBalanceTxnResp($data['token'], $data['balance'], $data['currency_code']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'balance' => $this->balance,
            'currency_code' => $this->currencyCode,
        ];
    }
}

