<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use Fig\Http\Message\RequestMethodInterface;
use Fig\Http\Message\StatusCodeInterface;

/**
 * Class Curl
 *
 * @codeCoverageIgnore
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Curl
{
    public const API_URL   = 'https://api.speedy.bg/v1';
    public const USER_NAME = 'userName';
    public const PASSWORD  = 'password';
    public const LANGUAGE  = 'language';

    /**
     * @param string $method
     * @param string $uri
     * @param array $data
     */
    private function request(string $method, string $uri, array $data)
    {
        $data[self::USER_NAME] = $this->getUsername();
        $data[self::PASSWORD]  = $this->getPassword();
        $data[self::LANGUAGE]  = $this->getLanguage();

        $curl = curl_init(self::API_URL . $uri);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $json = json_encode($data);

        switch ($method) {
            case RequestMethodInterface::METHOD_GET:
                curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                break;

            case RequestMethodInterface::METHOD_POST:
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                break;

            case RequestMethodInterface::METHOD_PUT:
                curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                break;

            case RequestMethodInterface::METHOD_DELETE:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
                break;
        }

        $response = curl_exec($curl);
        $data = json_decode($response);

        /* Check for 404 (file not found). */
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // Check the HTTP Status code
        switch ($httpCode) {
            case StatusCodeInterface::STATUS_OK: // 200
                $statusCode = "200: Success";
                return ($data);
                break;

            case StatusCodeInterface::STATUS_NOT_FOUND: // 404
                $statusCode = "404: API Not found";
                break;

            case StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR: // 500
                $statusCode = "500: servers replied with an error.";
                break;

            case StatusCodeInterface::STATUS_BAD_GATEWAY: // 402
                $statusCode = "502: servers may be down or being upgraded. Hopefully they'll be OK soon!";
                break;

            case StatusCodeInterface::STATUS_SERVICE_UNAVAILABLE:
                $statusCode = "503: service unavailable. Hopefully they'll be OK soon!";
                break;

            default:
                $statusCode = "Undocumented error: " . $httpCode . " : " . curl_error($curl);
                break;
        }

        curl_close($curl);
        echo $statusCode;
        die;
    }
}
