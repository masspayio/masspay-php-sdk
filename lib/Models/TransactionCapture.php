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
class TransactionCapture
{
    /**
     * @var int $amount Amount is charged without a decimal place. Currencies can have different decimals/exponentials.
     */
    public int $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionCapture($data['amount']);
    }
    public function toArray(): array
    {
        return [
            'amount' => $this->amount,
        ];
    }
}

