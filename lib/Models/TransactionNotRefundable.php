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
class TransactionNotRefundable
{
    /**
     * @var int $code 3-digit error identifier
     */
    public ?int $code;
    /**
     * @var string $message A description of the error
     */
    public ?string $message;
    /**
     * @var array $details
     */
    public ?array $details;
    /**
     * @var int $timestamp The time when the error occurred
     */
    public ?int $timestamp;
    public function __construct(?int $code = null, ?string $message = null, ?array $details = null, ?int $timestamp = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->details = $details;
        $this->timestamp = $timestamp;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionNotRefundable($data['code'], $data['message'], $data['details'], $data['timestamp']);
    }
    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'message' => $this->message,
            'details' => $this->details,
            'timestamp' => $this->timestamp,
        ];
    }
}

