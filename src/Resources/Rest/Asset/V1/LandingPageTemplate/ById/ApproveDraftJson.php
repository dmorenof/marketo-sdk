<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById;

final class ApproveDraftJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPageTemplate/{id}/approveDraft.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplate\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Approve Landing Page Template Draft
     *
     * Approves the current landing page template draft. This will delete the current approved version of the template if there is one. Required Permissions: Approve Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
