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
 * @name Routing
 * Routing
 */
/**
 * Payment product string
 */
enum routingPaymentProduct: string {
    case ALIPAY = "alipay";
    case APPLEPAY = "applepay";
    case BCMC = "bcmc";
    case BELFIUS = "belfius";
    case BITPAY = "bitpay";
    case BPWALLET = "bpwallet";
    case CARD = "card";
    case CARDEXTERNAL = "cardexternal";
    case CREDITCLICK = "creditclick";
    case DIRECTDEBIT = "directdebit";
    case DIRECTDEBITPLUS = "directdebitplus";
    case DUMMY = "dummy";
    case EPS = "eps";
    case ETRANSFER = "etransfer";
    case EZEEWALLET = "ezeewallet";
    case FINSHARK = "finshark";
    case GCASH = "gcash";
    case GIROPAY = "giropay";
    case GOOGLEPAY = "googlepay";
    case IDEAL = "ideal";
    case IMPS = "imps";
    case INTERAC = "interac";
    case MULTIBANCO = "multibanco";
    case MYBANK = "mybank";
    case OPENNODE = "opennode";
    case P24 = "p24";
    case PAYPAL = "paypal";
    case PAYTM = "paytm";
    case PAYU = "payu";
    case PAYSAFECARD = "paysafecard";
    case POS = "pos";
    case SEPA = "sepa";
    case SKRILL = "skrill";
    case SOFORT = "sofort";
    case TRIPLEA = "triplea";
    case TRUSTPAY = "trustpay";
    case TRUSTLY = "trustly";
    case UNIONPAY = "unionpay";
    case UPI = "upi";
    case VOLT = "volt";
    case WECHATPAY = "wechatpay";
}
class Routing
{
    /**
     * @var string $name The name of the Routing
     */
    public ?string $name;
    /**
     * @var routingPaymentProduct $paymentProduct Payment product string
     */
    public ?routingPaymentProduct $paymentProduct;
    /**
     * @var array $details
     */
    public ?array $details;
    public function __construct(?string $name = null, ?routingPaymentProduct $paymentProduct = null, ?array $details = null)
    {
        $this->name = $name;
        $this->paymentProduct = $paymentProduct;
        $this->details = $details;
    }
    public static function fromArray(array $data): self
    {
        return new Routing($data['name'], $data['payment_product'], $data['details']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'payment_product' => $this->paymentProduct,
            'details' => $this->details,
        ];
    }
}

