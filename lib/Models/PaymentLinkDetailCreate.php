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
 * @name PaymentLinkDetailCreate
 * Payment Link - Details
 */
class PaymentLinkDetailCreate
{
    /**
     * @var string $checkoutId Id of checkout item
     */
    public ?string $checkoutId;
    /**
     * @var bool $changeAmount Allow the customer to change the amount
     */
    public ?bool $changeAmount;
    /**
     * @var int $changeAmountMin Minimum allowed amount.
     */
    public ?int $changeAmountMin;
    /**
     * @var int $changeAmountMax Maximum allowed amount.
     */
    public ?int $changeAmountMax;
    public function __construct(?string $checkoutId = null, ?bool $changeAmount = null, ?int $changeAmountMin = null, ?int $changeAmountMax = null)
    {
        $this->checkoutId = $checkoutId;
        $this->changeAmount = $changeAmount;
        $this->changeAmountMin = $changeAmountMin;
        $this->changeAmountMax = $changeAmountMax;
    }
    public static function fromArray(array $data): self
    {
        return new PaymentLinkDetailCreate($data['checkout_id'], $data['change_amount'], $data['change_amount_min'], $data['change_amount_max']);
    }
    public function toArray(): array
    {
        return [
            'checkout_id' => $this->checkoutId,
            'change_amount' => $this->changeAmount,
            'change_amount_min' => $this->changeAmountMin,
            'change_amount_max' => $this->changeAmountMax,
        ];
    }
}

