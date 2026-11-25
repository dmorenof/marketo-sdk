<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Update\EmailComponentContent\Request;

enum TypeEnum: string
{
    case DynamicContent = 'DynamicContent';
    case Snippet = 'Snippet';
    case Text = 'Text';
}
