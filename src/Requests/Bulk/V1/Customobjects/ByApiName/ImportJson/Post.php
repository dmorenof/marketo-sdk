<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Bulk\V1\Customobjects\ByApiName\ImportJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'file',
];

    /**
     * File containing the data records to import.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;

}
