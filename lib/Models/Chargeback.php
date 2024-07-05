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
 * @name Chargeback
 * Chargeback
 */
/**
 * The current state of the chargeback
 */
enum chargebackStatus: string {
    case OPEN = "OPEN";
    case IN_DISPUTE = "IN_DISPUTE";
    case WON = "WON";
    case LOST = "LOST";
    case CANCELLED = "CANCELLED";
}
/**
 * The source of chargeback
 */
enum chargebackSourceType: string {
    case PROCESSOR_CB = "PROCESSOR_CB";
    case AMEX = "AMEX";
    case PAYPAL = "PAYPAL";
    case PROCESSOR_INQUIRY = "PROCESSOR_INQUIRY";
    case CUSTOMER_SUPPORT = "CUSTOMER_SUPPORT";
    case SHIPPING_CARRIER = "SHIPPING_CARRIER";
    case THIRD_PARTY = "THIRD_PARTY";
    case OTHER = "OTHER";
}
class Chargeback
{
    /**
     * @var string $transaction Reference to the transaction this chargeback belongs to
     */
    public ?string $transaction;
    /**
     * @var int $amount The amount of the Chargeback, without decimal
     */
    public ?int $amount;
    /**
     * @var string $reason A description of the reason of the chargeback
     */
    public ?string $reason;
    /**
     * @var chargebackStatus $status The current state of the chargeback
     */
    public ?chargebackStatus $status;
    /**
     * @var chargebackSourceType $sourceType The source of chargeback
     */
    public ?chargebackSourceType $sourceType;
    /**
     * @var string $workByDate The date by which the merchant must fight the chargeback in a dispute, AKA representment
     */
    public ?string $workByDate;
    public function __construct(?string $transaction = null, ?int $amount = null, ?string $reason = null, ?chargebackStatus $status = null, ?chargebackSourceType $sourceType = null, ?string $workByDate = null)
    {
        $this->transaction = $transaction;
        $this->amount = $amount;
        $this->reason = $reason;
        $this->status = $status;
        $this->sourceType = $sourceType;
        $this->workByDate = $workByDate;
    }
    public static function fromArray(array $data): self
    {
        return new Chargeback($data['transaction'], $data['amount'], $data['reason'], $data['status'], $data['source_type'], $data['work_by_date']);
    }
    public function toArray(): array
    {
        return [
            'transaction' => $this->transaction,
            'amount' => $this->amount,
            'reason' => $this->reason,
            'status' => $this->status,
            'source_type' => $this->sourceType,
            'work_by_date' => $this->workByDate,
        ];
    }
}

