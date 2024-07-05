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
 * @name TransactionDetailDefault
 * Transaction - Details - Default
 */
class TransactionDetailDefault
{
    /**
     * @var string $redirectUrl The URL where the customer will be redirected once the transaction completes, regardless of whether it succeeds or fails
     */
    public string $redirectUrl;
    /**
     * @var string $checkoutId Optional reference to a checkout object
     */
    public ?string $checkoutId;
    /**
     * @var array $merchantData Additional merchant metadata. Key-value pairs with a maximum of 1024 characters
     */
    public ?array $merchantData;
    public function __construct(string $redirectUrl, ?string $checkoutId = null, ?array $merchantData = null)
    {
        $this->redirectUrl = $redirectUrl;
        $this->checkoutId = $checkoutId;
        $this->merchantData = $merchantData;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailDefault($data['redirect_url'], $data['checkout_id'], $data['merchant_data']);
    }
    public function toArray(): array
    {
        return [
            'redirect_url' => $this->redirectUrl,
            'checkout_id' => $this->checkoutId,
            'merchant_data' => $this->merchantData,
        ];
    }
}

