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
 * Legal structure of the corporation
 */
enum createSubaccountTxnLegalStructure: string {
    case CCORP = "Ccorp";
    case LLC = "LLC";
    case PARTNERSHIP = "Partnership";
    case NONPROFIT = "Nonprofit";
    case SCORP = "Scorp";
    case SOLEPROP = "Soleprop";
    case OTHER = "Other";
}
/**
 * What industry does the corporation operate in
 */
enum createSubaccountTxnIndustry: string {
    case MLM = "MLM";
    case CRYPTO = "Crypto";
    case ADULT = "Adult";
    case GENERAL = "General";
}
class CreateSubaccountTxn
{
    /**
     * @var string $companyName Legal name of the corporation
     */
    public string $companyName;
    /**
     * @var string $phone Corporate phone number
     */
    public string $phone;
    /**
     * @var string $incDate Incorporation date
     */
    public string $incDate;
    /**
     * @var string $registrationNumber Corporate registration number. In the U.S, EIN
     */
    public string $registrationNumber;
    /**
     * @var string $website Website the corporation conducts business under
     */
    public string $website;
    /**
     * @var createSubaccountTxnLegalStructure $legalStructure Legal structure of the corporation
     */
    public createSubaccountTxnLegalStructure $legalStructure;
    /**
     * @var string $address1 Business mailing address
     */
    public string $address1;
    /**
     * @var string $state State
     */
    public string $state;
    /**
     * @var string $city City
     */
    public string $city;
    /**
     * @var string $zip Postal code
     */
    public string $zip;
    /**
     * @var string $country 3 letters ISO country code
     */
    public string $country;
    /**
     * @var createSubaccountTxnIndustry $industry What industry does the corporation operate in
     */
    public createSubaccountTxnIndustry $industry;
    /**
     * @var string $companyDba Name the corporation conducts a business under or DBA
     */
    public ?string $companyDba;
    /**
     * @var string $naics NAICS code
     */
    public ?string $naics;
    /**
     * @var int $minPayeeAge What is the minimum allowed age for payees under this organization. Default value is 18
     */
    public ?int $minPayeeAge;
    /**
     * @var string $address2 Business mailing address #2
     */
    public ?string $address2;
    /**
     * @var array $signer Signer on the account
     */
    public ?array $signer;
    public function __construct(string $companyName, string $phone, string $incDate, string $registrationNumber, string $website, createSubaccountTxnLegalStructure $legalStructure, string $address1, string $state, string $city, string $zip, string $country, createSubaccountTxnIndustry $industry, ?string $companyDba = null, ?string $naics = null, ?int $minPayeeAge = null, ?string $address2 = null, ?array $signer = null)
    {
        $this->companyName = $companyName;
        $this->phone = $phone;
        $this->incDate = $incDate;
        $this->registrationNumber = $registrationNumber;
        $this->website = $website;
        $this->legalStructure = $legalStructure;
        $this->address1 = $address1;
        $this->state = $state;
        $this->city = $city;
        $this->zip = $zip;
        $this->country = $country;
        $this->industry = $industry;
        $this->companyDba = $companyDba;
        $this->naics = $naics;
        $this->minPayeeAge = $minPayeeAge;
        $this->address2 = $address2;
        $this->signer = $signer;
    }
    public static function fromArray(array $data): self
    {
        return new CreateSubaccountTxn($data['company_name'], $data['phone'], $data['inc_date'], $data['registration_number'], $data['website'], $data['legal_structure'], $data['address1'], $data['state'], $data['city'], $data['zip'], $data['country'], $data['industry'], $data['company_dba'], $data['naics'], $data['min_payee_age'], $data['address2'], $data['signer']);
    }
    public function toArray(): array
    {
        return [
            'company_name' => $this->companyName,
            'phone' => $this->phone,
            'inc_date' => $this->incDate,
            'registration_number' => $this->registrationNumber,
            'website' => $this->website,
            'legal_structure' => $this->legalStructure,
            'address1' => $this->address1,
            'state' => $this->state,
            'city' => $this->city,
            'zip' => $this->zip,
            'country' => $this->country,
            'industry' => $this->industry,
            'company_dba' => $this->companyDba,
            'naics' => $this->naics,
            'min_payee_age' => $this->minPayeeAge,
            'address2' => $this->address2,
            'signer' => $this->signer,
        ];
    }
}

