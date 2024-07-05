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
 * Item tyep
 */
enum statisticsRecentType: string {
    case TRANSACTION = "transaction";
    case BLOCKED = "blocked";
    case REFUND = "refund";
}
/**
 * Payment product string
 */
enum statisticsRecentPaymentProduct: string {
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
class StatisticsRecent
{
    /**
     * @var statisticsRecentType $type Item tyep
     */
    public statisticsRecentType $type;
    /**
     * @var int $amount Amount is charged without a decimal place.
     */
    public int $amount;
    /**
     * @var string $createdAt The date and time when the transaction was first created
     */
    public string $createdAt;
    /**
     * @var string $id The ID of the object
     */
    public ?string $id;
    /**
     * @var statisticsRecentPaymentProduct $paymentProduct Payment product string
     */
    public ?statisticsRecentPaymentProduct $paymentProduct;
    /**
     * @var array $organisation The organisation connected to this object
     */
    public ?array $organisation;
    public function __construct(statisticsRecentType $type, int $amount, string $createdAt, ?string $id = null, ?statisticsRecentPaymentProduct $paymentProduct = null, ?array $organisation = null)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->paymentProduct = $paymentProduct;
        $this->organisation = $organisation;
    }
    public static function fromArray(array $data): self
    {
        return new StatisticsRecent($data['type'], $data['amount'], $data['created_at'], $data['id'], $data['payment_product'], $data['organisation']);
    }
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'amount' => $this->amount,
            'created_at' => $this->createdAt,
            'id' => $this->id,
            'payment_product' => $this->paymentProduct,
            'organisation' => $this->organisation,
        ];
    }
}

