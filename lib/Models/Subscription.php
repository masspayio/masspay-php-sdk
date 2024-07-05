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
 * @name Subscription
 * Subscription
 */
/**
 * Payment product string
 */
enum subscriptionPaymentProduct: string {
    case EMPTY = "";
    case CARD = "card";
    case PAYPAL = "paypal";
}
class Subscription
{
    /**
     * @var string $customer Reference to the customer this subscription belongs to
     */
    public ?string $customer;
    /**
     * @var string $card Reference to the card this subscription is linked to
     */
    public ?string $card;
    /**
     * @var string $dueDate The date by which customer has to pay the next bill
     */
    public ?string $dueDate;
    /**
     * @var int $maxBillingCycle The maximum number of billing cycles in the subscription
     */
    public ?int $maxBillingCycle;
    /**
     * @var subscriptionPaymentProduct $paymentProduct Payment product string
     */
    public ?subscriptionPaymentProduct $paymentProduct;
    public function __construct(?string $customer = null, ?string $card = null, ?string $dueDate = null, ?int $maxBillingCycle = null, ?subscriptionPaymentProduct $paymentProduct = null)
    {
        $this->customer = $customer;
        $this->card = $card;
        $this->dueDate = $dueDate;
        $this->maxBillingCycle = $maxBillingCycle;
        $this->paymentProduct = $paymentProduct;
    }
    public static function fromArray(array $data): self
    {
        return new Subscription($data['customer'], $data['card'], $data['due_date'], $data['max_billing_cycle'], $data['payment_product']);
    }
    public function toArray(): array
    {
        return [
            'customer' => $this->customer,
            'card' => $this->card,
            'due_date' => $this->dueDate,
            'max_billing_cycle' => $this->maxBillingCycle,
            'payment_product' => $this->paymentProduct,
        ];
    }
}

