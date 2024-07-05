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
 * @name Tag
 * Tag
 */
class Tag
{
    /**
     * @var string $text Tag description text
     */
    public ?string $text;
    /**
     * @var string $color Tag color
     */
    public ?string $color;
    public function __construct(?string $text = null, ?string $color = null)
    {
        $this->text = $text;
        $this->color = $color;
    }
    public static function fromArray(array $data): self
    {
        return new Tag($data['text'], $data['color']);
    }
    public function toArray(): array
    {
        return [
            'text' => $this->text,
            'color' => $this->color,
        ];
    }
}

