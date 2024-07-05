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
class CustomerAggregateBestDetails
{
    /**
     * @var array $customer
     */
    public ?array $customer;
    /**
     * @var int $count Customer transaction count
     */
    public ?int $count;
    /**
     * @var int $volume Customer transaction volume
     */
    public ?int $volume;
    public function __construct(?array $customer = null, ?int $count = null, ?int $volume = null)
    {
        $this->customer = $customer;
        $this->count = $count;
        $this->volume = $volume;
    }
    public static function fromArray(array $data): self
    {
        return new CustomerAggregateBestDetails($data['customer'], $data['count'], $data['volume']);
    }
    public function toArray(): array
    {
        return [
            'customer' => $this->customer,
            'count' => $this->count,
            'volume' => $this->volume,
        ];
    }
}

