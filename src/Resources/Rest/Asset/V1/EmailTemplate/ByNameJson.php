<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/emailTemplate/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplate\\Response',
    ];

    /**
     * Get Email Template by Name
     *
     * Retrieves and email template record by the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplate\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
