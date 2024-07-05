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
 * @name Card0
 * Card
 */
class Card0
{
    /**
     * @var string $expiryMonth Card expiry month. A number from 1 to 12
     */
    public ?string $expiryMonth;
    /**
     * @var string $expiryYear Card expiry year
     */
    public ?string $expiryYear;
    /**
     * @var string $holderName The name of the cardholder
     */
    public ?string $holderName;
    public function __construct(?string $expiryMonth = null, ?string $expiryYear = null, ?string $holderName = null)
    {
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->holderName = $holderName;
    }
    public static function fromArray(array $data): self
    {
        return new Card0($data['expiry_month'], $data['expiry_year'], $data['holder_name']);
    }
    public function toArray(): array
    {
        return [
            'expiry_month' => $this->expiryMonth,
            'expiry_year' => $this->expiryYear,
            'holder_name' => $this->holderName,
        ];
    }
}

