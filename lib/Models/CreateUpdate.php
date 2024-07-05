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
class CreateUpdate
{
    /**
     * @var string $createdAt The date and time when the object was first created
     */
    public ?string $createdAt;
    /**
     * @var string $updatedAt The date and time when the object was last updated
     */
    public ?string $updatedAt;
    public function __construct(?string $createdAt = null, ?string $updatedAt = null)
    {
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
    public static function fromArray(array $data): self
    {
        return new CreateUpdate($data['created_at'], $data['updated_at']);
    }
    public function toArray(): array
    {
        return [
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
        ];
    }
}

