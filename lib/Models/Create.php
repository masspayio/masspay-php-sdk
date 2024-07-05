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
class Create
{
    /**
     * @var string $createdAt The date and time when the object was first created
     */
    public ?string $createdAt;
    public function __construct(?string $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }
    public static function fromArray(array $data): self
    {
        return new Create($data['created_at']);
    }
    public function toArray(): array
    {
        return [
            'created_at' => $this->createdAt,
        ];
    }
}

