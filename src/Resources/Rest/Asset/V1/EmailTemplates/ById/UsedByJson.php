<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\EmailTemplates\ById;

final class UsedByJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/emailTemplates/{id}/usedBy.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplateUsedBy\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email Template Used By
     *
     * Returns a list of email records which depend on a given email template. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplates\ById\UsedByJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplateUsedBy\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplateUsedBy\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
