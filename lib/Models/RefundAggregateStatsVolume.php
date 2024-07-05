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
class RefundAggregateStatsVolume
{
    /**
     * @var array $browsers Key value pairs of browser statistics
     */
    public ?array $browsers;
    /**
     * @var array $dayOfWeek Key value pairs of day of the week statistics
     */
    public ?array $dayOfWeek;
    /**
     * @var int[] $timeOfDay Array of amount per hour
     */
    public ?array
    $timeOfDay;
    /**
     * @var array $platform Key value pairs of platform statistics
     */
    public ?array $platform;
    /**
     * @var array $issuers Key value pairs of issuer statistics
     */
    public ?array $issuers;
    /**
     * @var array $paymentSchemes Key value pairs of payment scheme statistics
     */
    public ?array $paymentSchemes;
    /**
     * @var array $transactionOutcomes Key value pairs of transaction outcome statistics
     */
    public ?array $transactionOutcomes;
    public function __construct(?array $browsers = null, ?array $dayOfWeek = null, ?array
    $timeOfDay = null, ?array $platform = null, ?array $issuers = null, ?array $paymentSchemes = null, ?array $transactionOutcomes = null)
    {
        $this->browsers = $browsers;
        $this->dayOfWeek = $dayOfWeek;
        $this->timeOfDay = $timeOfDay;
        $this->platform = $platform;
        $this->issuers = $issuers;
        $this->paymentSchemes = $paymentSchemes;
        $this->transactionOutcomes = $transactionOutcomes;
    }
    public static function fromArray(array $data): self
    {
        return new RefundAggregateStatsVolume($data['browsers'], $data['dayOfWeek'], $data['timeOfDay'], $data['platform'], $data['issuers'], $data['paymentSchemes'], $data['transactionOutcomes']);
    }
    public function toArray(): array
    {
        return [
            'browsers' => $this->browsers,
            'dayOfWeek' => $this->dayOfWeek,
            'timeOfDay' => $this->timeOfDay,
            'platform' => $this->platform,
            'issuers' => $this->issuers,
            'paymentSchemes' => $this->paymentSchemes,
            'transactionOutcomes' => $this->transactionOutcomes,
        ];
    }
}

