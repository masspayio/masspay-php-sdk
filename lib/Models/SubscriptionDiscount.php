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
 * @name SubscriptionDiscount
 * SubscriptionDiscount
 */
/**
 * Discount type
 */
enum subscriptionDiscountType: string {
    case PERCENTAGE = "percentage";
    case FIXED_CENTS = "fixed_cents";
}
class SubscriptionDiscount
{
    /**
     * @var int $amount Amount <table> <tr><td>fixed_cents</td><td>amount in cents without a decimal place</td></tr> <tr><td>percentage</td><td>the range is 0.0 - 1.0. So 1.0 equals 100%</td></tr> </table>
     */
    public ?int $amount;
    /**
     * @var subscriptionDiscountType $type Discount type
     */
    public ?subscriptionDiscountType $type;
    /**
     * @var string $name Discount name
     */
    public ?string $name;
    /**
     * @var int $minimumAmount Minimum amount If set, the discount can only be applied to a subscription of a certain amount. Amount in cents without a decimal place.
     */
    public ?int $minimumAmount;
    /**
     * @var int $duration Duration If set it will be applied to this number of cycles. If not set it will be applied infinitely.
     */
    public ?int $duration;
    /**
     * @var bool $limitToFirstOrder Limit to first time order If true this discount can only be added to a subscription before the first payment has been executed.
     */
    public ?bool $limitToFirstOrder;
    public function __construct(?int $amount = null, ?subscriptionDiscountType $type = null, ?string $name = null, ?int $minimumAmount = null, ?int $duration = null, ?bool $limitToFirstOrder = null)
    {
        $this->amount = $amount;
        $this->type = $type;
        $this->name = $name;
        $this->minimumAmount = $minimumAmount;
        $this->duration = $duration;
        $this->limitToFirstOrder = $limitToFirstOrder;
    }
    public static function fromArray(array $data): self
    {
        return new SubscriptionDiscount($data['amount'], $data['type'], $data['name'], $data['minimum_amount'], $data['duration'], $data['limit_to_first_order']);
    }
    public function toArray(): array
    {
        return [
            'amount' => $this->amount,
            'type' => $this->type,
            'name' => $this->name,
            'minimum_amount' => $this->minimumAmount,
            'duration' => $this->duration,
            'limit_to_first_order' => $this->limitToFirstOrder,
        ];
    }
}

