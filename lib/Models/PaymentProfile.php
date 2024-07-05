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
 * @name PaymentProfile
 * Payment profile
 */
class PaymentProfile
{
    /**
     * @var string $bankAccount Reference to the bank account linked to this payment profile
     */
    public ?string $bankAccount;
    /**
     * @var string $description A description of the payment profile
     */
    public ?string $description;
    /**
     * @var string $website Website
     */
    public ?string $website;
    /**
     * @var bool $disabled If set to true, it prevents the user from performing any actions on this payment profile
     */
    public ?bool $disabled;
    /**
     * @var string $name The name of the payment profile
     */
    public ?string $name;
    /**
     * @var string $displayName The display name of the payment profile; used for hosted payment pages
     */
    public ?string $displayName;
    /**
     * @var string $processors A list of processor ids attached to this payment profile
     */
    public ?string $processors;
    /**
     * @var string $middleware A list of middleware ids attached to this payment profile
     */
    public ?string $middleware;
    /**
     * @var string $webhookChargebackUpdate A webhook url that is called when a chargeback is updated
     */
    public ?string $webhookChargebackUpdate;
    /**
     * @var string $webhookRefundUpdate A webhook url that is called when a refund is updated
     */
    public ?string $webhookRefundUpdate;
    /**
     * @var string $webhookTransactionUpdate A webhook url that is called when a transaction is updated
     */
    public ?string $webhookTransactionUpdate;
    /**
     * @var string $webhookFailedEmail We’ll try to deliver a webhook multiple times. When this fails we’ll send an email with the details to this email address
     */
    public ?string $webhookFailedEmail;
    /**
     * @var array $routing Routing per payment product
     */
    public ?array $routing;
    public function __construct(?string $bankAccount = null, ?string $description = null, ?string $website = null, ?bool $disabled = null, ?string $name = null, ?string $displayName = null, ?string $processors = null, ?string $middleware = null, ?string $webhookChargebackUpdate = null, ?string $webhookRefundUpdate = null, ?string $webhookTransactionUpdate = null, ?string $webhookFailedEmail = null, ?array $routing = null)
    {
        $this->bankAccount = $bankAccount;
        $this->description = $description;
        $this->website = $website;
        $this->disabled = $disabled;
        $this->name = $name;
        $this->displayName = $displayName;
        $this->processors = $processors;
        $this->middleware = $middleware;
        $this->webhookChargebackUpdate = $webhookChargebackUpdate;
        $this->webhookRefundUpdate = $webhookRefundUpdate;
        $this->webhookTransactionUpdate = $webhookTransactionUpdate;
        $this->webhookFailedEmail = $webhookFailedEmail;
        $this->routing = $routing;
    }
    public static function fromArray(array $data): self
    {
        return new PaymentProfile($data['bank_account'], $data['description'], $data['website'], $data['disabled'], $data['name'], $data['display_name'], $data['processors'], $data['middleware'], $data['webhook_chargeback_update'], $data['webhook_refund_update'], $data['webhook_transaction_update'], $data['webhook_failed_email'], $data['routing']);
    }
    public function toArray(): array
    {
        return [
            'bank_account' => $this->bankAccount,
            'description' => $this->description,
            'website' => $this->website,
            'disabled' => $this->disabled,
            'name' => $this->name,
            'display_name' => $this->displayName,
            'processors' => $this->processors,
            'middleware' => $this->middleware,
            'webhook_chargeback_update' => $this->webhookChargebackUpdate,
            'webhook_refund_update' => $this->webhookRefundUpdate,
            'webhook_transaction_update' => $this->webhookTransactionUpdate,
            'webhook_failed_email' => $this->webhookFailedEmail,
            'routing' => $this->routing,
        ];
    }
}

