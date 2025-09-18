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
/**
 * Status of the load
 */
enum loadsStatus: string {
    case COMPLETED = "COMPLETED";
    case CANCELLED = "CANCELLED";
    case SCHEDULED = "SCHEDULED";
}
class Loads
{
    /**
     * @var string $loadToken Token representing the load token
     */
    public string $loadToken;
    /**
     * @var string $timeOfLoad The timestamp the load was processed. If not processed yet, a future date will be returned. Using UTC timestamp.[ISO 8601](https://en.wikipedia.org/wiki/ISO_8601)
     */
    public string $timeOfLoad;
    /**
     * @var string $clientLoadId A client defined load identifier. This is the unique ID assigned to the load on your system. Max 50 characters.
     */
    public string $clientLoadId;
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
    public float $amount;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     */
    public string $sourceCurrencyCode;
    /**
     * @var string $notes A description for the load. Will be visible to the user receiving the load
     */
    public string $notes;
    /**
     * @var loadsStatus $status Status of the load
     */
    public loadsStatus $status;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this load. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    public function __construct(string $loadToken, string $timeOfLoad, string $clientLoadId, string $sourceToken, string $walletToken, float $amount, string $sourceCurrencyCode, string $notes, loadsStatus $status, ?array $metadata = null)
    {
        $this->loadToken = $loadToken;
        $this->timeOfLoad = $timeOfLoad;
        $this->clientLoadId = $clientLoadId;
        $this->sourceToken = $sourceToken;
        $this->walletToken = $walletToken;
        $this->amount = $amount;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->notes = $notes;
        $this->status = $status;
        $this->metadata = $metadata;
    }
    public static function fromArray(array $data): self
    {
        return new Loads($data['load_token'], $data['time_of_load'], $data['client_load_id'], $data['source_token'], $data['wallet_token'], $data['amount'], $data['source_currency_code'], $data['notes'], $data['status'], $data['metadata']);
    }
    public function toArray(): array
    {
        return [
            'load_token' => $this->loadToken,
            'time_of_load' => $this->timeOfLoad,
            'client_load_id' => $this->clientLoadId,
            'source_token' => $this->sourceToken,
            'wallet_token' => $this->walletToken,
            'amount' => $this->amount,
            'source_currency_code' => $this->sourceCurrencyCode,
            'notes' => $this->notes,
            'status' => $this->status,
            'metadata' => $this->metadata,
        ];
    }
}

