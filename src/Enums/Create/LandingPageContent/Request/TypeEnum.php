<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Create\LandingPageContent\Request;

enum TypeEnum: string
{
    case Form = 'Form';
    case HTML = 'HTML';
    case Image = 'Image';
    case Rectangle = 'Rectangle';
    case RichText = 'RichText';
    case Snippet = 'Snippet';
}
