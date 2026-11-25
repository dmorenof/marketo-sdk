<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\AllUsers;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\User\RoleWorkspace> */
final class RoleWorkspacesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\User\RoleWorkspace::class;
}
