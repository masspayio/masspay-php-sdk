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
 * @name Webhook
 * Webhook
 */
/**
 * Type of item this webhook is connected to
 */
enum webhookType: string {
    case TRANSACTION = "transaction";
    case REFUND = "refund";
    case CHARGEBACK = "chargeback";
    case CARDLINK = "cardlink";
    case VALIDATIONRULESET = "validationruleset";
    case REPORT_GENERATED = "report_generated";
    case SUBSCRIPTION = "subscription";
}
/**
 * The status change this webhook communicates
 */
enum webhookStatus: string {
    case INITIATED = "INITIATED";
    case IN_PROGRESS = "IN_PROGRESS";
    case PENDING = "PENDING";
    case AUTHORIZED = "AUTHORIZED";
    case PROCESSED = "PROCESSED";
    case SETTLEMENT_REQUESTED = "SETTLEMENT_REQUESTED";
    case SETTLEMENT_COMPLETED = "SETTLEMENT_COMPLETED";
    case DECLINED = "DECLINED";
    case FAILED = "FAILED";
    case UNKNOWN = "UNKNOWN";
    case ABANDONED = "ABANDONED";
    case HOLD = "HOLD";
    case CANCELLED = "CANCELLED";
    case AUTHORIZATION_VOIDED = "AUTHORIZATION_VOIDED";
    case OPEN = "OPEN";
    case IN_DISPUTE = "IN_DISPUTE";
    case WON = "WON";
    case LOST = "LOST";
    case CREATED = "CREATED";
    case DONE = "DONE";
    case EXPIRED = "EXPIRED";
}
class Webhook
{
    /**
     * @var webhookType $type Type of item this webhook is connected to
     */
    public ?webhookType $type;
    /**
     * @var string $itemId Item id of the item this webhook is connected to
     */
    public ?string $itemId;
    /**
     * @var webhookStatus $status The status change this webhook communicates
     */
    public ?webhookStatus $status;
    /**
     * @var string $statusReason Status reason
     */
    public ?string $statusReason;
    /**
     * @var string $url URL of the webhook
     */
    public ?string $url;
    public function __construct(?webhookType $type = null, ?string $itemId = null, ?webhookStatus $status = null, ?string $statusReason = null, ?string $url = null)
    {
        $this->type = $type;
        $this->itemId = $itemId;
        $this->status = $status;
        $this->statusReason = $statusReason;
        $this->url = $url;
    }
    public static function fromArray(array $data): self
    {
        return new Webhook($data['type'], $data['item_id'], $data['status'], $data['status_reason'], $data['url']);
    }
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'item_id' => $this->itemId,
            'status' => $this->status,
            'status_reason' => $this->statusReason,
            'url' => $this->url,
        ];
    }
}

