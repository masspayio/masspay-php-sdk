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
/**
 * @name Whitelist
 * Whitelist
 */
class Whitelist
{
    /**
     * @var string $description Item description
     */
    public ?string $description;
    /**
     * @var string $ip Ip address
     */
    public ?string $ip;
    public function __construct(?string $description = null, ?string $ip = null)
    {
        $this->description = $description;
        $this->ip = $ip;
    }
    public static function fromArray(array $data): self
    {
        return new Whitelist($data['description'], $data['ip']);
    }
    public function toArray(): array
    {
        return [
            'description' => $this->description,
            'ip' => $this->ip,
        ];
    }
}

