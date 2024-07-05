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
 * @name CustomerStatusHistory
 * CustomerStatusHistory
 */
/**
 * Customer status
 */
enum customerStatusHistoryStatus: string {
    case UNVERIFIED = "unverified";
    case AUTO_UNVERIFIED = "auto-unverified";
    case AUTO_VERIFIED = "auto-verified";
    case VERIFIED = "verified";
}
class CustomerStatusHistory
{
    /**
     * @var string $id Customer ID.
     */
    public ?string $id;
    /**
     * @var string $customer Reference to the customer this history belongs to
     */
    public ?string $customer;
    /**
     * @var customerStatusHistoryStatus $status Customer status
     */
    public ?customerStatusHistoryStatus $status;
    /**
     * @var string $statusReason Customer status reason
     */
    public ?string $statusReason;
    /**
     * @var string $createdAt The date and time when the transaction history item was first created
     */
    public ?string $createdAt;
    public function __construct(?string $id = null, ?string $customer = null, ?customerStatusHistoryStatus $status = null, ?string $statusReason = null, ?string $createdAt = null)
    {
        $this->id = $id;
        $this->customer = $customer;
        $this->status = $status;
        $this->statusReason = $statusReason;
        $this->createdAt = $createdAt;
    }
    public static function fromArray(array $data): self
    {
        return new CustomerStatusHistory($data['id'], $data['customer'], $data['status'], $data['status_reason'], $data['created_at']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'customer' => $this->customer,
            'status' => $this->status,
            'status_reason' => $this->statusReason,
            'created_at' => $this->createdAt,
        ];
    }
}

