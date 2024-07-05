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
 * @name Transaction
 * Transaction
 */
/**
 * Payment product string
 */
enum transactionPaymentProduct: string {
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
/**
 * This field is to be used only when a transaction is part of a series of recurring transactions. If it's the initial transaction, set the value to 'first', and if it's not, set it to 'repeat'. This field must not be included in transactions that will not be part of a series of repeated transactions. ('first' and 'repeat' are written in all lowercase letters).
 */
enum transactionRecurringType: string {
    case EMPTY = "";
    case FIRST = "first";
    case REPEAT = "repeat";
}
class Transaction
{
    /**
     * @var string $organisation Reference to the organization this transaction belongs to
     */
    public ?string $organisation;
    /**
     * @var string $paymentProfile Reference to the payment profile this transaction belongs to
     */
    public ?string $paymentProfile;
    /**
     * @var string $terminal Reference to the terminal this transaction belongs to
     */
    public ?string $terminal;
    /**
     * @var int $amount Amount is charged without a decimal place.
     */
    public ?int $amount;
    /**
     * @var string $reserveReleaseDate The date when a possible reserve from this transaction released
     */
    public ?string $reserveReleaseDate;
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
     * @var string $customerIp The IP address of the customer
     */
    public ?string $customerIp;
    /**
     * @var string $countryCode Two-letter ISO country code
     */
    public ?string $countryCode;
    /**
     * @var string $userAgent The full user agent string of the device the customer used to submit the transaction
     */
    public ?string $userAgent;
    /**
     * @var array $details Transaction details
     */
    public ?array $details;
    /**
     * @var array $orderData
     */
    public ?array $orderData;
    /**
     * @var string $card The Id of the card object. Required for recurring_type=repeat
     */
    public ?string $card;
    /**
     * @var transactionPaymentProduct $paymentProduct Payment product string
     */
    public ?transactionPaymentProduct $paymentProduct;
    /**
     * @var transactionRecurringType $recurringType This field is to be used only when a transaction is part of a series of recurring transactions. If it's the initial transaction, set the value to 'first', and if it's not, set it to 'repeat'. This field must not be included in transactions that will not be part of a series of repeated transactions. ('first' and 'repeat' are written in all lowercase letters).
     */
    public ?transactionRecurringType $recurringType;
    /**
     * @var string $webhookTransactionUpdate A webhook url that is called when a transaction is updated
     */
    public ?string $webhookTransactionUpdate;
    public function __construct(?string $organisation = null, ?string $paymentProfile = null, ?string $terminal = null, ?int $amount = null, ?string $reserveReleaseDate = null, ?string $dynamicDescriptor = null, ?string $merchantReference = null, ?string $customer = null, ?string $customerIp = null, ?string $countryCode = null, ?string $userAgent = null, ?array $details = null, ?array $orderData = null, ?string $card = null, ?transactionPaymentProduct $paymentProduct = null, ?transactionRecurringType $recurringType = null, ?string $webhookTransactionUpdate = null)
    {
        $this->organisation = $organisation;
        $this->paymentProfile = $paymentProfile;
        $this->terminal = $terminal;
        $this->amount = $amount;
        $this->reserveReleaseDate = $reserveReleaseDate;
        $this->dynamicDescriptor = $dynamicDescriptor;
        $this->merchantReference = $merchantReference;
        $this->customer = $customer;
        $this->customerIp = $customerIp;
        $this->countryCode = $countryCode;
        $this->userAgent = $userAgent;
        $this->details = $details;
        $this->orderData = $orderData;
        $this->card = $card;
        $this->paymentProduct = $paymentProduct;
        $this->recurringType = $recurringType;
        $this->webhookTransactionUpdate = $webhookTransactionUpdate;
    }
    public static function fromArray(array $data): self
    {
        return new Transaction($data['organisation'], $data['payment_profile'], $data['terminal'], $data['amount'], $data['reserve_release_date'], $data['dynamic_descriptor'], $data['merchant_reference'], $data['customer'], $data['customer_ip'], $data['country_code'], $data['user_agent'], $data['details'], $data['order_data'], $data['card'], $data['payment_product'], $data['recurring_type'], $data['webhook_transaction_update']);
    }
    public function toArray(): array
    {
        return [
            'organisation' => $this->organisation,
            'payment_profile' => $this->paymentProfile,
            'terminal' => $this->terminal,
            'amount' => $this->amount,
            'reserve_release_date' => $this->reserveReleaseDate,
            'dynamic_descriptor' => $this->dynamicDescriptor,
            'merchant_reference' => $this->merchantReference,
            'customer' => $this->customer,
            'customer_ip' => $this->customerIp,
            'country_code' => $this->countryCode,
            'user_agent' => $this->userAgent,
            'details' => $this->details,
            'order_data' => $this->orderData,
            'card' => $this->card,
            'payment_product' => $this->paymentProduct,
            'recurring_type' => $this->recurringType,
            'webhook_transaction_update' => $this->webhookTransactionUpdate,
        ];
    }
}

