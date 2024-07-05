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
class Roles
{
    /**
     * @var string[] $roles Array of roles
     */
    public ?array
    $roles;
    public function __construct(?array
    $roles = null)
    {
        $this->roles = $roles;
    }
    public static function fromArray(array $data): self
    {
        return new Roles($data['roles']);
    }
    public function toArray(): array
    {
        return [
            'roles' => $this->roles,
        ];
    }
}

