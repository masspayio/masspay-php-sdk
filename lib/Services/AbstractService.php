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

namespace MasspaySdk\Services;

use MasspaySdk\Client;
use MasspaySdk\Utils\ObjectSerializer;

/**
 * Class abstracting the common functionality of a service.
*/
abstract class AbstractService
{
  /**
   * The client instance.
   * @var Client
  */
  protected $client;

  /**
   * Create a new service instance.
   * @param Client $client
   * @return void
  */
  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  /**
   * Get the client instance.
   * @return Client
  */
  protected function getClient(): Client
  {
    return $this->client;
  }

  /**
   * Send a GET request.
   * @param string $path Request path.
   * @param ?string $parameters GET parameters.
   * @param ?array $requestHeaders Request Headers.
   * @return array|string
  */
  protected function get(string $path, ?string $parameters = null, ?array $requestHeaders = [])
  {
    $response = $this->client->getHttpClient()->get($path, $requestHeaders);
    return ObjectSerializer::getContent($response);
  }

  /**
   * Send a JSON POST request.
   * @param string $path Request path.
   * @param ?string $body Request body in JSON string.
   * @param ?array $requestHeaders Request headers.
   * @return array|string
  */
  protected function post(string $path, ?string $body = null, ?array $requestHeaders = [])
  {
    $response = $this->client->getHttpClient()->post(
      $path,
      $requestHeaders,
      $body
    );

    return ObjectSerializer::getContent($response);
  }

  /**
   * Send a PATCH request.
   * @param string $path Request path.
   * @param ?string $parameters POST parameters JSON string
   * @param ?array $requestHeaders Request headers.
   * @return array|string
  */
  protected function patch(string $path, ?string $parameters = null, ?array $requestHeaders = [])
  {
    $response = $this->client->getHttpClient()->patch(
      $path,
      $requestHeaders,
      $parameters
    );

    return ObjectSerializer::getContent($response);
  }

  /**
   * Send a PUT request.
   * @param string $path Request path.
   * @param ?string $parameters POST parameters JSON string
   * @param ?array $requestHeaders Request headers.
   * @return array|string
  */
  protected function put(string $path, ?string $parameters = null, ?array $requestHeaders = [])
  {
    $response = $this->client->getHttpClient()->put(
      $path,
      $requestHeaders,
      $parameters
    );

    return ObjectSerializer::getContent($response);
  }

  /**
   * Send a DELETE request.
   * @param string $path Request path.
   * @param ?string $parameters POST parameters JSON string.
   * @param ?array $requestHeaders Request headers.
   * @return array|string
  */
  protected function delete(string $path, ?string $parameters = null, ?array $requestHeaders = [])
  {
    $response = $this->client->getHttpClient()->delete(
      $path,
      $requestHeaders,
      $parameters
    );

    return ObjectSerializer::getContent($response);
  }
}
