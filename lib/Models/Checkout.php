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
 * @name Checkout
 * Checkout
 */
/**
 * Default language (ISO 639-1, Alpha-2 code)
 */
enum checkoutDefaultLanguage: string {
    case DE = "de";
    case EN = "en";
    case ES = "es";
    case FR = "fr";
    case NL = "nl";
}
/**
 * Number format locale
 */
enum checkoutNumberFormat: string {
    case EN_US = "en_US";
    case NL_NL = "nl_NL";
}
class Checkout
{
    /**
     * @var string $name Checkout name
     */
    public ?string $name;
    /**
     * @var string $description Short description
     */
    public ?string $description;
    /**
     * @var string $logoUrl Logo url (https)
     */
    public ?string $logoUrl;
    /**
     * @var string $backgroundColor Page background color. Hex code including hashtag. E.g. #FFF or #000000
     */
    public ?string $backgroundColor;
    /**
     * @var string $backgroundImageUrl Page background image url (https)
     */
    public ?string $backgroundImageUrl;
    /**
     * @var string $headerColor Header color. Hex code including hashtag. E.g. #FFF or #000000
     */
    public ?string $headerColor;
    /**
     * @var string $headerTextColor Header text color. Hex code including hashtag. E.g. #FFF or #000000
     */
    public ?string $headerTextColor;
    /**
     * @var string $buttonColor Button color. Hex code including hashtag. E.g. #FFF or #000000
     */
    public ?string $buttonColor;
    /**
     * @var string $buttonTextColor Button text color. Hex code including hashtag. E.g. #FFF or #000000
     */
    public ?string $buttonTextColor;
    /**
     * @var string $paymentProductOrder Comma separated list of payment products
     */
    public ?string $paymentProductOrder;
    /**
     * @var bool $showLanguageSwitch Show language switch in header
     */
    public ?bool $showLanguageSwitch;
    /**
     * @var checkoutDefaultLanguage $defaultLanguage Default language (ISO 639-1, Alpha-2 code)
     */
    public ?checkoutDefaultLanguage $defaultLanguage;
    /**
     * @var checkoutNumberFormat $numberFormat Number format locale
     */
    public ?checkoutNumberFormat $numberFormat;
    /**
     * @var bool $defaultCheckout Default checkout design
     */
    public ?bool $defaultCheckout;
    public function __construct(?string $name = null, ?string $description = null, ?string $logoUrl = null, ?string $backgroundColor = null, ?string $backgroundImageUrl = null, ?string $headerColor = null, ?string $headerTextColor = null, ?string $buttonColor = null, ?string $buttonTextColor = null, ?string $paymentProductOrder = null, ?bool $showLanguageSwitch = null, ?checkoutDefaultLanguage $defaultLanguage = null, ?checkoutNumberFormat $numberFormat = null, ?bool $defaultCheckout = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->logoUrl = $logoUrl;
        $this->backgroundColor = $backgroundColor;
        $this->backgroundImageUrl = $backgroundImageUrl;
        $this->headerColor = $headerColor;
        $this->headerTextColor = $headerTextColor;
        $this->buttonColor = $buttonColor;
        $this->buttonTextColor = $buttonTextColor;
        $this->paymentProductOrder = $paymentProductOrder;
        $this->showLanguageSwitch = $showLanguageSwitch;
        $this->defaultLanguage = $defaultLanguage;
        $this->numberFormat = $numberFormat;
        $this->defaultCheckout = $defaultCheckout;
    }
    public static function fromArray(array $data): self
    {
        return new Checkout($data['name'], $data['description'], $data['logo_url'], $data['background_color'], $data['background_image_url'], $data['header_color'], $data['header_text_color'], $data['button_color'], $data['button_text_color'], $data['payment_product_order'], $data['show_language_switch'], $data['default_language'], $data['number_format'], $data['default_checkout']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'logo_url' => $this->logoUrl,
            'background_color' => $this->backgroundColor,
            'background_image_url' => $this->backgroundImageUrl,
            'header_color' => $this->headerColor,
            'header_text_color' => $this->headerTextColor,
            'button_color' => $this->buttonColor,
            'button_text_color' => $this->buttonTextColor,
            'payment_product_order' => $this->paymentProductOrder,
            'show_language_switch' => $this->showLanguageSwitch,
            'default_language' => $this->defaultLanguage,
            'number_format' => $this->numberFormat,
            'default_checkout' => $this->defaultCheckout,
        ];
    }
}

