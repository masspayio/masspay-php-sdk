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
declare(strict_types=1);

namespace MasspaySdk;

use Psr\Http\Client\ClientInterface;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\UriFactory;
use Http\Message\Authentication\Bearer;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use MasspaySdk\Utils\RequestHandler;
use MasspaySdk\Config\ApiConfig;
use MasspaySdk\Services\AccountService;
use MasspaySdk\Services\AttributeService;
use MasspaySdk\Services\CardService;
use MasspaySdk\Services\CatalogService;
use MasspaySdk\Services\KycService;
use MasspaySdk\Services\LoadService;
use MasspaySdk\Services\PayoutService;
use MasspaySdk\Services\SpendBackService;
use MasspaySdk\Services\SubaccountService;
use MasspaySdk\Services\TaxService;
use MasspaySdk\Services\UserService;
use MasspaySdk\Services\WalletService;

/**
 * Main client for MasspaySdk API.
 */
class Client
{
    private ApiConfig $config;
    private RequestHandler $requestHandler;

    /**
     * Constructor for MasspaySdk client.
     * @param ApiConfig $options Configuration of this instance
     * @param ClientInterface $requestHandler Custom HTTP Client implementation
     * @param UriFactory $uriFactory Custom URI Factory for the HTTP Client
    */
    public function __construct(ApiConfig $options = null, ClientInterface $requestHandler = null, UriFactory $uriFactory = null)
    {
        $this->config = $options ?: new ApiConfig();
        $this->requestHandler = new RequestHandler($requestHandler);

        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $authentication = new Bearer($this->config->bearer_token);

        $this->requestHandler->addPlugin(
            new AuthenticationPlugin($authentication)
        );
        $this->requestHandler->addPlugin(
            new BaseUriPlugin($uriFactory->createUri($this->config->base_url))
        );
        $this->requestHandler->addPlugin(
            new HeaderDefaultsPlugin(
                [
                    'User-Agent' => 'MasspaySdk/3.0.0',
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            )
        );
    }

    public function account(): AccountService
    {
        return new AccountService($this);
    }

    public function attribute(): AttributeService
    {
        return new AttributeService($this);
    }

    public function card(): CardService
    {
        return new CardService($this);
    }

    public function catalog(): CatalogService
    {
        return new CatalogService($this);
    }

    public function kyc(): KycService
    {
        return new KycService($this);
    }

    public function load(): LoadService
    {
        return new LoadService($this);
    }

    public function payout(): PayoutService
    {
        return new PayoutService($this);
    }

    public function spendback(): SpendBackService
    {
        return new SpendBackService($this);
    }

    public function subaccount(): SubaccountService
    {
        return new SubaccountService($this);
    }

    public function tax(): TaxService
    {
        return new TaxService($this);
    }

    public function user(): UserService
    {
        return new UserService($this);
    }

    public function wallet(): WalletService
    {
        return new WalletService($this);
    }

    public function getHttpClient(): HttpMethodsClient
    {
        return $this->requestHandler->getHttpClient();
    }
}
