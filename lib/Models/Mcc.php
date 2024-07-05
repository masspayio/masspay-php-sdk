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
 * @name Mcc
 * Merchant category code
 */
class Mcc
{
    /**
     * @var string $number Merchant category code
     */
    public ?string $number;
    /**
     * @var string $title MCC title
     */
    public ?string $title;
    /**
     * @var string $description Description of the MCC
     */
    public ?string $description;
    /**
     * @var string $includes Groups included in this MCC
     */
    public ?string $includes;
    /**
     * @var string $similar Similar to this MCC
     */
    public ?string $similar;
    public function __construct(?string $number = null, ?string $title = null, ?string $description = null, ?string $includes = null, ?string $similar = null)
    {
        $this->number = $number;
        $this->title = $title;
        $this->description = $description;
        $this->includes = $includes;
        $this->similar = $similar;
    }
    public static function fromArray(array $data): self
    {
        return new Mcc($data['number'], $data['title'], $data['description'], $data['includes'], $data['similar']);
    }
    public function toArray(): array
    {
        return [
            'number' => $this->number,
            'title' => $this->title,
            'description' => $this->description,
            'includes' => $this->includes,
            'similar' => $this->similar,
        ];
    }
}

