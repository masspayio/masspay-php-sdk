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
 * @name SubscriptionDiscountAttached
 * SubscriptionDiscountAttached
 */
class SubscriptionDiscountAttached
{
    /**
     * @var bool $active Is a subscription discount active, will be applied to a subscription
     */
    public ?bool $active;
    public function __construct(?bool $active = null)
    {
        $this->active = $active;
    }
    public static function fromArray(array $data): self
    {
        return new SubscriptionDiscountAttached($data['active']);
    }
    public function toArray(): array
    {
        return [
            'active' => $this->active,
        ];
    }
}

