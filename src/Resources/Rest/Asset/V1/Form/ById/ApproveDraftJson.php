<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class ApproveDraftJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/approveDraft.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Approve Form Draft
     *
     * Approves the current draft of the form. This will delete the current approved version of the form. Required Permissions: Approve Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
