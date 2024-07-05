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
class ApiResponse
{
    /**
     * @var int $code
     */
    public ?int $code;
    /**
     * @var string $type
     */
    public ?string $type;
    /**
     * @var string $message
     */
    public ?string $message;
    public function __construct(?int $code = null, ?string $type = null, ?string $message = null)
    {
        $this->code = $code;
        $this->type = $type;
        $this->message = $message;
    }
    public static function fromArray(array $data): self
    {
        return new ApiResponse($data['code'], $data['type'], $data['message']);
    }
    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'type' => $this->type,
            'message' => $this->message,
        ];
    }
}

