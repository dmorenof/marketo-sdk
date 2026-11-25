<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Update\LandingPageContent\Request;

enum TypeEnum: string
{
    case DynamicContent = 'DynamicContent';
    case Form = 'Form';
    case HTML = 'HTML';
    case Image = 'Image';
    case Rectangle = 'Rectangle';
    case RichText = 'RichText';
    case Snippet = 'Snippet';
}
