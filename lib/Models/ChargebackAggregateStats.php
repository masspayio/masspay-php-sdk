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
class ChargebackAggregateStats
{
    /**
     * @var array $count
     */
    public ?array $count;
    /**
     * @var array $amount
     */
    public ?array $amount;
    public function __construct(?array $count = null, ?array $amount = null)
    {
        $this->count = $count;
        $this->amount = $amount;
    }
    public static function fromArray(array $data): self
    {
        return new ChargebackAggregateStats($data['count'], $data['amount']);
    }
    public function toArray(): array
    {
        return [
            'count' => $this->count,
            'amount' => $this->amount,
        ];
    }
}

