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
 * Transaction status name
 */
enum transactionLifecycleName: string {
    case INITIATED = "INITIATED";
    case IN_PROGRESS = "IN_PROGRESS";
    case PENDING = "PENDING";
    case AUTHORIZED = "AUTHORIZED";
    case SETTLEMENT_REQUESTED = "SETTLEMENT_REQUESTED";
    case SETTLEMENT_COMPLETED = "SETTLEMENT_COMPLETED";
    case DECLINED = "DECLINED";
    case FAILED = "FAILED";
    case UNKNOWN = "UNKNOWN";
    case ABANDONED = "ABANDONED";
    case CANCELLED = "CANCELLED";
    case AUTHORIZATION_VOIDED = "AUTHORIZATION_VOIDED";
}
class TransactionLifecycle
{
    /**
     * @var transactionLifecycleName $name Transaction status name
     */
    public ?transactionLifecycleName $name;
    /**
     * @var int $count Count of transactions with this transaction status
     */
    public ?int $count;
    /**
     * @var int $countPercentage Percentage of the total count of transactions
     */
    public ?int $countPercentage;
    /**
     * @var int $volume Total volume
     */
    public ?int $volume;
    /**
     * @var int $volumePercentage Percentage of the total volume of all transactions
     */
    public ?int $volumePercentage;
    public function __construct(?transactionLifecycleName $name = null, ?int $count = null, ?int $countPercentage = null, ?int $volume = null, ?int $volumePercentage = null)
    {
        $this->name = $name;
        $this->count = $count;
        $this->countPercentage = $countPercentage;
        $this->volume = $volume;
        $this->volumePercentage = $volumePercentage;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionLifecycle($data['name'], $data['count'], $data['count_percentage'], $data['volume'], $data['volume_percentage']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'count' => $this->count,
            'count_percentage' => $this->countPercentage,
            'volume' => $this->volume,
            'volume_percentage' => $this->volumePercentage,
        ];
    }
}

