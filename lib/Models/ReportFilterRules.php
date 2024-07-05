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
 * @name ReportFilterRules
 * Report - Filters - Rule
 */
/**
 * The rule key
 */
enum reportFilterRulesName: string {
    case AMOUNT = "amount";
    case BLOCKED = "blocked";
    case BROWSER = "browser";
    case BROWSER_VERSION = "browser_version";
    case CITY = "city";
    case COUNTRY_CODE = "country_code";
    case CREATED_AT = "created_at";
    case CUSTOMER_IP = "customer_ip";
    case CUSTOMER_STATUS_0 = "customer_status";
    case DYNAMIC_DESCRIPTOR = "dynamic_descriptor";
    case ID = "id";
    case LAST_STATUS_UPDATE = "last_status_update";
    case LATITUDE = "latitude";
    case LONGITUDE = "longitude";
    case MERCHANT_REFERENCE = "merchant_reference";
    case PAYMENT_PRODUCT = "payment_product";
    case PAYMENT_PRODUCT_TYPE = "payment_product_type";
    case PLATFORM = "platform";
    case RECURRING_TYPE = "recurring_type";
    case STATUS = "status";
    case STATUS_REASON = "status_reason";
    case TAGGED = "tagged";
    case USER_AGENT = "user_agent";
    case CUSTOMER_ID = "customer.id";
    case CUSTOMER_TITLE = "customer.title";
    case CUSTOMER_INITIALS = "customer.initials";
    case CUSTOMER_FIRST_NAME = "customer.first_name";
    case CUSTOMER_LAST_NAME = "customer.last_name";
    case CUSTOMER_DATE_OF_BIRTH = "customer.date_of_birth";
    case CUSTOMER_EMAIL_ADDRESS = "customer.email_address";
    case CUSTOMER_PHONE_NUMBER = "customer.phone_number";
    case CUSTOMER_FAX_NUMBER = "customer.fax_number";
    case CUSTOMER_STREET_ADDRESS = "customer.street_address";
    case CUSTOMER_HOUSE_NUMBER = "customer.house_number";
    case CUSTOMER_HOUSE_NUMBER_SUFFIX = "customer.house_number_suffix";
    case CUSTOMER_POSTAL_CODE = "customer.postal_code";
    case CUSTOMER_CITY = "customer.city";
    case CUSTOMER_REGION = "customer.region";
    case CUSTOMER_COUNTRY_CODE = "customer.country_code";
    case CUSTOMER_STATUS_1 = "customer.status";
    case CUSTOMER_STATUS_REASON = "customer.status_reason";
    case CUSTOMER_SEGMENT = "customer.segment";
    case CUSTOMER_CREATED_AT = "customer.created_at";
    case CUSTOMER_LAST_STATUS_UPDATE = "customer.last_status_update";
    case ORGANISATION_ID = "organisation.id";
    case ORGANISATION_COUNTRY_CODE = "organisation.country_code";
    case ORGANISATION_NAME = "organisation.name";
    case PAYMENT_PROFILE_ID = "payment_profile.id";
    case PAYMENT_PROFILE_CURRENCY_CODE = "payment_profile.currency_code";
    case PAYMENT_PROFILE_NAME = "payment_profile.name";
    case PAYMENT_PROFILE_DESCRIPTION = "payment_profile.description";
    case PAYMENT_PROFILE_WEBSITE = "payment_profile.website";
    case PROCESSOR_ID = "processor.id";
    case PROCESSOR_NAME = "processor.name";
    case PROCESSOR_GATEWAY = "processor.gateway";
    case TERMINAL_ID = "terminal.id";
    case TERMINAL_NAME = "terminal.name";
    case TERMINAL_PROVIDER_ID = "terminal.provider_id";
}
/**
 * The rule operator. Most keys only have the options "==" and "!==".
 *
 *
 * These rule keys can have all the operators mentioned:
 * amount, created_at, last_status_update, latitude, longitude,
 * customer.date_of_birth, customer.house_number, customer.created_at, customer.last_status_update
 */
enum reportFilterRulesOperator: string {
    case EQUALS = "==";
    case NOT_EQUALS = "!=";
    case GREATER_THAN = ">";
    case LESS_THAN = "<";
    case GREATER_THAN_OR_EQUALS = ">=";
    case LESS_THAN_OR_EQUALS = "<=";
}
class ReportFilterRules
{
    /**
     * @var reportFilterRulesName $name The rule key
     */
    public reportFilterRulesName $name;
    /**
     * @var reportFilterRulesOperator $operator The rule operator. Most keys only have the options "==" and "!==".
    These rule keys can have all the operators mentioned:
    amount, created_at, last_status_update, latitude, longitude,
    customer.date_of_birth, customer.house_number, customer.created_at, customer.last_status_update
     */
    public reportFilterRulesOperator $operator;
    /**
     * @var string $value The rule value
     */
    public string $value;
    public function __construct(reportFilterRulesName $name, reportFilterRulesOperator $operator, string $value)
    {
        $this->name = $name;
        $this->operator = $operator;
        $this->value = $value;
    }
    public static function fromArray(array $data): self
    {
        return new ReportFilterRules($data['name'], $data['operator'], $data['value']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'operator' => $this->operator,
            'value' => $this->value,
        ];
    }
}

