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
 * @name OrganisationContact
 * OrganisationContact
 */
class OrganisationContact
{
    /**
     * @var string $firstName The first name(s) of the contact, 100 characters or less
     */
    public ?string $firstName;
    /**
     * @var string $lastName The last name(s) of the contact, 100 characters or less
     */
    public ?string $lastName;
    /**
     * @var string $dateOfBirth The date of birth of a person, 10 characters, ISO-8601 (YYYY-MM-DD)
     */
    public ?string $dateOfBirth;
    /**
     * @var string $countryOfBirth A 2-letter ISO3166 alpha-2. Country code for country of birth
     */
    public ?string $countryOfBirth;
    /**
     * @var string $countryNationality A 2-letter ISO3166 alpha-2. Country code for nationality
     */
    public ?string $countryNationality;
    /**
     * @var string $countryResidence A 2-letter ISO3166 alpha-2. Country code for country of residence
     */
    public ?string $countryResidence;
    /**
     * @var bool $publicFunction Contact has public function
     */
    public ?bool $publicFunction;
    /**
     * @var bool $ubo Contact is ultimate beneficial owner (UBO)
     */
    public ?bool $ubo;
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $dateOfBirth = null, ?string $countryOfBirth = null, ?string $countryNationality = null, ?string $countryResidence = null, ?bool $publicFunction = null, ?bool $ubo = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->countryOfBirth = $countryOfBirth;
        $this->countryNationality = $countryNationality;
        $this->countryResidence = $countryResidence;
        $this->publicFunction = $publicFunction;
        $this->ubo = $ubo;
    }
    public static function fromArray(array $data): self
    {
        return new OrganisationContact($data['first_name'], $data['last_name'], $data['date_of_birth'], $data['country_of_birth'], $data['country_nationality'], $data['country_residence'], $data['public_function'], $data['ubo']);
    }
    public function toArray(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'date_of_birth' => $this->dateOfBirth,
            'country_of_birth' => $this->countryOfBirth,
            'country_nationality' => $this->countryNationality,
            'country_residence' => $this->countryResidence,
            'public_function' => $this->publicFunction,
            'ubo' => $this->ubo,
        ];
    }
}

