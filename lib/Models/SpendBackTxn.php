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
class SpendBackTxn
{
    /**
     * @var string $clientSpendbackId A client defined spend back identifier. This is the unique ID assigned to the load on your system. Max 50 characters.
     */
    public string $clientSpendbackId;
    /**
     * @var string $sourceToken Token that represents the funding source i.e. bank account, wallet. 36 characters long
     */
    public string $sourceToken;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     */
    public string $sourceCurrencyCode;
    /**
     * @var int $amount The amount to debit the user's wallet in source currency
     */
    public int $amount;
    /**
     * @var string $notes A description for the spend back
     */
    public ?string $notes;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this spendback. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    public function __construct(string $clientSpendbackId, string $sourceToken, string $sourceCurrencyCode, int $amount, ?string $notes = null, ?array $metadata = null)
    {
        $this->clientSpendbackId = $clientSpendbackId;
        $this->sourceToken = $sourceToken;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->amount = $amount;
        $this->notes = $notes;
        $this->metadata = $metadata;
    }
    public static function fromArray(array $data): self
    {
        return new SpendBackTxn($data['client_spendback_id'], $data['source_token'], $data['source_currency_code'], $data['amount'], $data['notes'], $data['metadata']);
    }
    public function toArray(): array
    {
        return [
            'client_spendback_id' => $this->clientSpendbackId,
            'source_token' => $this->sourceToken,
            'source_currency_code' => $this->sourceCurrencyCode,
            'amount' => $this->amount,
            'notes' => $this->notes,
            'metadata' => $this->metadata,
        ];
    }
}

