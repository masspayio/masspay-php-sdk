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
class LoadTxn
{
    /**
     * @var string $clientLoadId A client defined load identifier. This is the unique ID assigned to the load on your system. Max 50 characters.
     */
    public string $clientLoadId;
    /**
     * @var string $sourceToken Token that represents the funding source i.e. bank account, wallet. 36 characters long
     */
    public string $sourceToken;
    /**
     * @var int $amount The amount to credit the user's wallet in source currency
     */
    public int $amount;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided. There is a special currency case for PNTS - learn more [here] (#Points)
     */
    public ?string $sourceCurrencyCode;
    /**
     * @var string $notes A description for the load. Will be visible to the user receiving the load
     */
    public ?string $notes;
    /**
     * @var bool $notifyUser Should we notify the user via email that they've received a load? If the user has no existing account, they will receive instructions to establish such account.
     */
    public ?bool $notifyUser;
    /**
     * @var string $timeToProcess Future date/time to process the load on. If none is provided, it is processed right away. Time to be provided in UTC [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601)
     */
    public ?string $timeToProcess;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this load. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    public function __construct(string $clientLoadId, string $sourceToken, int $amount, ?string $sourceCurrencyCode = null, ?string $notes = null, ?bool $notifyUser = null, ?string $timeToProcess = null, ?array $metadata = null)
    {
        $this->clientLoadId = $clientLoadId;
        $this->sourceToken = $sourceToken;
        $this->amount = $amount;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->notes = $notes;
        $this->notifyUser = $notifyUser;
        $this->timeToProcess = $timeToProcess;
        $this->metadata = $metadata;
    }
    public static function fromArray(array $data): self
    {
        return new LoadTxn($data['client_load_id'], $data['source_token'], $data['amount'], $data['source_currency_code'], $data['notes'], $data['notify_user'], $data['time_to_process'], $data['metadata']);
    }
    public function toArray(): array
    {
        return [
            'client_load_id' => $this->clientLoadId,
            'source_token' => $this->sourceToken,
            'amount' => $this->amount,
            'source_currency_code' => $this->sourceCurrencyCode,
            'notes' => $this->notes,
            'notify_user' => $this->notifyUser,
            'time_to_process' => $this->timeToProcess,
            'metadata' => $this->metadata,
        ];
    }
}

