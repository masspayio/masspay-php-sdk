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
class CustomerAggregate
{
    /**
     * @var string $period String that represents the period
     */
    public ?string $period;
    /**
     * @var int $year The year to which the result applies
     */
    public ?int $year;
    /**
     * @var int $count The number of customers in a given period
     */
    public ?int $count;
    public function __construct(?string $period = null, ?int $year = null, ?int $count = null)
    {
        $this->period = $period;
        $this->year = $year;
        $this->count = $count;
    }
    public static function fromArray(array $data): self
    {
        return new CustomerAggregate($data['period'], $data['year'], $data['count']);
    }
    public function toArray(): array
    {
        return [
            'period' => $this->period,
            'year' => $this->year,
            'count' => $this->count,
        ];
    }
}

