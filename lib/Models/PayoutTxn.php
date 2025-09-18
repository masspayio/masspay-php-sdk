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
class PayoutTxn
{
    /**
     * @var string $destinationCurrencyCode The currency the funds will be deposited into. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format
     */
    public string $destinationCurrencyCode;
    /**
     * @var string $sourceToken Token that represents the funding source i.e. bank account, wallet. 36 characters long
     */
    public string $sourceToken;
    /**
     * @var string $destinationToken Token that represents the payout destination i.e. MassPay->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long
     */
    public string $destinationToken;
    /**
     * @var string $clientTransferId A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters.
     */
    public ?string $clientTransferId;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     */
    public ?string $sourceCurrencyCode;
    /**
     * @var int $destinationAmount The amount to be sent for payout in source currency. i.e USD. Must be provided if source_amount is empty
     */
    public ?float $destinationAmount;
    /**
     * @var int $sourceAmount The amount to be received by the payout in source currency. i.e USD. Must be provided if destination_amount is empty
     */
    public ?float $sourceAmount;
    /**
     * @var string $attrSetToken Token that represents set of attributes that associated with destination_token. For example, bank account, mobile account, wallet id, etc. If not provided, uses the last one used. 36 characters long
     */
    public ?string $attrSetToken;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this payout. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    /**
     * @var bool $notifyUser Should we notify the user via email/sms about status updates for this payout?
     */
    public ?bool $notifyUser;
    /**
     * @var bool $autoCommit Auto commit would commit the payout without requiring the API call to the commit payout endpoint. This option is only available when the `source_currency` and the `destination_currency` are the same. Whenever an exchange rate is applied to a transaction, a separate commit call is required.
     */
    public ?bool $autoCommit;
    public function __construct(string $destinationCurrencyCode, string $sourceToken, string $destinationToken, ?string $clientTransferId = null, ?string $sourceCurrencyCode = null, ?float $destinationAmount = null, ?float $sourceAmount = null, ?string $attrSetToken = null, ?array $metadata = null, ?bool $notifyUser = null, ?bool $autoCommit = null)
    {
        $this->destinationCurrencyCode = $destinationCurrencyCode;
        $this->sourceToken = $sourceToken;
        $this->destinationToken = $destinationToken;
        $this->clientTransferId = $clientTransferId;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->destinationAmount = $destinationAmount;
        $this->sourceAmount = $sourceAmount;
        $this->attrSetToken = $attrSetToken;
        $this->metadata = $metadata;
        $this->notifyUser = $notifyUser;
        $this->autoCommit = $autoCommit;
    }
    public static function fromArray(array $data): self
    {
        return new PayoutTxn($data['destination_currency_code'], $data['source_token'], $data['destination_token'], $data['client_transfer_id'], $data['source_currency_code'], $data['destination_amount'], $data['source_amount'], $data['attr_set_token'], $data['metadata'], $data['notify_user'], $data['auto_commit']);
    }
    public function toArray(): array
    {
        return [
            'destination_currency_code' => $this->destinationCurrencyCode,
            'source_token' => $this->sourceToken,
            'destination_token' => $this->destinationToken,
            'client_transfer_id' => $this->clientTransferId,
            'source_currency_code' => $this->sourceCurrencyCode,
            'destination_amount' => $this->destinationAmount,
            'source_amount' => $this->sourceAmount,
            'attr_set_token' => $this->attrSetToken,
            'metadata' => $this->metadata,
            'notify_user' => $this->notifyUser,
            'auto_commit' => $this->autoCommit,
        ];
    }
}

