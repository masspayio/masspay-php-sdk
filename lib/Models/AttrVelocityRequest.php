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
 * The type of attribute to look for
 */
enum attrVelocityRequestType: string {
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
class AttrVelocityRequest
{
    /**
     * @var attrVelocityRequestType $type The type of attribute to look for
     */
    public attrVelocityRequestType $type;
    /**
     * @var string $value The value to search for
     */
    public string $value;
    public function __construct(attrVelocityRequestType $type, string $value)
    {
        $this->type = $type;
        $this->value = $value;
    }
    public static function fromArray(array $data): self
    {
        return new AttrVelocityRequest($data['type'], $data['value']);
    }
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'value' => $this->value,
        ];
    }
}

