<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 0.1.4
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
namespace MasspaySdk\Models;
class Country
{
    /**
     * @var string $code Country code [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
     */
    public string $code;
    /**
     * @var string $name Name of country
     */
    public string $name;
    /**
     * @var string $threeLetterCode The user's country code. ISO_3166-1_alpha-3 code
     */
    public string $threeLetterCode;
    public function __construct(string $code, string $name, string $threeLetterCode)
    {
        $this->code = $code;
        $this->name = $name;
        $this->threeLetterCode = $threeLetterCode;
    }
    public static function fromArray(array $data): self
    {
        return new Country($data['code'], $data['name'], $data['three_letter_code']);
    }
    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'three_letter_code' => $this->threeLetterCode,
        ];
    }
}

