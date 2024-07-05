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
 * @name Refund
 * Refund
 */
class Refund
{
    /**
     * @var int $amount Amount is charged without a decimal place. Currencies can have different decimals/exponentials.
     */
    public ?int $amount;
    /**
     * @var string $reason Refund reason
     */
    public ?string $reason;
    /**
     * @var string $webhookRefundUpdate A webhook url that is called when a refund is updated
     */
    public ?string $webhookRefundUpdate;
    public function __construct(?int $amount = null, ?string $reason = null, ?string $webhookRefundUpdate = null)
    {
        $this->amount = $amount;
        $this->reason = $reason;
        $this->webhookRefundUpdate = $webhookRefundUpdate;
    }
    public static function fromArray(array $data): self
    {
        return new Refund($data['amount'], $data['reason'], $data['webhook_refund_update']);
    }
    public function toArray(): array
    {
        return [
            'amount' => $this->amount,
            'reason' => $this->reason,
            'webhook_refund_update' => $this->webhookRefundUpdate,
        ];
    }
}

