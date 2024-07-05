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
 * @name Role
 * Role
 */
class Role
{
    /**
     * @var string $name Name of the role
     */
    public ?string $name;
    /**
     * @var string $category Roles are grouped in role categories
     */
    public ?string $category;
    /**
     * @var string $description Description of the role
     */
    public ?string $description;
    /**
     * @var bool $psp True if the role is a psp rule
     */
    public ?bool $psp;
    public function __construct(?string $name = null, ?string $category = null, ?string $description = null, ?bool $psp = null)
    {
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->psp = $psp;
    }
    public static function fromArray(array $data): self
    {
        return new Role($data['name'], $data['category'], $data['description'], $data['psp']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'category' => $this->category,
            'description' => $this->description,
            'psp' => $this->psp,
        ];
    }
}

