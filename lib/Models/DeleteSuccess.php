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
class DeleteSuccess
{
    /**
     * @var string $message Result message
     */
    public ?string $message;
    public function __construct(?string $message = null)
    {
        $this->message = $message;
    }
    public static function fromArray(array $data): self
    {
        return new DeleteSuccess($data['message']);
    }
    public function toArray(): array
    {
        return [
            'message' => $this->message,
        ];
    }
}

