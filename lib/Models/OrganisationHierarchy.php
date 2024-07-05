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
class OrganisationHierarchy
{
    /**
     * @var string $parent An organisation id representing the parent of this organisation
     */
    public ?string $parent;
    /**
     * @var string $id Id
     */
    public ?string $id;
    /**
     * @var string $name The name of the organisation
     */
    public ?string $name;
    /**
     * @var OrganisationHierarchy $children Child organisation(s)
     */
    public ?array
    $children;
    public function __construct(?string $parent = null, ?string $id = null, ?string $name = null, ?array
    $children = null)
    {
        $this->parent = $parent;
        $this->id = $id;
        $this->name = $name;
        $this->children = $children;
    }
    public static function fromArray(array $data): self
    {
        return new OrganisationHierarchy($data['parent'], $data['id'], $data['name'], $data['children']);
    }
    public function toArray(): array
    {
        return [
            'parent' => $this->parent,
            'id' => $this->id,
            'name' => $this->name,
            'children' => $this->children,
        ];
    }
}

