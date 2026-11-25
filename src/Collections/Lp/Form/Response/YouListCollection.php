<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Lp\Form\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Form\ThankYouPageDTO> */
final class YouListCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Form\ThankYouPageDTO::class;
}
