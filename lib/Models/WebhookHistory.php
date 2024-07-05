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
class WebhookHistory
{
    /**
     * @var string $createdAt Created at
     */
    public ?string $createdAt;
    /**
     * @var int $statusCode Response code when trygin to complete the webhook
     */
    public ?int $statusCode;
    /**
     * @var string $content Response content. Maximum of 255 characters
     */
    public ?string $content;
    public function __construct(?string $createdAt = null, ?int $statusCode = null, ?string $content = null)
    {
        $this->createdAt = $createdAt;
        $this->statusCode = $statusCode;
        $this->content = $content;
    }
    public static function fromArray(array $data): self
    {
        return new WebhookHistory($data['created_at'], $data['status_code'], $data['content']);
    }
    public function toArray(): array
    {
        return [
            'created_at' => $this->createdAt,
            'status_code' => $this->statusCode,
            'content' => $this->content,
        ];
    }
}

