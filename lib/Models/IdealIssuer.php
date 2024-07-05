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
class IdealIssuer
{
    /**
     * @var string $name Issuer name
     */
    public ?string $name;
    /**
     * @var string $issuer Issuer code
     */
    public ?string $issuer;
    public function __construct(?string $name = null, ?string $issuer = null)
    {
        $this->name = $name;
        $this->issuer = $issuer;
    }
    public static function fromArray(array $data): self
    {
        return new IdealIssuer($data['name'], $data['issuer']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'issuer' => $this->issuer,
        ];
    }
}

