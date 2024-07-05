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
 * @name Plan
 * Plan
 */
/**
 * Specifies cycle frequency
 */
enum planInterval: string {
    case DAY = "day";
    case WEEK = "week";
    case MONTH = "month";
    case YEAR = "year";
}
class Plan
{
    /**
     * @var string $checkout Reference to the checkout used for this plan
     */
    public ?string $checkout;
    /**
     * @var string $name Plan name
     */
    public ?string $name;
    /**
     * @var string $description Description
     */
    public ?string $description;
    /**
     * @var string $dynamicDescriptor A short reference / descriptor that will show up on the customers bank statement
     */
    public ?string $dynamicDescriptor;
    /**
     * @var int $amount Amount is charged without a decimal place.
     */
    public ?int $amount;
    /**
     * @var planInterval $interval Specifies cycle frequency
     */
    public ?planInterval $interval;
    /**
     * @var int $intervalCount The number of intervals between billing. For example, interval=month and interval_count=3 bills every 3 months Maximum of one-year total interval allowed
     */
    public ?int $intervalCount;
    /**
     * @var int $maxBillingCycle The maximum number of billing cycles in the subscription
     */
    public ?int $maxBillingCycle;
    /**
     * @var string $webhookSubscriptionUpdate A webhook url that is called with subscription updates.
     */
    public ?string $webhookSubscriptionUpdate;
    /**
     * @var string $emailSubscriptionUpdate An email address that receives subscription updates.
     */
    public ?string $emailSubscriptionUpdate;
    /**
     * @var planStatusesSubscriptionUpdate[] $statusesSubscriptionUpdate Array of subscription statuses. When a subscription status is set to one of those a notification is sent.
     */
    public ?array
    $statusesSubscriptionUpdate;
    public function __construct(?string $checkout = null, ?string $name = null, ?string $description = null, ?string $dynamicDescriptor = null, ?int $amount = null, ?planInterval $interval = null, ?int $intervalCount = null, ?int $maxBillingCycle = null, ?string $webhookSubscriptionUpdate = null, ?string $emailSubscriptionUpdate = null, ?array
    $statusesSubscriptionUpdate = null)
    {
        $this->checkout = $checkout;
        $this->name = $name;
        $this->description = $description;
        $this->dynamicDescriptor = $dynamicDescriptor;
        $this->amount = $amount;
        $this->interval = $interval;
        $this->intervalCount = $intervalCount;
        $this->maxBillingCycle = $maxBillingCycle;
        $this->webhookSubscriptionUpdate = $webhookSubscriptionUpdate;
        $this->emailSubscriptionUpdate = $emailSubscriptionUpdate;
        $this->statusesSubscriptionUpdate = $statusesSubscriptionUpdate;
    }
    public static function fromArray(array $data): self
    {
        return new Plan($data['checkout'], $data['name'], $data['description'], $data['dynamic_descriptor'], $data['amount'], $data['interval'], $data['interval_count'], $data['max_billing_cycle'], $data['webhook_subscription_update'], $data['email_subscription_update'], $data['statuses_subscription_update']);
    }
    public function toArray(): array
    {
        return [
            'checkout' => $this->checkout,
            'name' => $this->name,
            'description' => $this->description,
            'dynamic_descriptor' => $this->dynamicDescriptor,
            'amount' => $this->amount,
            'interval' => $this->interval,
            'interval_count' => $this->intervalCount,
            'max_billing_cycle' => $this->maxBillingCycle,
            'webhook_subscription_update' => $this->webhookSubscriptionUpdate,
            'email_subscription_update' => $this->emailSubscriptionUpdate,
            'statuses_subscription_update' => $this->statusesSubscriptionUpdate,
        ];
    }
}

