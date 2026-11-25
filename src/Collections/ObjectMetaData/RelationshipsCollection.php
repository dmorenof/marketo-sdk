<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ObjectMetaData;

final class RelationshipsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ObjectRelation::class;
}
