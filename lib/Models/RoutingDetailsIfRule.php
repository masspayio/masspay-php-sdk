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
 * @name RoutingDetailsIfRule
 * Routing - Details - If - Rule
 */
/**
 * The rule key
 */
enum routingDetailsIfRuleName: string {
    case _3DS = "3ds";
    case AMOUNT = "amount";
    case CARD = "card";
    case CARD_BRAND = "card_brand";
    case CARD_BIN = "card_bin";
    case COUNTRY_CODE = "country_code";
    case CURRENCY_CODE = "currency_code";
    case CUSTOMER = "customer";
    case CUSTOMER_STATUS = "customer_status";
    case MCC = "mcc";
    case RANDOM = "random";
    case RECURRING = "recurring";
}
/**
 * The rule operator. Most keys only have the options "==" and "!==".
 *
 * These rule keys can have all the operators mentioned:
 * amount, card_bin, random
 */
enum routingDetailsIfRuleOperator: string {
    case EQUALS = "==";
    case NOT_EQUALS = "!=";
    case GREATER_THAN = ">";
    case LESS_THAN = "<";
    case GREATER_THAN_OR_EQUALS = ">=";
    case LESS_THAN_OR_EQUALS = "<=";
}
class RoutingDetailsIfRule
{
    /**
     * @var routingDetailsIfRuleName $name The rule key
     */
    public routingDetailsIfRuleName $name;
    /**
     * @var routingDetailsIfRuleOperator $operator The rule operator. Most keys only have the options "==" and "!==".
    These rule keys can have all the operators mentioned:
    amount, card_bin, random
     */
    public routingDetailsIfRuleOperator $operator;
    /**
     * @var string $value The rule value
     */
    public string $value;
    public function __construct(routingDetailsIfRuleName $name, routingDetailsIfRuleOperator $operator, string $value)
    {
        $this->name = $name;
        $this->operator = $operator;
        $this->value = $value;
    }
    public static function fromArray(array $data): self
    {
        return new RoutingDetailsIfRule($data['name'], $data['operator'], $data['value']);
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

