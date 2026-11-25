<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Folder\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\FolderResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\FolderResponse::class;
}
