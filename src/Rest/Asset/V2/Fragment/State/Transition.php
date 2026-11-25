<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment\State;

final class Transition extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/state/transition [operationId: stateTransitionUsingPOST_fragment] */
    /**
     * Update Fragment Status
     *
     * Performs a state transition on a fragment. Required Permissions: Read-Write Assets, Access Design Studio, Approve Snippet.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\State\Transition $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\State\Transition::class)->post($params);
    }

}
