<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\TemplateNew\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\TemplateDetailDTO> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\TemplateDetailDTO::class;
}
