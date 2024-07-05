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
 * @name PaymentLink
 * PaymentLink
 */
/**
 * Reference to a specific payment product. This will bypass the hosted payment page
 */
enum paymentLinkPaymentProduct: string {
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
class PaymentLink
{
    /**
     * @var string $organisation Reference to the organization this link belongs to
     */
    public ?string $organisation;
    /**
     * @var string $paymentProfile Reference to the payment profile this link belongs to
     */
    public ?string $paymentProfile;
    /**
     * @var int $amount Amount is charged without a decimal place.
     */
    public ?int $amount;
    /**
     * @var string $dynamicDescriptor A short reference / descriptor that will show up on the customers bank statement
     */
    public ?string $dynamicDescriptor;
    /**
     * @var string $merchantReference A reference specified by the merchant to identify the transaction
     */
    public ?string $merchantReference;
    /**
     * @var string $customer Reference to the customer this transaction belongs to
     */
    public ?string $customer;
    /**
     * @var paymentLinkPaymentProduct $paymentProduct Reference to a specific payment product. This will bypass the hosted payment page
     */
    public ?paymentLinkPaymentProduct $paymentProduct;
    /**
     * @var string $redirectUrl The URL where the customer will be redirected once the transaction completes, regardless of whether it succeeds or fails
     */
    public ?string $redirectUrl;
    /**
     * @var string $webhookTransactionUpdate A webhook url that is called when a transaction is updated
     */
    public ?string $webhookTransactionUpdate;
    /**
     * @var string $validUntil Payment link is valid until. Defaults to 24 hours
     */
    public ?string $validUntil;
    public function __construct(?string $organisation = null, ?string $paymentProfile = null, ?int $amount = null, ?string $dynamicDescriptor = null, ?string $merchantReference = null, ?string $customer = null, ?paymentLinkPaymentProduct $paymentProduct = null, ?string $redirectUrl = null, ?string $webhookTransactionUpdate = null, ?string $validUntil = null)
    {
        $this->organisation = $organisation;
        $this->paymentProfile = $paymentProfile;
        $this->amount = $amount;
        $this->dynamicDescriptor = $dynamicDescriptor;
        $this->merchantReference = $merchantReference;
        $this->customer = $customer;
        $this->paymentProduct = $paymentProduct;
        $this->redirectUrl = $redirectUrl;
        $this->webhookTransactionUpdate = $webhookTransactionUpdate;
        $this->validUntil = $validUntil;
    }
    public static function fromArray(array $data): self
    {
        return new PaymentLink($data['organisation'], $data['payment_profile'], $data['amount'], $data['dynamic_descriptor'], $data['merchant_reference'], $data['customer'], $data['payment_product'], $data['redirect_url'], $data['webhook_transaction_update'], $data['valid_until']);
    }
    public function toArray(): array
    {
        return [
            'organisation' => $this->organisation,
            'payment_profile' => $this->paymentProfile,
            'amount' => $this->amount,
            'dynamic_descriptor' => $this->dynamicDescriptor,
            'merchant_reference' => $this->merchantReference,
            'customer' => $this->customer,
            'payment_product' => $this->paymentProduct,
            'redirect_url' => $this->redirectUrl,
            'webhook_transaction_update' => $this->webhookTransactionUpdate,
            'valid_until' => $this->validUntil,
        ];
    }
}

