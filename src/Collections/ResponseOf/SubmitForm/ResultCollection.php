<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SubmitForm;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Form\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Form\Response::class;
}
