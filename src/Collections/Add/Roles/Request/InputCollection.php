<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Add\Roles\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\User\RoleWorkspaceId> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\User\RoleWorkspaceId::class;
}
