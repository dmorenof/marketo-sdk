<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\LandingPage\DynamicContent\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\SegmentContent> */
final class ContentCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\SegmentContent::class;
}
