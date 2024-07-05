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
class TransactionAggregateDay
{
    /**
     * @var string $date The date to which the count applies
     */
    public ?string $date;
    /**
     * @var int $year The year to which the count applies
     */
    public ?int $year;
    /**
     * @var int $month The month to which the count applies
     */
    public ?int $month;
    /**
     * @var int $day The day to which the count applies
     */
    public ?int $day;
    /**
     * @var int $count The number of transactions in a given period
     */
    public ?int $count;
    /**
     * @var int $amount The total volume of the transactions in a given period
     */
    public ?int $amount;
    public function __construct(?string $date = null, ?int $year = null, ?int $month = null, ?int $day = null, ?int $count = null, ?int $amount = null)
    {
        $this->date = $date;
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
        $this->count = $count;
        $this->amount = $amount;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionAggregateDay($data['date'], $data['year'], $data['month'], $data['day'], $data['count'], $data['amount']);
    }
    public function toArray(): array
    {
        return [
            'date' => $this->date,
            'year' => $this->year,
            'month' => $this->month,
            'day' => $this->day,
            'count' => $this->count,
            'amount' => $this->amount,
        ];
    }
}

