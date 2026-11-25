<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email;

final class CcFieldsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/ccFields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailCCFields\\Response',
    ];

    /**
     * Get Email CC Fields
     *
     * Returns the set of fields enabled for Email CC in the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\EmailCCFields\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailCCFields\Response $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
