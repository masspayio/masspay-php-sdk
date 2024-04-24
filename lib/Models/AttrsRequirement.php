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
/**
 * The type of attribute
 */
enum attrsRequirementType: string {
    case CARD_NUMBER = "CardNumber";
    case BANK_ACCOUNT_TYPE = "BankAccountType";
    case BANK_ACCOUNT_NUMBER = "BankAccountNumber";
    case BANK_ACCOUNT_BRANCH_NUMBER = "BankAccountBranchNumber";
    case BANK_NAME = "BankName";
    case PHONE_NUMBER = "PhoneNumber";
    case GENDER = "Gender";
    case IDENTIFICATION_NUMBER = "IdentificationNumber";
    case BILL_REFERENCE_NUMBER = "BillReferenceNumber";
    case BANK_ROUTING_NUMBER = "BankRoutingNumber";
    case BANK_ACCOUNT_NAME = "BankAccountName";
    case MAIDEN_NAME = "MaidenName";
    case SOCIAL_SECURITY = "SocialSecurity";
    case EMPLOYMENT_NAME = "EmploymentName";
    case EMPLOYMENT_ADDRESS = "EmploymentAddress";
    case EMPLOYMENT_PHONE = "EmploymentPhone";
    case EMPLOYMENT_OCCUPATION = "EmploymentOccupation";
    case EMPLOYMENT_SUPERVISOR = "EmploymentSupervisor";
    case REMITTANCE_REASON = "RemittanceReason";
    case RELATIONSHIP = "Relationship";
    case SECOND_LAST_NAME = "SecondLastName";
    case SWIFT = "SWIFT";
    case BIRTH_COUNTRY = "BirthCountry";
    case SOURCE_OF_FUNDS = "SourceOfFunds";
    case DATE_OF_BIRTH = "DateOfBirth";
    case CARD_EXPIRATION = "CardExpiration";
    case CARD_ZIP = "CardZip";
    case IDENTIFICATION_TYPE = "IdentificationType";
    case BANK_CITY = "BankCity";
    case BANK_STATE = "BankState";
    case IDSELFIE_COLLECTION = "IDSelfieCollection";
    case CITY = "City";
    case COUNTRY = "Country";
    case IDENTIFICATION_EXPIRATION = "IdentificationExpiration";
    case ADDRESS1 = "Address1";
    case IFRAME_PAYMENT_COLLECTION = "IFramePaymentCollection";
    case POSTAL_CODE = "PostalCode";
}
/**
 * The type of input field that is suggested for this this attribute
 */
enum attrsRequirementInputType: string {
    case TEXT = "text";
    case OPTIONS = "options";
    case DATE = "date";
}
class AttrsRequirement
{
    /**
     * @var string $token The token that represents the attribute.
     */
    public string $token;
    /**
     * @var string $label The label that describes that required attribute
     */
    public string $label;
    /**
     * @var string $validation RegEx that validates that input
     */
    public string $validation;
    /**
     * @var bool $isOptional Flag to indicate whether this field is required or not
     */
    public bool $isOptional;
    /**
     * @var attrsRequirementType $type The type of attribute
     */
    public attrsRequirementType $type;
    /**
     * @var attrsRequirementInputType $inputType The type of input field that is suggested for this this attribute
     */
    public attrsRequirementInputType $inputType;
    /**
     * @var string $attrSetToken The token that represents the stored attributes for this payer. You would use this token in attr_set_token of `initiatePayout` if you have to specify an account number when paying a transaction out.
     */
    public ?string $attrSetToken;
    /**
     * @var string $value The existing value that is stored. 'Null' if no existing value is stored.
     */
    public ?string $value;
    /**
     * @var string $expectedValue Written explanation of the value that the regex validation requires
     */
    public ?string $expectedValue;
    /**
     * @var bool $lastAttrValueUsed If set to true, it means this was the last value that was used and if no attr_set_token is provided to init payout, this value will be used by default
     */
    public ?bool $lastAttrValueUsed;
    public function __construct(string $token, string $label, string $validation, bool $isOptional, attrsRequirementType $type, attrsRequirementInputType $inputType, ?string $attrSetToken = null, ?string $value = null, ?string $expectedValue = null, ?bool $lastAttrValueUsed = null)
    {
        $this->token = $token;
        $this->label = $label;
        $this->validation = $validation;
        $this->isOptional = $isOptional;
        $this->type = $type;
        $this->inputType = $inputType;
        $this->attrSetToken = $attrSetToken;
        $this->value = $value;
        $this->expectedValue = $expectedValue;
        $this->lastAttrValueUsed = $lastAttrValueUsed;
    }
    public static function fromArray(array $data): self
    {
        return new AttrsRequirement($data['token'], $data['label'], $data['validation'], $data['is_optional'], $data['type'], $data['input_type'], $data['attr_set_token'], $data['value'], $data['expected_value'], $data['last_attr_value_used']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'label' => $this->label,
            'validation' => $this->validation,
            'is_optional' => $this->isOptional,
            'type' => $this->type,
            'input_type' => $this->inputType,
            'attr_set_token' => $this->attrSetToken,
            'value' => $this->value,
            'expected_value' => $this->expectedValue,
            'last_attr_value_used' => $this->lastAttrValueUsed,
        ];
    }
}

