<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById;

final class Content extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/emailTemplate/{id}/content',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplateContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email Template Content by Id
     *
     * Returns the content for a given email template. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplate\ById\Content $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplateContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplateContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
