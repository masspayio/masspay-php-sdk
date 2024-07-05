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
 * @name ValidationRulesetRule
 * ValidationRulesetRule
 */
/**
 * The rule key
 */
enum validationRulesetRuleName: string {
    case PAYMENT_PROFILE = "payment_profile";
    case AMOUNT = "amount";
    case CARD = "card";
    case COUNTRY_CODE = "country_code";
    case CURRENCY_CODE = "currency_code";
    case CUSTOMER = "customer";
    case CUSTOMER_STATUS = "customer_status";
    case CUSTOMER_IP = "customer_ip";
    case MCC = "mcc";
    case ORGANISATION = "organisation";
    case PAYMENT_PRODUCT_TYPE = "payment_product_type";
}
/**
 * The rule operator
 */
enum validationRulesetRuleOperator: string {
    case EQUALS = "==";
    case NOT_EQUALS = "!=";
    case GREATER_THAN = ">";
    case LESS_THAN = "<";
    case GREATER_THAN_OR_EQUALS = ">=";
    case LESS_THAN_OR_EQUALS = "<=";
    case IN = "IN";
    case NOT_IN = "NOT_IN";
}
class ValidationRulesetRule
{
    /**
     * @var validationRulesetRuleName $name The rule key
     */
    public validationRulesetRuleName $name;
    /**
     * @var validationRulesetRuleOperator $operator The rule operator
     */
    public validationRulesetRuleOperator $operator;
    /**
     * @var string $value The rule value. Type has to be array when the operator is IN or NOT_IN
     */
    public string $value;
    public function __construct(validationRulesetRuleName $name, validationRulesetRuleOperator $operator, string $value)
    {
        $this->name = $name;
        $this->operator = $operator;
        $this->value = $value;
    }
    public static function fromArray(array $data): self
    {
        return new ValidationRulesetRule($data['name'], $data['operator'], $data['value']);
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

