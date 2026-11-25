<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\FieldsMetaData\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\FieldsMetaDataResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\FieldsMetaDataResponse::class;
}
