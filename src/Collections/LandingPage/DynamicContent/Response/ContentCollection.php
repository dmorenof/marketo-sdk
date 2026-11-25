<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\LandingPage\DynamicContent\Response;

final class ContentCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\SegmentContent::class;
}
