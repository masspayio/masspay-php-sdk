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
class Company
{
    /**
     * @var string $companyLogo base64 representation of the company logo
     */
    public string $companyLogo;
    /**
     * @var Service $services
     */
    public array
    $services;
    /**
     * @var int $rating Overall rating of provider calculated from feedback provided by users from previous trasnactions
     */
    public int $rating;
    /**
     * @var string $description A short description of the company
     */
    public string $description;
    /**
     * @var string $companyName The company name
     */
    public string $companyName;
    public function __construct(string $companyLogo, array
    $services, int $rating, string $description, string $companyName)
    {
        $this->companyLogo = $companyLogo;
        $this->services = $services;
        $this->rating = $rating;
        $this->description = $description;
        $this->companyName = $companyName;
    }
    public static function fromArray(array $data): self
    {
        return new Company($data['company_logo'], $data['services'], $data['rating'], $data['description'], $data['company_name']);
    }
    public function toArray(): array
    {
        return [
            'company_logo' => $this->companyLogo,
            'services' => $this->services,
            'rating' => $this->rating,
            'description' => $this->description,
            'company_name' => $this->companyName,
        ];
    }
}

