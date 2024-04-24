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

use Psr\Http\Message\ResponseInterface;

/**
 * Helper class to serialize responses from the API.
*/
final class ObjectSerializer
{
    /**
     * Serialize the contents of a response.
     * @param ResponseInterface $response The response from the API.
     * @return array
    */
    public static function getContent(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
