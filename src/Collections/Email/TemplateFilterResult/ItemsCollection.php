<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\TemplateFilterResult;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\TemplateContentDTO> */
final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\TemplateContentDTO::class;
}
