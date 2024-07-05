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
 * @name CardAddLink
 * CardAddLink
 */
class CardAddLink
{
    /**
     * @var string $organisation Reference to the organization this link belongs to
     */
    public ?string $organisation;
    /**
     * @var string $customer Reference to the customer this card add link belongs to
     */
    public ?string $customer;
    /**
     * @var string $checkout Reference to the checkout this card add link belongs to
     */
    public ?string $checkout;
    /**
     * @var string $paymentProfile If the card object should be stored with the processor too, this field is required
     */
    public ?string $paymentProfile;
    /**
     * @var string $dynamicDescriptor A short reference / descriptor that will show up on the card add link page
     */
    public ?string $dynamicDescriptor;
    /**
     * @var string $merchantReference A reference specified by the merchant to identify the transaction
     */
    public ?string $merchantReference;
    /**
     * @var string $redirectUrl The URL where the customer will be redirected once the card add completes, regardless of whether it succeeds or fails
     */
    public ?string $redirectUrl;
    /**
     * @var string $origin Origin (necessary when card add link will be in an iFrame)
    The fully qualified Origin of your application
     */
    public ?string $origin;
    /**
     * @var string $redirectParentFunction Redirect parent window function name(optional when card add link will be in an iFrame). Must be alphanumeric.
    This function will be called on the iFrame result page
     */
    public ?string $redirectParentFunction;
    /**
     * @var string $webhookCardLinkUpdate A webhook url that is called when a card add link is updated
     */
    public ?string $webhookCardLinkUpdate;
    /**
     * @var string $validUntil Card add link is valid until. Defaults to 24 hours
     */
    public ?string $validUntil;
    public function __construct(?string $organisation = null, ?string $customer = null, ?string $checkout = null, ?string $paymentProfile = null, ?string $dynamicDescriptor = null, ?string $merchantReference = null, ?string $redirectUrl = null, ?string $origin = null, ?string $redirectParentFunction = null, ?string $webhookCardLinkUpdate = null, ?string $validUntil = null)
    {
        $this->organisation = $organisation;
        $this->customer = $customer;
        $this->checkout = $checkout;
        $this->paymentProfile = $paymentProfile;
        $this->dynamicDescriptor = $dynamicDescriptor;
        $this->merchantReference = $merchantReference;
        $this->redirectUrl = $redirectUrl;
        $this->origin = $origin;
        $this->redirectParentFunction = $redirectParentFunction;
        $this->webhookCardLinkUpdate = $webhookCardLinkUpdate;
        $this->validUntil = $validUntil;
    }
    public static function fromArray(array $data): self
    {
        return new CardAddLink($data['organisation'], $data['customer'], $data['checkout'], $data['payment_profile'], $data['dynamic_descriptor'], $data['merchant_reference'], $data['redirect_url'], $data['origin'], $data['redirect_parent_function'], $data['webhook_card_link_update'], $data['valid_until']);
    }
    public function toArray(): array
    {
        return [
            'organisation' => $this->organisation,
            'customer' => $this->customer,
            'checkout' => $this->checkout,
            'payment_profile' => $this->paymentProfile,
            'dynamic_descriptor' => $this->dynamicDescriptor,
            'merchant_reference' => $this->merchantReference,
            'redirect_url' => $this->redirectUrl,
            'origin' => $this->origin,
            'redirect_parent_function' => $this->redirectParentFunction,
            'webhook_card_link_update' => $this->webhookCardLinkUpdate,
            'valid_until' => $this->validUntil,
        ];
    }
}

