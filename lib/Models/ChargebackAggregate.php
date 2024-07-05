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
class ChargebackAggregate
{
    /**
     * @var string $period String that represents the period
     */
    public ?string $period;
    /**
     * @var string $year The year to which the result applies
     */
    public ?string $year;
    /**
     * @var string $count The number of chargebacks in a given period
     */
    public ?string $count;
    /**
     * @var string $amount The total amount of the chargebacks in a given period
     */
    public ?string $amount;
    public function __construct(?string $period = null, ?string $year = null, ?string $count = null, ?string $amount = null)
    {
        $this->period = $period;
        $this->year = $year;
        $this->count = $count;
        $this->amount = $amount;
    }
    public static function fromArray(array $data): self
    {
        return new ChargebackAggregate($data['period'], $data['year'], $data['count'], $data['amount']);
    }
    public function toArray(): array
    {
        return [
            'period' => $this->period,
            'year' => $this->year,
            'count' => $this->count,
            'amount' => $this->amount,
        ];
    }
}

