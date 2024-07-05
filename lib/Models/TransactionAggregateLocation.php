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
class TransactionAggregateLocation
{
    /**
     * @var string $location Location, either country code or city name
     */
    public ?string $location;
    /**
     * @var int $count The number of transactions
     */
    public ?int $count;
    /**
     * @var int $volume The total volume of the transactions
     */
    public ?int $volume;
    public function __construct(?string $location = null, ?int $count = null, ?int $volume = null)
    {
        $this->location = $location;
        $this->count = $count;
        $this->volume = $volume;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionAggregateLocation($data['location'], $data['count'], $data['volume']);
    }
    public function toArray(): array
    {
        return [
            'location' => $this->location,
            'count' => $this->count,
            'volume' => $this->volume,
        ];
    }
}

