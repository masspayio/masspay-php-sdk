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
class CreateUpdateStatus
{
    /**
     * @var string $createdAt The date and time when the object was first created
     */
    public ?string $createdAt;
    /**
     * @var string $updatedAt The date and time when the object was last updated
     */
    public ?string $updatedAt;
    /**
     * @var string $lastStatusUpdate The date and time when the object last changed status
     */
    public ?string $lastStatusUpdate;
    public function __construct(?string $createdAt = null, ?string $updatedAt = null, ?string $lastStatusUpdate = null)
    {
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->lastStatusUpdate = $lastStatusUpdate;
    }
    public static function fromArray(array $data): self
    {
        return new CreateUpdateStatus($data['created_at'], $data['updated_at'], $data['last_status_update']);
    }
    public function toArray(): array
    {
        return [
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'last_status_update' => $this->lastStatusUpdate,
        ];
    }
}

