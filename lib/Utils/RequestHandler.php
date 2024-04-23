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
declare(strict_types=1);

namespace MasspaySdk\Utils;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClientFactory;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class RequestHandler
{
    private ClientInterface $httpClient;
    private HttpMethodsClientInterface $pluginClient;
    private RequestFactoryInterface $requestFactoryInterface;
    private StreamFactoryInterface $streamFactoryInterface;
    private array $plugins = [];
    private array $headers = [];
    private bool $clientModified = true;

    /**
     * Construct a new HTTP Client
     * @param ClientInterface $httpClient The HTTP client interface to instantiate, null resorts to default PSR18 client
     * @param RequestFactoryInterface $requestFactoryInterface The request factory interface, null resorts to default PSR18 factory
     * @param StreamFactoryInterface $streamFactoryInterface The stream factory interface, null resorts to default PSR18 factory
     * @return void
    */
    public function __construct(
        ClientInterface $httpClient = null,
        RequestFactoryInterface $requestFactoryInterface = null,
        StreamFactoryInterface $streamFactoryInterface = null
    ) {
        $this->httpClient = $httpClient ?: Psr18ClientDiscovery::find();
        $this->requestFactoryInterface = $requestFactoryInterface ?: Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactoryInterface = $streamFactoryInterface ?: Psr17FactoryDiscovery::findStreamFactory();
    }

    /**
     * Add a plugin
     * @param Plugin $plugin The plugin to attach to this instance
     * @return void
    */
    public function addPlugin(Plugin $plugin): void
    {
        $this->plugins[] = $plugin;
        $this->clientModified = true;
    }

    /**
     * Remove a plugin by its class name.
     * @param string $pluginClass
     * @return void
    */
    public function removePlugin(string $pluginClass): void
    {
        foreach ($this->plugins as $i => $plugin) {
            if ($plugin instanceof $pluginClass) {
                unset($this->plugins[$i]);
                $this->clientModified = true;
            }
        }
    }

    /**
     * Clear headers.
     * @return void
    */
    public function clearHeaders(): void
    {
        $this->headers = [];
        $this->removePlugin(Plugin\HeaderAppendPlugin::class);
        $this->addPlugin(new Plugin\HeaderAppendPlugin($this->headers));
    }

    /**
     * Attach headers to request.
     * @param array $headers
     * @return void
     */
    public function addHeaders(array $headers): void
    {
        $this->headers = array_merge($this->headers, $headers);
        $this->removePlugin(Plugin\HeaderAppendPlugin::class);
        $this->addPlugin(new Plugin\HeaderAppendPlugin($this->headers));
    }

    /**
     * Return the instance of the HTTP Client
     * @return HttpMethodsClient $pluginClient
    */
    public function getHttpClient(): HttpMethodsClient
    {
        if ($this->clientModified) {
            $this->clientModified = false;

            $this->pluginClient = new HttpMethodsClient(
                (new PluginClientFactory())->createClient($this->httpClient, $this->plugins),
                $this->requestFactoryInterface,
                $this->streamFactoryInterface
            );
        }

        return $this->pluginClient;
    }
}
