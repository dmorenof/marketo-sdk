<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById;

final class FullContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/{id}/fullContent.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\GetEmailFullContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email Full Content
     *
     * Returns the serialized HTML version of the email. Required Permissions: Read-Only Assets, Read-Write Assets. If leadId is passed in the request: Read-Only Lead, Read-Write Lead.
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\FullContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\GetEmailFullContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\GetEmailFullContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/fullContent.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\UpdateEmailFullContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\EmailFullContent\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Email Full Content
     *
     * Replaces the HTML of an Email that has had its relationship broken from its template. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\EmailFullContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\UpdateEmailFullContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\UpdateEmailFullContent\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
