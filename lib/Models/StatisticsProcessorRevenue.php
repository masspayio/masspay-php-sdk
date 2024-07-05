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
 * Payment product string
 */
enum statisticsProcessorRevenuePaymentProduct: string {
    case EMPTY = "";
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
class StatisticsProcessorRevenue
{
    /**
     * @var string $id The ID of the processor object
     */
    public ?string $id;
    /**
     * @var string $name Name of the processor
     */
    public ?string $name;
    /**
     * @var statisticsProcessorRevenuePaymentProduct $paymentProduct Payment product string
     */
    public ?statisticsProcessorRevenuePaymentProduct $paymentProduct;
    /**
     * @var string $gateway Payment gateway used
     */
    public ?string $gateway;
    /**
     * @var string $organisation Reference to the organisation this processor belongs to
     */
    public ?string $organisation;
    /**
     * @var int $last24Hours Revenue of the last 24 hours
     */
    public ?int $last24Hours;
    /**
     * @var int $previous24Hours Revenue of the previous 24 hours
     */
    public ?int $previous24Hours;
    public function __construct(?string $id = null, ?string $name = null, ?statisticsProcessorRevenuePaymentProduct $paymentProduct = null, ?string $gateway = null, ?string $organisation = null, ?int $last24Hours = null, ?int $previous24Hours = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->paymentProduct = $paymentProduct;
        $this->gateway = $gateway;
        $this->organisation = $organisation;
        $this->last24Hours = $last24Hours;
        $this->previous24Hours = $previous24Hours;
    }
    public static function fromArray(array $data): self
    {
        return new StatisticsProcessorRevenue($data['id'], $data['name'], $data['payment_product'], $data['gateway'], $data['organisation'], $data['last24hours'], $data['previous24hours']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'payment_product' => $this->paymentProduct,
            'gateway' => $this->gateway,
            'organisation' => $this->organisation,
            'last24hours' => $this->last24Hours,
            'previous24hours' => $this->previous24Hours,
        ];
    }
}

