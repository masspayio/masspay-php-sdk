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
 * The type of service. I.e. cash pickup, home delivery, etc.
 */
enum serviceDeliveryType: string {
    case CASH_PICKUP = "CASH_PICKUP";
    case BANK_DEPOSIT = "BANK_DEPOSIT";
    case HOME_DELIVERY = "HOME_DELIVERY";
    case MOBILE_WALLET = "MOBILE_WALLET";
    case MASSPAY_CARD = "MASSPAY_CARD";
    case PAPER_CHECK = "PAPER_CHECK";
    case BILL = "BILL";
    case CRYPTOCURRENCY = "CRYPTOCURRENCY";
}
class Service
{
    /**
     * @var string $countryCode Country code [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3)
     */
    public string $countryCode;
    /**
     * @var serviceDeliveryType $deliveryType The type of service. I.e. cash pickup, home delivery, etc.
     */
    public serviceDeliveryType $deliveryType;
    /**
     * @var array[] $payers
     */
    public array
    $payers;
    public function __construct(string $countryCode, serviceDeliveryType $deliveryType, array
    $payers)
    {
        $this->countryCode = $countryCode;
        $this->deliveryType = $deliveryType;
        $this->payers = $payers;
    }
    public static function fromArray(array $data): self
    {
        return new Service($data['country_code'], $data['delivery_type'], $data['payers']);
    }
    public function toArray(): array
    {
        return [
            'country_code' => $this->countryCode,
            'delivery_type' => $this->deliveryType,
            'payers' => $this->payers,
        ];
    }
}

