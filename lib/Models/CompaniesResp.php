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
class CompaniesResp
{
    /**
     * @var Company $companies
     */
    public array
    $companies;
    public function __construct(array
    $companies)
    {
        $this->companies = $companies;
    }
    public static function fromArray(array $data): self
    {
        return new CompaniesResp($data['companies']);
    }
    public function toArray(): array
    {
        return [
            'companies' => $this->companies,
        ];
    }
}

