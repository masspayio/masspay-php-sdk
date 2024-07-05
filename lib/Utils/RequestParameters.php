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
namespace MasspaySdk\Utils;

/**
 * Helper class for setting up request parameters
*/
class RequestParameters
{
    public mixed $body = null;
    public mixed $query = null;
    public ?array $headers = [];

    public function __construct()
    {
    }

    /**
     * Set the request body
     * @param mixed $body Body of the request.
     * @return void
    */
    public function setBody(mixed $body): void
    {
        $this->body = $body;
    }

    /**
     * Set the request query parameters
     * @param mixed $query Query parameters.
     * @return void
    */
    public function setQuery(mixed $query): void
    {
        $this->query = $query;
    }

    /**
     * Get URL encoded query string
     * @param string $url The URL of the request.
     * @return string
    */
    public function getFormattedQuery(string $uri): string
    {
        if (!empty($this->query)) {
            return $uri .= "?" . http_build_query($this->query);
        }
        return $uri;
    }

    /**
     * Get the request body, appropriately casted.
     * @return string|null
    */
    public function getRequestBody(): ?string
    {
        if (is_null($this->body)) {
            return $this->body;
        }

        if (is_object($this->body) && method_exists(get_class($this->body), 'toArray')) {
            return json_encode(array_filter($this->body->toArray()));
        }

        return json_encode(array_filter($this->body));
    }

    /**
     * Set the request headers
     * @param array $headers Key-value array of request headers.
     * @return void
    */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }
}
