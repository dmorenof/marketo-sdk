<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\LandingPage\Content\Response;

enum TypeEnum: string
{
    case DynamicContent = 'DynamicContent';
    case Form = 'Form';
    case HTML = 'HTML';
    case Image = 'Image';
    case Poll = 'Poll';
    case Rectangle = 'Rectangle';
    case ReferralOffer = 'ReferralOffer';
    case RichText = 'RichText';
    case Snippet = 'Snippet';
    case SocialButton = 'SocialButton';
    case Sweepstakes = 'Sweepstakes';
    case Video = 'Video';
}
