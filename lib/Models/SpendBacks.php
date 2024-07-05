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
class SpendBacks
{
    /**
     * @var string $spendbackToken Token representing the load token
     */
    public string $spendbackToken;
    /**
     * @var string $timeOfSpendback The timestamp the spend back was created in the system. Using UTC timestamp.[ISO 8601](https://en.wikipedia.org/wiki/ISO_8601)
     */
    public string $timeOfSpendback;
    /**
     * @var string $clientSpendbackId A client defined spend back identifier. This is the unique ID assigned to the spend back on your system. Max 50 characters.
     */
    public string $clientSpendbackId;
    /**
     * @var string $sourceToken Token that represents the funding source i.e. bank account, wallet. 36 characters long
     */
    public string $sourceToken;
    /**
     * @var string $walletToken Token that represents the wallet that received the funds. 36 characters long
     */
    public string $walletToken;
    /**
     * @var int $amount The amount to credit the user's wallet in source currency
     */
    public int $amount;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     */
    public string $sourceCurrencyCode;
    /**
     * @var string $notes A description for the load. Will be visible to the user receiving the load
     */
    public string $notes;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this spendback. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    public function __construct(string $spendbackToken, string $timeOfSpendback, string $clientSpendbackId, string $sourceToken, string $walletToken, int $amount, string $sourceCurrencyCode, string $notes, ?array $metadata = null)
    {
        $this->spendbackToken = $spendbackToken;
        $this->timeOfSpendback = $timeOfSpendback;
        $this->clientSpendbackId = $clientSpendbackId;
        $this->sourceToken = $sourceToken;
        $this->walletToken = $walletToken;
        $this->amount = $amount;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->notes = $notes;
        $this->metadata = $metadata;
    }
    public static function fromArray(array $data): self
    {
        return new SpendBacks($data['spendback_token'], $data['time_of_spendback'], $data['client_spendback_id'], $data['source_token'], $data['wallet_token'], $data['amount'], $data['source_currency_code'], $data['notes'], $data['metadata']);
    }
    public function toArray(): array
    {
        return [
            'spendback_token' => $this->spendbackToken,
            'time_of_spendback' => $this->timeOfSpendback,
            'client_spendback_id' => $this->clientSpendbackId,
            'source_token' => $this->sourceToken,
            'wallet_token' => $this->walletToken,
            'amount' => $this->amount,
            'source_currency_code' => $this->sourceCurrencyCode,
            'notes' => $this->notes,
            'metadata' => $this->metadata,
        ];
    }
}

