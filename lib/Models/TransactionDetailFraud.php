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
 * Advised action by fraud provider
 */
enum transactionDetailFraudAction: string {
    case APPROVE = "APPROVE";
    case DECLINE = "DECLINE";
    case VERIFICATION_REQUIRED = "VERIFICATION_REQUIRED";
    case WATCH = "WATCH";
    case NOT_REVIEWED = "NOT_REVIEWED";
}
class TransactionDetailFraud
{
    /**
     * @var transactionDetailFraudAction $action Advised action by fraud provider
     */
    public ?transactionDetailFraudAction $action;
    /**
     * @var string $reasonCode Reason code for advised action
     */
    public ?string $reasonCode;
    /**
     * @var string $recommendation Recommendation description
     */
    public ?string $recommendation;
    /**
     * @var string $provider Name of the fraud provider
     */
    public ?string $provider;
    public function __construct(?transactionDetailFraudAction $action = null, ?string $reasonCode = null, ?string $recommendation = null, ?string $provider = null)
    {
        $this->action = $action;
        $this->reasonCode = $reasonCode;
        $this->recommendation = $recommendation;
        $this->provider = $provider;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailFraud($data['action'], $data['reason_code'], $data['recommendation'], $data['provider']);
    }
    public function toArray(): array
    {
        return [
            'action' => $this->action,
            'reason_code' => $this->reasonCode,
            'recommendation' => $this->recommendation,
            'provider' => $this->provider,
        ];
    }
}

