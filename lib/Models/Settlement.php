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
 * @name Settlement
 * Settlement
 */
class Settlement
{
    /**
     * @var string $id Id
     */
    public ?string $id;
    /**
     * @var string $organisation Reference to the organisation this transaction belongs to
     */
    public ?string $organisation;
    /**
     * @var string $paymentProfile Reference to the payment profile this settlement belongs to
     */
    public ?string $paymentProfile;
    /**
     * @var string $settlementProfile Reference to the settlement profile this settlement belongs to
     */
    public ?string $settlementProfile;
    /**
     * @var string $description A short description of this settlement
     */
    public ?string $description;
    /**
     * @var int $amount Amount is charged without a decimal place.
     */
    public ?int $amount;
    /**
     * @var int $fees Fees is charged without a decimal place.
     */
    public ?int $fees;
    /**
     * @var int $transactionCount Total count of transactions connected to this settlement
     */
    public ?int $transactionCount;
    /**
     * @var int $transactionVolume Total volume of transaction amounts
     */
    public ?int $transactionVolume;
    /**
     * @var int $refundCount Total count of refunds connected to this settlement
     */
    public ?int $refundCount;
    /**
     * @var int $refundVolume Total volume of refund amounts
     */
    public ?int $refundVolume;
    /**
     * @var int $chargebackCount Total count of chargebac connected to this settlement
     */
    public ?int $chargebackCount;
    /**
     * @var int $chargebackVolume Total volume of refund amounts
     */
    public ?int $chargebackVolume;
    /**
     * @var string $createdAt The date and time when the report was first created
     */
    public ?string $createdAt;
    public function __construct(?string $id = null, ?string $organisation = null, ?string $paymentProfile = null, ?string $settlementProfile = null, ?string $description = null, ?int $amount = null, ?int $fees = null, ?int $transactionCount = null, ?int $transactionVolume = null, ?int $refundCount = null, ?int $refundVolume = null, ?int $chargebackCount = null, ?int $chargebackVolume = null, ?string $createdAt = null)
    {
        $this->id = $id;
        $this->organisation = $organisation;
        $this->paymentProfile = $paymentProfile;
        $this->settlementProfile = $settlementProfile;
        $this->description = $description;
        $this->amount = $amount;
        $this->fees = $fees;
        $this->transactionCount = $transactionCount;
        $this->transactionVolume = $transactionVolume;
        $this->refundCount = $refundCount;
        $this->refundVolume = $refundVolume;
        $this->chargebackCount = $chargebackCount;
        $this->chargebackVolume = $chargebackVolume;
        $this->createdAt = $createdAt;
    }
    public static function fromArray(array $data): self
    {
        return new Settlement($data['id'], $data['organisation'], $data['payment_profile'], $data['settlement_profile'], $data['description'], $data['amount'], $data['fees'], $data['transaction_count'], $data['transaction_volume'], $data['refund_count'], $data['refund_volume'], $data['chargeback_count'], $data['chargeback_volume'], $data['created_at']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'organisation' => $this->organisation,
            'payment_profile' => $this->paymentProfile,
            'settlement_profile' => $this->settlementProfile,
            'description' => $this->description,
            'amount' => $this->amount,
            'fees' => $this->fees,
            'transaction_count' => $this->transactionCount,
            'transaction_volume' => $this->transactionVolume,
            'refund_count' => $this->refundCount,
            'refund_volume' => $this->refundVolume,
            'chargeback_count' => $this->chargebackCount,
            'chargeback_volume' => $this->chargebackVolume,
            'created_at' => $this->createdAt,
        ];
    }
}

