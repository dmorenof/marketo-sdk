<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities;

final class DeletedleadsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/activities/deletedleads.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Activity',
    ];

    /**
     * Get Deleted Leads
     *
     * Returns a list of leads deleted after a given datetime. Deletions greater than 14 days old may be pruned. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\Activities\DeletedleadsJson $params): \MarketoSDK\DTOs\ResponseOf\Activity
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Activity $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
