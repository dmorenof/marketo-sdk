<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\FolderResponse;

enum FolderTypeEnum: string
{
    case EmailBatchProgram = 'Email Batch Program';
    case EmailTemplate = 'Email Template';
    case Email = 'Email';
    case Image = 'Image';
    case LandingPageForm = 'Landing Page Form';
    case LandingPageTemplate = 'Landing Page Template';
    case LandingPage = 'Landing Page';
    case MarketingEvent = 'Marketing Event';
    case MarketingFolder = 'Marketing Folder';
    case MarketingProgram = 'Marketing Program';
    case NurtureProgram = 'Nurture Program';
    case Report = 'Report';
    case RevenueCycleModel = 'Revenue Cycle Model';
    case Zone = 'Zone';
}
