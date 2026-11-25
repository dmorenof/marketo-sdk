<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\FolderContent\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\FolderContentResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\FolderContentResponse::class;
}
