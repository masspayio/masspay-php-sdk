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
class TransactionCheckoutsuccessFailure
{
    /**
     * @var string $status Current transaction status
     */
    public ?string $status;
    /**
     * @var string $statusReason Transaction status reason
     */
    public ?string $statusReason;
    /**
     * @var bool $success Checkout status success
     */
    public ?bool $success;
    public function __construct(?string $status = null, ?string $statusReason = null, ?bool $success = null)
    {
        $this->status = $status;
        $this->statusReason = $statusReason;
        $this->success = $success;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionCheckoutsuccessFailure($data['status'], $data['status_reason'], $data['success']);
    }
    public function toArray(): array
    {
        return [
            'status' => $this->status,
            'status_reason' => $this->statusReason,
            'success' => $this->success,
        ];
    }
}

