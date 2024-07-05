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
class CustomerAggregateBest
{
    /**
     * @var array $count
     */
    public ?array $count;
    /**
     * @var array $volume
     */
    public ?array $volume;
    public function __construct(?array $count = null, ?array $volume = null)
    {
        $this->count = $count;
        $this->volume = $volume;
    }
    public static function fromArray(array $data): self
    {
        return new CustomerAggregateBest($data['count'], $data['volume']);
    }
    public function toArray(): array
    {
        return [
            'count' => $this->count,
            'volume' => $this->volume,
        ];
    }
}

