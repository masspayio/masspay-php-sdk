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
class CustomerAggregateStatsCount
{
    /**
     * @var array $age Key value pairs of age statistics
     */
    public ?array $age;
    /**
     * @var array $gender Key value pairs of gender statistics
     */
    public ?array $gender;
    /**
     * @var array $status Key value pairs of status statistics
     */
    public ?array $status;
    public function __construct(?array $age = null, ?array $gender = null, ?array $status = null)
    {
        $this->age = $age;
        $this->gender = $gender;
        $this->status = $status;
    }
    public static function fromArray(array $data): self
    {
        return new CustomerAggregateStatsCount($data['age'], $data['gender'], $data['status']);
    }
    public function toArray(): array
    {
        return [
            'age' => $this->age,
            'gender' => $this->gender,
            'status' => $this->status,
        ];
    }
}

