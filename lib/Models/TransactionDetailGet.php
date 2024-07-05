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
class TransactionDetailGet
{
    /**
     * @var string $redirectUrl The return url to which the customer is redirected after an approval
     */
    public ?string $redirectUrl;
    /**
     * @var string $approvalUrl The url the customer needs to be redirected to
     */
    public ?string $approvalUrl;
    /**
     * @var bool $cvvPresent CVV Present
     */
    public ?bool $cvvPresent;
    /**
     * @var bool $threedEnrolled 3D Secure Enrolled
     */
    public ?bool $threedEnrolled;
    /**
     * @var bool $threedAuthenticated 3D Secure Authenticated
     */
    public ?bool $threedAuthenticated;
    /**
     * @var string $threedEci 3D Secure ECI code
     */
    public ?string $threedEci;
    /**
     * @var array $sender
     */
    public ?array $sender;
    /**
     * @var string $issuer Ideal issuer
     */
    public ?string $issuer;
    /**
     * @var array $bancontact
     */
    public ?array $bancontact;
    /**
     * @var string $description Paypal description
     */
    public ?string $description;
    /**
     * @var array $fraud
     */
    public ?array $fraud;
    /**
     * @var array $mdr
     */
    public ?array $mdr;
    /**
     * @var array $discount
     */
    public ?array $discount;
    /**
     * @var array $merchantData Additional merchant data as key value pair
     */
    public ?array $merchantData;
    public function __construct(?string $redirectUrl = null, ?string $approvalUrl = null, ?bool $cvvPresent = null, ?bool $threedEnrolled = null, ?bool $threedAuthenticated = null, ?string $threedEci = null, ?array $sender = null, ?string $issuer = null, ?array $bancontact = null, ?string $description = null, ?array $fraud = null, ?array $mdr = null, ?array $discount = null, ?array $merchantData = null)
    {
        $this->redirectUrl = $redirectUrl;
        $this->approvalUrl = $approvalUrl;
        $this->cvvPresent = $cvvPresent;
        $this->threedEnrolled = $threedEnrolled;
        $this->threedAuthenticated = $threedAuthenticated;
        $this->threedEci = $threedEci;
        $this->sender = $sender;
        $this->issuer = $issuer;
        $this->bancontact = $bancontact;
        $this->description = $description;
        $this->fraud = $fraud;
        $this->mdr = $mdr;
        $this->discount = $discount;
        $this->merchantData = $merchantData;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailGet($data['redirect_url'], $data['approval_url'], $data['cvv_present'], $data['threed_enrolled'], $data['threed_authenticated'], $data['threed_eci'], $data['sender'], $data['issuer'], $data['bancontact'], $data['description'], $data['fraud'], $data['mdr'], $data['discount'], $data['merchant_data']);
    }
    public function toArray(): array
    {
        return [
            'redirect_url' => $this->redirectUrl,
            'approval_url' => $this->approvalUrl,
            'cvv_present' => $this->cvvPresent,
            'threed_enrolled' => $this->threedEnrolled,
            'threed_authenticated' => $this->threedAuthenticated,
            'threed_eci' => $this->threedEci,
            'sender' => $this->sender,
            'issuer' => $this->issuer,
            'bancontact' => $this->bancontact,
            'description' => $this->description,
            'fraud' => $this->fraud,
            'mdr' => $this->mdr,
            'discount' => $this->discount,
            'merchant_data' => $this->merchantData,
        ];
    }
}

