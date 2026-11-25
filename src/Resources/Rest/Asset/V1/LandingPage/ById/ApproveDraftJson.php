<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById;

final class ApproveDraftJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPage/{id}/approveDraft.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Approve Landing Page Draft
     *
     * Approves the current draft of the landing page. Required Permissions: Approve Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
