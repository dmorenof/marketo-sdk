# Marketo SDK for PHP: operations

381 operations. Each is a static method of a facade class (`MarketoSDK\...`); configure the SDK once with `MarketoEngageRESTAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Get Export Activity Jobs | GET | `/bulk/v1/activities/export.json` | `Bulk\V1\Activities\ExportJson::get()` |
| Create Export Activity Job | POST | `/bulk/v1/activities/export/create.json` | `Bulk\V1\Activities\Export\CreateJson::post()` |
| Cancel Export Activity Job | POST | `/bulk/v1/activities/export/{exportId}/cancel.json` | `Bulk\V1\Activities\Export\ByExportId\CancelJson::post()` |
| Enqueue Export Activity Job | POST | `/bulk/v1/activities/export/{exportId}/enqueue.json` | `Bulk\V1\Activities\Export\ByExportId\EnqueueJson::post()` |
| Get Export Activity File | GET | `/bulk/v1/activities/export/{exportId}/file.json` | `Bulk\V1\Activities\Export\ByExportId\FileJson::get()` |
| Get Export Activity Job Status | GET | `/bulk/v1/activities/export/{exportId}/status.json` | `Bulk\V1\Activities\Export\ByExportId\StatusJson::get()` |
| Get Export Custom Object Jobs | GET | `/bulk/v1/customobjects/{apiName}/export.json` | `Bulk\V1\Customobjects\ByApiName\ExportJson::get()` |
| Create Export Custom Object Job | POST | `/bulk/v1/customobjects/{apiName}/export/create.json` | `Bulk\V1\Customobjects\ByApiName\Export\CreateJson::post()` |
| Cancel Export Custom Object Job | POST | `/bulk/v1/customobjects/{apiName}/export/{exportId}/cancel.json` | `Bulk\V1\Customobjects\ByApiName\Export\ByExportId\CancelJson::post()` |
| Enqueue Export Custom Object Job | POST | `/bulk/v1/customobjects/{apiName}/export/{exportId}/enqueue.json` | `Bulk\V1\Customobjects\ByApiName\Export\ByExportId\EnqueueJson::post()` |
| Get Export Custom Object File | GET | `/bulk/v1/customobjects/{apiName}/export/{exportId}/file.json` | `Bulk\V1\Customobjects\ByApiName\Export\ByExportId\FileJson::get()` |
| Get Export Custom Object Job Status | GET | `/bulk/v1/customobjects/{apiName}/export/{exportId}/status.json` | `Bulk\V1\Customobjects\ByApiName\Export\ByExportId\StatusJson::get()` |
| Import Custom Objects | POST | `/bulk/v1/customobjects/{apiName}/import.json` | `Bulk\V1\Customobjects\ByApiName\ImportJson::post()` |
| Get Import Custom Object Failures | GET | `/bulk/v1/customobjects/{apiName}/import/{batchId}/failures.json` | `Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\FailuresJson::get()` |
| Get Import Custom Object Status | GET | `/bulk/v1/customobjects/{apiName}/import/{batchId}/status.json` | `Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\StatusJson::get()` |
| Get Import Custom Object Warnings | GET | `/bulk/v1/customobjects/{apiName}/import/{batchId}/warnings.json` | `Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\WarningsJson::get()` |
| Import Leads | POST | `/bulk/v1/leads.json` | `Bulk\V1\LeadsJson::post()` |
| Get Import Lead Status | GET | `/bulk/v1/leads/batch/{batchId}.json` | `Bulk\V1\Leads\Batch\BatchIdJson::get()` |
| Get Import Lead Failures | GET | `/bulk/v1/leads/batch/{batchId}/failures.json` | `Bulk\V1\Leads\Batch\ByBatchId\FailuresJson::get()` |
| Get Import Lead Warnings | GET | `/bulk/v1/leads/batch/{batchId}/warnings.json` | `Bulk\V1\Leads\Batch\ByBatchId\WarningsJson::get()` |
| Get Export Lead Jobs | GET | `/bulk/v1/leads/export.json` | `Bulk\V1\Leads\ExportJson::get()` |
| Create Export Lead Job | POST | `/bulk/v1/leads/export/create.json` | `Bulk\V1\Leads\Export\CreateJson::post()` |
| Cancel Export Lead Job | POST | `/bulk/v1/leads/export/{exportId}/cancel.json` | `Bulk\V1\Leads\Export\ByExportId\CancelJson::post()` |
| Enqueue Export Lead Job | POST | `/bulk/v1/leads/export/{exportId}/enqueue.json` | `Bulk\V1\Leads\Export\ByExportId\EnqueueJson::post()` |
| Get Export Lead File | GET | `/bulk/v1/leads/export/{exportId}/file.json` | `Bulk\V1\Leads\Export\ByExportId\FileJson::get()` |
| Get Export Lead Job Status | GET | `/bulk/v1/leads/export/{exportId}/status.json` | `Bulk\V1\Leads\Export\ByExportId\StatusJson::get()` |
| Get Export Program Member Jobs | GET | `/bulk/v1/program/members/export.json` | `Bulk\V1\Program\Members\ExportJson::get()` |
| Create Export Program Member Job | POST | `/bulk/v1/program/members/export/create.json` | `Bulk\V1\Program\Members\Export\CreateJson::post()` |
| Cancel Export Program Member Job | POST | `/bulk/v1/program/members/export/{exportId}/cancel.json` | `Bulk\V1\Program\Members\Export\ByExportId\CancelJson::post()` |
| Enqueue Export Program Member Job | POST | `/bulk/v1/program/members/export/{exportId}/enqueue.json` | `Bulk\V1\Program\Members\Export\ByExportId\EnqueueJson::post()` |
| Get Export Program Member File | GET | `/bulk/v1/program/members/export/{exportId}/file.json` | `Bulk\V1\Program\Members\Export\ByExportId\FileJson::get()` |
| Get Export Program Member Job Status | GET | `/bulk/v1/program/members/export/{exportId}/status.json` | `Bulk\V1\Program\Members\Export\ByExportId\StatusJson::get()` |
| Get Import Program Member Failures | GET | `/bulk/v1/program/members/import/{batchId}/failures.json` | `Bulk\V1\Program\Members\Import\ByBatchId\FailuresJson::get()` |
| Get Import Program Member Status | GET | `/bulk/v1/program/members/import/{batchId}/status.json` | `Bulk\V1\Program\Members\Import\ByBatchId\StatusJson::get()` |
| Get Import Program Member Warnings | GET | `/bulk/v1/program/members/import/{batchId}/warnings.json` | `Bulk\V1\Program\Members\Import\ByBatchId\WarningsJson::get()` |
| Import Program Members | POST | `/bulk/v1/program/{programId}/members/import.json` | `Bulk\V1\Program\ByProgramId\Members\ImportJson::post()` |
| Identity | GET | `/identity/oauth/token` | `Identity\Oauth\Token::get()` |
| Identity | POST | `/identity/oauth/token` | `Identity\Oauth\Token::post()` |
| Get Channel by Name | GET | `/rest/asset/v1/channel/byName.json` | `Rest\Asset\V1\Channel\ByNameJson::get()` |
| Get Channels | GET | `/rest/asset/v1/channels.json` | `Rest\Asset\V1\ChannelsJson::get()` |
| Get Email by Name | GET | `/rest/asset/v1/email/byName.json` | `Rest\Asset\V1\Email\ByNameJson::get()` |
| Get Email CC Fields | GET | `/rest/asset/v1/email/ccFields.json` | `Rest\Asset\V1\Email\CcFieldsJson::get()` |
| Get Email By Id | GET | `/rest/asset/v1/email/{id}.json` | `Rest\Asset\V1\Email\IdJson::get()` |
| Update Email Metadata | POST | `/rest/asset/v1/email/{id}.json` | `Rest\Asset\V1\Email\IdJson::post()` |
| Approve Email Draft | POST | `/rest/asset/v1/email/{id}/approveDraft.json` | `Rest\Asset\V1\Email\ById\ApproveDraftJson::post()` |
| Clone Email | POST | `/rest/asset/v1/email/{id}/clone.json` | `Rest\Asset\V1\Email\ById\CloneJson::post()` |
| Get Email Content | GET | `/rest/asset/v1/email/{id}/content.json` | `Rest\Asset\V1\Email\ById\ContentJson::get()` |
| Update Email Content | POST | `/rest/asset/v1/email/{id}/content.json` | `Rest\Asset\V1\Email\ById\ContentJson::post()` |
| Rearrange Email Modules | POST | `/rest/asset/v1/email/{id}/content/rearrange.json` | `Rest\Asset\V1\Email\ById\Content\RearrangeJson::post()` |
| Update Email Content Section | POST | `/rest/asset/v1/email/{id}/content/{htmlId}.json` | `Rest\Asset\V1\Email\ById\Content\HtmlIdJson::post()` |
| Add Email Module | POST | `/rest/asset/v1/email/{id}/content/{moduleId}/add.json` | `Rest\Asset\V1\Email\ById\Content\ByModuleId\AddJson::post()` |
| Delete Module | POST | `/rest/asset/v1/email/{id}/content/{moduleId}/delete.json` | `Rest\Asset\V1\Email\ById\Content\ByModuleId\DeleteJson::post()` |
| Duplicate Email Module | POST | `/rest/asset/v1/email/{id}/content/{moduleId}/duplicate.json` | `Rest\Asset\V1\Email\ById\Content\ByModuleId\DuplicateJson::post()` |
| Rename Email Module | POST | `/rest/asset/v1/email/{id}/content/{moduleId}/rename.json` | `Rest\Asset\V1\Email\ById\Content\ByModuleId\RenameJson::post()` |
| Delete Email | POST | `/rest/asset/v1/email/{id}/delete.json` | `Rest\Asset\V1\Email\ById\DeleteJson::post()` |
| Discard Email Draft | POST | `/rest/asset/v1/email/{id}/discardDraft.json` | `Rest\Asset\V1\Email\ById\DiscardDraftJson::post()` |
| Get Email Dynamic Content | GET | `/rest/asset/v1/email/{id}/dynamicContent/{contentId}.json` | `Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson::get()` |
| Update Email Dynamic Content Section | POST | `/rest/asset/v1/email/{id}/dynamicContent/{contentId}.json` | `Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson::post()` |
| Get Email Full Content | GET | `/rest/asset/v1/email/{id}/fullContent.json` | `Rest\Asset\V1\Email\ById\FullContentJson::get()` |
| Update Email Full Content | POST | `/rest/asset/v1/email/{id}/fullContent.json` | `Rest\Asset\V1\Email\ById\FullContentJson::post()` |
| Send Sample Email | POST | `/rest/asset/v1/email/{id}/sendSample.json` | `Rest\Asset\V1\Email\ById\SendSampleJson::post()` |
| Unapprove Email | POST | `/rest/asset/v1/email/{id}/unapprove.json` | `Rest\Asset\V1\Email\ById\UnapproveJson::post()` |
| Update Email Variable | POST | `/rest/asset/v1/email/{id}/variable/{name}.json` | `Rest\Asset\V1\Email\ById\Variable\NameJson::post()` |
| Get Email Variables | GET | `/rest/asset/v1/email/{id}/variables.json` | `Rest\Asset\V1\Email\ById\VariablesJson::get()` |
| Get Email Template by Name | GET | `/rest/asset/v1/emailTemplate/byName.json` | `Rest\Asset\V1\EmailTemplate\ByNameJson::get()` |
| Get Email Template by Id | GET | `/rest/asset/v1/emailTemplate/{id}.json` | `Rest\Asset\V1\EmailTemplate\IdJson::get()` |
| Update Email Template Metadata | POST | `/rest/asset/v1/emailTemplate/{id}.json` | `Rest\Asset\V1\EmailTemplate\IdJson::post()` |
| Approve Email Template Draft | POST | `/rest/asset/v1/emailTemplate/{id}/approveDraft.json` | `Rest\Asset\V1\EmailTemplate\ById\ApproveDraftJson::post()` |
| Clone Email Template | POST | `/rest/asset/v1/emailTemplate/{id}/clone.json` | `Rest\Asset\V1\EmailTemplate\ById\CloneJson::post()` |
| Get Email Template Content by Id | GET | `/rest/asset/v1/emailTemplate/{id}/content` | `Rest\Asset\V1\EmailTemplate\ById\Content::get()` |
| Update Email Template Content | POST | `/rest/asset/v1/emailTemplate/{id}/content.json` | `Rest\Asset\V1\EmailTemplate\ById\ContentJson::post()` |
| Delete Email Template | POST | `/rest/asset/v1/emailTemplate/{id}/delete.json` | `Rest\Asset\V1\EmailTemplate\ById\DeleteJson::post()` |
| Discard Email Template Draft | POST | `/rest/asset/v1/emailTemplate/{id}/discardDraft.json` | `Rest\Asset\V1\EmailTemplate\ById\DiscardDraftJson::post()` |
| Unapprove Email Template Draft | POST | `/rest/asset/v1/emailTemplate/{id}/unapprove.json` | `Rest\Asset\V1\EmailTemplate\ById\UnapproveJson::post()` |
| Get Email Templates | GET | `/rest/asset/v1/emailTemplates.json` | `Rest\Asset\V1\EmailTemplatesJson::get()` |
| Create Email Template | POST | `/rest/asset/v1/emailTemplates.json` | `Rest\Asset\V1\EmailTemplatesJson::post()` |
| Get Email Template Used By | GET | `/rest/asset/v1/emailTemplates/{id}/usedBy.json` | `Rest\Asset\V1\EmailTemplates\ById\UsedByJson::get()` |
| Get Emails | GET | `/rest/asset/v1/emails.json` | `Rest\Asset\V1\EmailsJson::get()` |
| Create Email | POST | `/rest/asset/v1/emails.json` | `Rest\Asset\V1\EmailsJson::post()` |
| Get File by Name | GET | `/rest/asset/v1/file/byName.json` | `Rest\Asset\V1\File\ByNameJson::get()` |
| Get File by Id | GET | `/rest/asset/v1/file/{id}.json` | `Rest\Asset\V1\File\IdJson::get()` |
| Update File Content | POST | `/rest/asset/v1/file/{id}/content.json` | `Rest\Asset\V1\File\ById\ContentJson::post()` |
| Get Files | GET | `/rest/asset/v1/files.json` | `Rest\Asset\V1\FilesJson::get()` |
| Create File | POST | `/rest/asset/v1/files.json` | `Rest\Asset\V1\FilesJson::post()` |
| Get Folder by Name | GET | `/rest/asset/v1/folder/byName.json` | `Rest\Asset\V1\Folder\ByNameJson::get()` |
| Get Folder by Id | GET | `/rest/asset/v1/folder/{id}.json` | `Rest\Asset\V1\Folder\IdJson::get()` |
| Update Folder Metadata | POST | `/rest/asset/v1/folder/{id}.json` | `Rest\Asset\V1\Folder\IdJson::post()` |
| Get Folder Contents | GET | `/rest/asset/v1/folder/{id}/content.json` | `Rest\Asset\V1\Folder\ById\ContentJson::get()` |
| Delete Folder | POST | `/rest/asset/v1/folder/{id}/delete.json` | `Rest\Asset\V1\Folder\ById\DeleteJson::post()` |
| Get Tokens by Folder Id | GET | `/rest/asset/v1/folder/{id}/tokens.json` | `Rest\Asset\V1\Folder\ById\TokensJson::get()` |
| Create Token | POST | `/rest/asset/v1/folder/{id}/tokens.json` | `Rest\Asset\V1\Folder\ById\TokensJson::post()` |
| Delete Token by Name | POST | `/rest/asset/v1/folder/{id}/tokens/delete.json` | `Rest\Asset\V1\Folder\ById\Tokens\DeleteJson::post()` |
| Get Folders | GET | `/rest/asset/v1/folders.json` | `Rest\Asset\V1\FoldersJson::get()` |
| Create Folder | POST | `/rest/asset/v1/folders.json` | `Rest\Asset\V1\FoldersJson::post()` |
| Get Form by Name | GET | `/rest/asset/v1/form/byName.json` | `Rest\Asset\V1\Form\ByNameJson::get()` |
| Get Available Form Fields | GET | `/rest/asset/v1/form/fields.json` | `Rest\Asset\V1\Form\FieldsJson::get()` |
| Get Available Form Program Member Fields | GET | `/rest/asset/v1/form/programMemberFields.json` | `Rest\Asset\V1\Form\ProgramMemberFieldsJson::get()` |
| Add Form Field Visibility Rules | POST | `/rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json` | `Rest\Asset\V1\Form\ByFormId\Field\ByFieldId\VisibilityJson::post()` |
| Get Form By Id | GET | `/rest/asset/v1/form/{id}.json` | `Rest\Asset\V1\Form\IdJson::get()` |
| Update Form Metadata | POST | `/rest/asset/v1/form/{id}.json` | `Rest\Asset\V1\Form\IdJson::post()` |
| Approve Form Draft | POST | `/rest/asset/v1/form/{id}/approveDraft.json` | `Rest\Asset\V1\Form\ById\ApproveDraftJson::post()` |
| Clone Form | POST | `/rest/asset/v1/form/{id}/clone.json` | `Rest\Asset\V1\Form\ById\CloneJson::post()` |
| Delete Form | POST | `/rest/asset/v1/form/{id}/delete.json` | `Rest\Asset\V1\Form\ById\DeleteJson::post()` |
| Discard Form Draft | POST | `/rest/asset/v1/form/{id}/discardDraft.json` | `Rest\Asset\V1\Form\ById\DiscardDraftJson::post()` |
| Update Form Field | POST | `/rest/asset/v1/form/{id}/field/{fieldId}.json` | `Rest\Asset\V1\Form\ById\Field\FieldIdJson::post()` |
| Delete Form Field | POST | `/rest/asset/v1/form/{id}/field/{fieldId}/delete.json` | `Rest\Asset\V1\Form\ById\Field\ByFieldId\DeleteJson::post()` |
| Add Fieldset to Form | POST | `/rest/asset/v1/form/{id}/fieldSet.json` | `Rest\Asset\V1\Form\ById\FieldSetJson::post()` |
| Delete Field from Fieldset | POST | `/rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json` | `Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId\DeleteJson::post()` |
| Get Fields for Form | GET | `/rest/asset/v1/form/{id}/fields.json` | `Rest\Asset\V1\Form\ById\FieldsJson::get()` |
| Add Field to Form | POST | `/rest/asset/v1/form/{id}/fields.json` | `Rest\Asset\V1\Form\ById\FieldsJson::post()` |
| Update Field Positions | POST | `/rest/asset/v1/form/{id}/reArrange.json` | `Rest\Asset\V1\Form\ById\ReArrangeJson::post()` |
| Add Rich Text Field | POST | `/rest/asset/v1/form/{id}/richText.json` | `Rest\Asset\V1\Form\ById\RichTextJson::post()` |
| Update Submit Button | POST | `/rest/asset/v1/form/{id}/submitButton.json` | `Rest\Asset\V1\Form\ById\SubmitButtonJson::post()` |
| Get Thank You Page by Form Id | GET | `/rest/asset/v1/form/{id}/thankYouPage.json` | `Rest\Asset\V1\Form\ById\ThankYouPageJson::get()` |
| Update Thank You Page | POST | `/rest/asset/v1/form/{id}/thankYouPage.json` | `Rest\Asset\V1\Form\ById\ThankYouPageJson::post()` |
| Get Form Used By | GET | `/rest/asset/v1/form/{id}/usedBy.json` | `Rest\Asset\V1\Form\ById\UsedByJson::get()` |
| Get Forms | GET | `/rest/asset/v1/forms.json` | `Rest\Asset\V1\FormsJson::get()` |
| Create Form | POST | `/rest/asset/v1/forms.json` | `Rest\Asset\V1\FormsJson::post()` |
| Get Landing Page by Name | GET | `/rest/asset/v1/landingPage/byName.json` | `Rest\Asset\V1\LandingPage\ByNameJson::get()` |
| Get Landing Page by Id | GET | `/rest/asset/v1/landingPage/{id}.json` | `Rest\Asset\V1\LandingPage\IdJson::get()` |
| Update Landing Page Metadata | POST | `/rest/asset/v1/landingPage/{id}.json` | `Rest\Asset\V1\LandingPage\IdJson::post()` |
| Approve Landing Page Draft | POST | `/rest/asset/v1/landingPage/{id}/approveDraft.json` | `Rest\Asset\V1\LandingPage\ById\ApproveDraftJson::post()` |
| Clone Landing Page | POST | `/rest/asset/v1/landingPage/{id}/clone.json` | `Rest\Asset\V1\LandingPage\ById\CloneJson::post()` |
| Get Landing Page Content | GET | `/rest/asset/v1/landingPage/{id}/content.json` | `Rest\Asset\V1\LandingPage\ById\ContentJson::get()` |
| Add Landing Page Content Section | POST | `/rest/asset/v1/landingPage/{id}/content.json` | `Rest\Asset\V1\LandingPage\ById\ContentJson::post()` |
| Update Landing Page Content Section | POST | `/rest/asset/v1/landingPage/{id}/content/{contentId}.json` | `Rest\Asset\V1\LandingPage\ById\Content\ContentIdJson::post()` |
| Delete Landing Page Content Section | POST | `/rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json` | `Rest\Asset\V1\LandingPage\ById\Content\ByContentId\DeleteJson::post()` |
| Delete Landing Page | POST | `/rest/asset/v1/landingPage/{id}/delete.json` | `Rest\Asset\V1\LandingPage\ById\DeleteJson::post()` |
| Discard Landing Page Draft | POST | `/rest/asset/v1/landingPage/{id}/discardDraft.json` | `Rest\Asset\V1\LandingPage\ById\DiscardDraftJson::post()` |
| Get Landing Page Dynamic Content | GET | `/rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json` | `Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson::get()` |
| Update Landing Page Dynamic Content Section | POST | `/rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json` | `Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson::post()` |
| Get Landing Page Full Content | GET | `/rest/asset/v1/landingPage/{id}/fullContent.json` | `Rest\Asset\V1\LandingPage\ById\FullContentJson::get()` |
| Unapprove Landing Page | POST | `/rest/asset/v1/landingPage/{id}/unapprove.json` | `Rest\Asset\V1\LandingPage\ById\UnapproveJson::post()` |
| Update Landing Page Variable | POST | `/rest/asset/v1/landingPage/{id}/variable/{variableId}.json` | `Rest\Asset\V1\LandingPage\ById\Variable\VariableIdJson::post()` |
| Get Landing Page Variables | GET | `/rest/asset/v1/landingPage/{id}/variables.json` | `Rest\Asset\V1\LandingPage\ById\VariablesJson::get()` |
| Get Landing Page Domains | GET | `/rest/asset/v1/landingPageDomains.json` | `Rest\Asset\V1\LandingPageDomainsJson::get()` |
| Get Landing Page Template by Name | GET | `/rest/asset/v1/landingPageTemplate/byName.json` | `Rest\Asset\V1\LandingPageTemplate\ByNameJson::get()` |
| Get Landing Page Template by Id | GET | `/rest/asset/v1/landingPageTemplate/{id}.json` | `Rest\Asset\V1\LandingPageTemplate\IdJson::get()` |
| Update Landing Page Template Metadata | POST | `/rest/asset/v1/landingPageTemplate/{id}.json` | `Rest\Asset\V1\LandingPageTemplate\IdJson::post()` |
| Approve Landing Page Template Draft | POST | `/rest/asset/v1/landingPageTemplate/{id}/approveDraft.json` | `Rest\Asset\V1\LandingPageTemplate\ById\ApproveDraftJson::post()` |
| Clone Landing Page Template | POST | `/rest/asset/v1/landingPageTemplate/{id}/clone.json` | `Rest\Asset\V1\LandingPageTemplate\ById\CloneJson::post()` |
| Get Landing Page Template Content | GET | `/rest/asset/v1/landingPageTemplate/{id}/content.json` | `Rest\Asset\V1\LandingPageTemplate\ById\ContentJson::get()` |
| Update Landing Page Template Content | POST | `/rest/asset/v1/landingPageTemplate/{id}/content.json` | `Rest\Asset\V1\LandingPageTemplate\ById\ContentJson::post()` |
| Delete Landing Page Template | POST | `/rest/asset/v1/landingPageTemplate/{id}/delete.json` | `Rest\Asset\V1\LandingPageTemplate\ById\DeleteJson::post()` |
| Discard Landing Page Template Draft | POST | `/rest/asset/v1/landingPageTemplate/{id}/discardDraft.json` | `Rest\Asset\V1\LandingPageTemplate\ById\DiscardDraftJson::post()` |
| Unapprove Landing Page Template | POST | `/rest/asset/v1/landingPageTemplate/{id}/unapprove.json` | `Rest\Asset\V1\LandingPageTemplate\ById\UnapproveJson::post()` |
| Get Landing Page Templates | GET | `/rest/asset/v1/landingPageTemplates.json` | `Rest\Asset\V1\LandingPageTemplatesJson::get()` |
| Create Landing Page Template | POST | `/rest/asset/v1/landingPageTemplates.json` | `Rest\Asset\V1\LandingPageTemplatesJson::post()` |
| Get Landing Pages | GET | `/rest/asset/v1/landingPages.json` | `Rest\Asset\V1\LandingPagesJson::get()` |
| Create Landing Page | POST | `/rest/asset/v1/landingPages.json` | `Rest\Asset\V1\LandingPagesJson::post()` |
| Get Program by Name | GET | `/rest/asset/v1/program/byName.json` | `Rest\Asset\V1\Program\ByNameJson::get()` |
| Get Programs by Tag | GET | `/rest/asset/v1/program/byTag.json` | `Rest\Asset\V1\Program\ByTagJson::get()` |
| Get Program by Id | GET | `/rest/asset/v1/program/{id}.json` | `Rest\Asset\V1\Program\IdJson::get()` |
| Update Program Metadata | POST | `/rest/asset/v1/program/{id}.json` | `Rest\Asset\V1\Program\IdJson::post()` |
| Approve Program | POST | `/rest/asset/v1/program/{id}/approve.json` | `Rest\Asset\V1\Program\ById\ApproveJson::post()` |
| Clone Program | POST | `/rest/asset/v1/program/{id}/clone.json` | `Rest\Asset\V1\Program\ById\CloneJson::post()` |
| Delete Program | POST | `/rest/asset/v1/program/{id}/delete.json` | `Rest\Asset\V1\Program\ById\DeleteJson::post()` |
| Unapprove Program | POST | `/rest/asset/v1/program/{id}/unapprove.json` | `Rest\Asset\V1\Program\ById\UnapproveJson::post()` |
| Get Smart List by Program Id | GET | `/rest/asset/v1/program/{programId}/smartList.json` | `Rest\Asset\V1\Program\ByProgramId\SmartListJson::get()` |
| Get Programs | GET | `/rest/asset/v1/programs.json` | `Rest\Asset\V1\ProgramsJson::get()` |
| Create Program | POST | `/rest/asset/v1/programs.json` | `Rest\Asset\V1\ProgramsJson::post()` |
| Get Landing Page Redirect Rule by Id | GET | `/rest/asset/v1/redirectRule/{id}.json` | `Rest\Asset\V1\RedirectRule\IdJson::get()` |
| Update Landing Page Redirect Rule | POST | `/rest/asset/v1/redirectRule/{id}.json` | `Rest\Asset\V1\RedirectRule\IdJson::post()` |
| Delete Landing Page Redirect Rule | POST | `/rest/asset/v1/redirectRule/{id}/delete.json` | `Rest\Asset\V1\RedirectRule\ById\DeleteJson::post()` |
| Get Landing Page Redirect Rules | GET | `/rest/asset/v1/redirectRules.json` | `Rest\Asset\V1\RedirectRulesJson::get()` |
| Create Landing Page Redirect Rule | POST | `/rest/asset/v1/redirectRules.json` | `Rest\Asset\V1\RedirectRulesJson::post()` |
| Get Segmentations | GET | `/rest/asset/v1/segmentation.json` | `Rest\Asset\V1\SegmentationJson::get()` |
| Get Segments For Segmentation | GET | `/rest/asset/v1/segmentation/{id}/segments.json` | `Rest\Asset\V1\Segmentation\ById\SegmentsJson::get()` |
| Get Smart Campaign by Name | GET | `/rest/asset/v1/smartCampaign/byName.json` | `Rest\Asset\V1\SmartCampaign\ByNameJson::get()` |
| Get Smart Campaign Flow Step Types | GET | `/rest/asset/v1/smartCampaign/flowStepTypes.json` | `Rest\Asset\V1\SmartCampaign\FlowStepTypesJson::get()` |
| Get Smart Campaign Flow Steps | GET | `/rest/asset/v1/smartCampaign/flowSteps.json` | `Rest\Asset\V1\SmartCampaign\FlowStepsJson::get()` |
| Get Smart Campaign Rules | GET | `/rest/asset/v1/smartCampaign/rules.json` | `Rest\Asset\V1\SmartCampaign\RulesJson::get()` |
| Get Smart Campaign by Id | GET | `/rest/asset/v1/smartCampaign/{id}.json` | `Rest\Asset\V1\SmartCampaign\IdJson::get()` |
| Update Smart Campaign | POST | `/rest/asset/v1/smartCampaign/{id}.json` | `Rest\Asset\V1\SmartCampaign\IdJson::post()` |
| Activate Smart Campaign | POST | `/rest/asset/v1/smartCampaign/{id}/activate.json` | `Rest\Asset\V1\SmartCampaign\ById\ActivateJson::post()` |
| Get Auto Suggest for Smart Campaign | GET | `/rest/asset/v1/smartCampaign/{id}/autoSuggest.json` | `Rest\Asset\V1\SmartCampaign\ById\AutoSuggestJson::get()` |
| Clone Smart Campaign | POST | `/rest/asset/v1/smartCampaign/{id}/clone.json` | `Rest\Asset\V1\SmartCampaign\ById\CloneJson::post()` |
| Deactivate Smart Campaign | POST | `/rest/asset/v1/smartCampaign/{id}/deactivate.json` | `Rest\Asset\V1\SmartCampaign\ById\DeactivateJson::post()` |
| Delete Smart Campaign | POST | `/rest/asset/v1/smartCampaign/{id}/delete.json` | `Rest\Asset\V1\SmartCampaign\ById\DeleteJson::post()` |
| Add Step Choice | POST | `/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/addChoice.json` | `Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\AddChoiceJson::post()` |
| Update Flow Step Choice | POST | `/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}.json` | `Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson::post()` |
| Remove Flow Step Choice | POST | `/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}/remove.json` | `Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\RemoveJson::post()` |
| Reorder Flow Step Choice | POST | `/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}/reorder.json` | `Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\ReorderJson::post()` |
| Remove Flow Step | POST | `/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/remove.json` | `Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\RemoveJson::post()` |
| Add Flow Step | POST | `/rest/asset/v1/smartCampaign/{id}/flows.json` | `Rest\Asset\V1\SmartCampaign\ById\FlowsJson::post()` |
| Get Smart List by Smart Campaign Id | GET | `/rest/asset/v1/smartCampaign/{id}/smartList.json` | `Rest\Asset\V1\SmartCampaign\ById\SmartListJson::get()` |
| Get Smart Campaign Used By | GET | `/rest/asset/v1/smartCampaign/{id}/usedBy.json` | `Rest\Asset\V1\SmartCampaign\ById\UsedByJson::get()` |
| Get Smart Campaigns | GET | `/rest/asset/v1/smartCampaigns.json` | `Rest\Asset\V1\SmartCampaignsJson::get()` |
| Create Smart Campaign | POST | `/rest/asset/v1/smartCampaigns.json` | `Rest\Asset\V1\SmartCampaignsJson::post()` |
| Get Smart List by Name | GET | `/rest/asset/v1/smartList/byName.json` | `Rest\Asset\V1\SmartList\ByNameJson::get()` |
| Get Smart List Rules | GET | `/rest/asset/v1/smartList/rules.json` | `Rest\Asset\V1\SmartList\RulesJson::get()` |
| Get Smart List by Id | GET | `/rest/asset/v1/smartList/{id}.json` | `Rest\Asset\V1\SmartList\IdJson::get()` |
| Get Auto Suggest for Smart List | GET | `/rest/asset/v1/smartList/{id}/autoSuggest.json` | `Rest\Asset\V1\SmartList\ById\AutoSuggestJson::get()` |
| Clone Smart List | POST | `/rest/asset/v1/smartList/{id}/clone.json` | `Rest\Asset\V1\SmartList\ById\CloneJson::post()` |
| Delete Smart List | POST | `/rest/asset/v1/smartList/{id}/delete.json` | `Rest\Asset\V1\SmartList\ById\DeleteJson::post()` |
| Update Filter Logic | POST | `/rest/asset/v1/smartList/{id}/filterLogic.json` | `Rest\Asset\V1\SmartList\ById\FilterLogicJson::post()` |
| Reorder Rules | POST | `/rest/asset/v1/smartList/{id}/reorder.json` | `Rest\Asset\V1\SmartList\ById\ReorderJson::post()` |
| Update Rule | POST | `/rest/asset/v1/smartList/{id}/rule/{ruleId}.json` | `Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson::post()` |
| Delete Rule | POST | `/rest/asset/v1/smartList/{id}/rule/{ruleId}/delete.json` | `Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\DeleteJson::post()` |
| Remove Rule Constraint | POST | `/rest/asset/v1/smartList/{id}/rule/{ruleId}/removeConstraint.json` | `Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson::post()` |
| Add Rule | POST | `/rest/asset/v1/smartList/{id}/rules.json` | `Rest\Asset\V1\SmartList\ById\RulesJson::post()` |
| Delete All Rules | POST | `/rest/asset/v1/smartList/{id}/rules/delete.json` | `Rest\Asset\V1\SmartList\ById\Rules\DeleteJson::post()` |
| Get Smart Lists | GET | `/rest/asset/v1/smartLists.json` | `Rest\Asset\V1\SmartListsJson::get()` |
| Create Smart List | POST | `/rest/asset/v1/smartLists.json` | `Rest\Asset\V1\SmartListsJson::post()` |
| Get Snippet by Id | GET | `/rest/asset/v1/snippet/{id}.json` | `Rest\Asset\V1\Snippet\IdJson::get()` |
| Update Snippet Metadata | POST | `/rest/asset/v1/snippet/{id}.json` | `Rest\Asset\V1\Snippet\IdJson::post()` |
| Approve Snippet Draft | POST | `/rest/asset/v1/snippet/{id}/approveDraft.json` | `Rest\Asset\V1\Snippet\ById\ApproveDraftJson::post()` |
| Clone Snippet | POST | `/rest/asset/v1/snippet/{id}/clone.json` | `Rest\Asset\V1\Snippet\ById\CloneJson::post()` |
| Get Snippet Content | GET | `/rest/asset/v1/snippet/{id}/content.json` | `Rest\Asset\V1\Snippet\ById\ContentJson::get()` |
| Update Snippet Content | POST | `/rest/asset/v1/snippet/{id}/content.json` | `Rest\Asset\V1\Snippet\ById\ContentJson::post()` |
| Delete Snippet | POST | `/rest/asset/v1/snippet/{id}/delete.json` | `Rest\Asset\V1\Snippet\ById\DeleteJson::post()` |
| Discard Snippet Draft | POST | `/rest/asset/v1/snippet/{id}/discardDraft.json` | `Rest\Asset\V1\Snippet\ById\DiscardDraftJson::post()` |
| Get Dynamic Content | GET | `/rest/asset/v1/snippet/{id}/dynamicContent.json` | `Rest\Asset\V1\Snippet\ById\DynamicContentJson::get()` |
| Update Snippet Dynamic Content | POST | `/rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json` | `Rest\Asset\V1\Snippet\ById\DynamicContent\SegmentIdJson::post()` |
| Unapprove Snippet | POST | `/rest/asset/v1/snippet/{id}/unapprove.json` | `Rest\Asset\V1\Snippet\ById\UnapproveJson::post()` |
| Get Snippets | GET | `/rest/asset/v1/snippets.json` | `Rest\Asset\V1\SnippetsJson::get()` |
| Create Snippet | POST | `/rest/asset/v1/snippets.json` | `Rest\Asset\V1\SnippetsJson::post()` |
| Get Static List by Name | GET | `/rest/asset/v1/staticList/byName.json` | `Rest\Asset\V1\StaticList\ByNameJson::get()` |
| Get Static List by Id | GET | `/rest/asset/v1/staticList/{id}.json` | `Rest\Asset\V1\StaticList\IdJson::get()` |
| Update Static List Metadata | POST | `/rest/asset/v1/staticList/{id}.json` | `Rest\Asset\V1\StaticList\IdJson::post()` |
| Delete Static List | POST | `/rest/asset/v1/staticList/{id}/delete.json` | `Rest\Asset\V1\StaticList\ById\DeleteJson::post()` |
| Get Static Lists | GET | `/rest/asset/v1/staticLists.json` | `Rest\Asset\V1\StaticListsJson::get()` |
| Create Static List | POST | `/rest/asset/v1/staticLists.json` | `Rest\Asset\V1\StaticListsJson::post()` |
| Get Tag By Name | GET | `/rest/asset/v1/tagType/byName.json` | `Rest\Asset\V1\TagType\ByNameJson::get()` |
| Get Tag Types | GET | `/rest/asset/v1/tagTypes.json` | `Rest\Asset\V1\TagTypesJson::get()` |
| Create Email | POST | `/rest/asset/v2/email` | `Rest\Asset\V2\Email::post()` |
| Bulk Delete Emails | POST | `/rest/asset/v2/email/bulk/delete` | `Rest\Asset\V2\Email\Bulk\Delete::post()` |
| Bulk Get Emails | POST | `/rest/asset/v2/email/bulk/get` | `Rest\Asset\V2\Email\Bulk\Get::post()` |
| Bulk Get Emails Used By | POST | `/rest/asset/v2/email/bulk/usedby` | `Rest\Asset\V2\Email\Bulk\Usedby::post()` |
| Clone Email | POST | `/rest/asset/v2/email/clone` | `Rest\Asset\V2\Email\CloneResource::post()` |
| List Emails | GET | `/rest/asset/v2/email/filter` | `Rest\Asset\V2\Email\Filter::get()` |
| Update Email Status | POST | `/rest/asset/v2/email/state/transition` | `Rest\Asset\V2\Email\State\Transition::post()` |
| Get Email Used By | POST | `/rest/asset/v2/email/usedby` | `Rest\Asset\V2\Email\Usedby::post()` |
| Get Email by Id | GET | `/rest/asset/v2/email/{id}` | `Rest\Asset\V2\Email::getById()` |
| Delete Email | POST | `/rest/asset/v2/email/{id}/delete` | `Rest\Asset\V2\Email\ById\Delete::post()` |
| Update Email | POST | `/rest/asset/v2/email/{id}/update` | `Rest\Asset\V2\Email\ById\Update::post()` |
| Create Email Template | POST | `/rest/asset/v2/emailtemplate` | `Rest\Asset\V2\Emailtemplate::post()` |
| Bulk Delete Email Templates | POST | `/rest/asset/v2/emailtemplate/bulk/delete` | `Rest\Asset\V2\Emailtemplate\Bulk\Delete::post()` |
| Bulk Get Email Templates | POST | `/rest/asset/v2/emailtemplate/bulk/get` | `Rest\Asset\V2\Emailtemplate\Bulk\Get::post()` |
| Bulk Get Email Templates Used By | POST | `/rest/asset/v2/emailtemplate/bulk/usedby` | `Rest\Asset\V2\Emailtemplate\Bulk\Usedby::post()` |
| Clone Email Template | POST | `/rest/asset/v2/emailtemplate/clone` | `Rest\Asset\V2\Emailtemplate\CloneResource::post()` |
| List Email Templates | GET | `/rest/asset/v2/emailtemplate/filter` | `Rest\Asset\V2\Emailtemplate\Filter::get()` |
| Update Email Template Status | POST | `/rest/asset/v2/emailtemplate/state/transition` | `Rest\Asset\V2\Emailtemplate\State\Transition::post()` |
| Get Email Template Used By | POST | `/rest/asset/v2/emailtemplate/usedby` | `Rest\Asset\V2\Emailtemplate\Usedby::post()` |
| Get Email Template by Id | GET | `/rest/asset/v2/emailtemplate/{id}` | `Rest\Asset\V2\Emailtemplate::getById()` |
| Delete Email Template | POST | `/rest/asset/v2/emailtemplate/{id}/delete` | `Rest\Asset\V2\Emailtemplate\ById\Delete::post()` |
| Update Email Template | POST | `/rest/asset/v2/emailtemplate/{id}/update` | `Rest\Asset\V2\Emailtemplate\ById\Update::post()` |
| Create Fragment | POST | `/rest/asset/v2/fragment` | `Rest\Asset\V2\Fragment::post()` |
| Bulk Delete Fragments | POST | `/rest/asset/v2/fragment/bulk/delete` | `Rest\Asset\V2\Fragment\Bulk\Delete::post()` |
| Bulk Get Fragments | POST | `/rest/asset/v2/fragment/bulk/get` | `Rest\Asset\V2\Fragment\Bulk\Get::post()` |
| Bulk Get Fragments Used By | POST | `/rest/asset/v2/fragment/bulk/usedby` | `Rest\Asset\V2\Fragment\Bulk\Usedby::post()` |
| Clone Fragment | POST | `/rest/asset/v2/fragment/clone` | `Rest\Asset\V2\Fragment\CloneResource::post()` |
| List Fragments | GET | `/rest/asset/v2/fragment/filter` | `Rest\Asset\V2\Fragment\Filter::get()` |
| Update Fragment Status | POST | `/rest/asset/v2/fragment/state/transition` | `Rest\Asset\V2\Fragment\State\Transition::post()` |
| Get Fragment Used By | POST | `/rest/asset/v2/fragment/usedby` | `Rest\Asset\V2\Fragment\Usedby::post()` |
| Get Fragment by Id | GET | `/rest/asset/v2/fragment/{id}` | `Rest\Asset\V2\Fragment::getById()` |
| Delete Fragment | POST | `/rest/asset/v2/fragment/{id}/delete` | `Rest\Asset\V2\Fragment\ById\Delete::post()` |
| Update Fragment | POST | `/rest/asset/v2/fragment/{id}/update` | `Rest\Asset\V2\Fragment\ById\Update::post()` |
| Get Lead Activities | GET | `/rest/v1/activities.json` | `Rest\V1\ActivitiesJson::get()` |
| Get Deleted Leads | GET | `/rest/v1/activities/deletedleads.json` | `Rest\V1\Activities\DeletedleadsJson::get()` |
| Add Custom Activities | POST | `/rest/v1/activities/external.json` | `Rest\V1\Activities\ExternalJson::post()` |
| Create Custom Activity Type | POST | `/rest/v1/activities/external/type.json` | `Rest\V1\Activities\External\TypeJson::post()` |
| Update Custom Activity Type | POST | `/rest/v1/activities/external/type/{apiName}.json` | `Rest\V1\Activities\External\Type\ApiNameJson::post()` |
| Approve Custom Activity Type | POST | `/rest/v1/activities/external/type/{apiName}/approve.json` | `Rest\V1\Activities\External\Type\ByApiName\ApproveJson::post()` |
| Create Custom Activity Type Attributes | POST | `/rest/v1/activities/external/type/{apiName}/attributes/create.json` | `Rest\V1\Activities\External\Type\ByApiName\Attributes\CreateJson::post()` |
| Delete Custom Activity Type Attributes | POST | `/rest/v1/activities/external/type/{apiName}/attributes/delete.json` | `Rest\V1\Activities\External\Type\ByApiName\Attributes\DeleteJson::post()` |
| Update Custom Activity Type Attributes | POST | `/rest/v1/activities/external/type/{apiName}/attributes/update.json` | `Rest\V1\Activities\External\Type\ByApiName\Attributes\UpdateJson::post()` |
| Delete Custom Activity Type | POST | `/rest/v1/activities/external/type/{apiName}/delete.json` | `Rest\V1\Activities\External\Type\ByApiName\DeleteJson::post()` |
| Describe Custom Activity Type | GET | `/rest/v1/activities/external/type/{apiName}/describe.json` | `Rest\V1\Activities\External\Type\ByApiName\DescribeJson::get()` |
| Discard Custom Activity Type Draft | POST | `/rest/v1/activities/external/type/{apiName}/discardDraft.json` | `Rest\V1\Activities\External\Type\ByApiName\DiscardDraftJson::post()` |
| Get Custom Activity Types | GET | `/rest/v1/activities/external/types.json` | `Rest\V1\Activities\External\TypesJson::get()` |
| Get Lead Changes | GET | `/rest/v1/activities/leadchanges.json` | `Rest\V1\Activities\LeadchangesJson::get()` |
| Get Paging Token | GET | `/rest/v1/activities/pagingtoken.json` | `Rest\V1\Activities\PagingtokenJson::get()` |
| Get Activity Types | GET | `/rest/v1/activities/types.json` | `Rest\V1\Activities\TypesJson::get()` |
| Get Campaigns | GET | `/rest/v1/campaigns.json` | `Rest\V1\CampaignsJson::get()` |
| Get Campaign By Id | GET | `/rest/v1/campaigns/{campaignId}.json` | `Rest\V1\Campaigns\CampaignIdJson::get()` |
| Schedule Campaign | POST | `/rest/v1/campaigns/{campaignId}/schedule.json` | `Rest\V1\Campaigns\ByCampaignId\ScheduleJson::post()` |
| Request Campaign | POST | `/rest/v1/campaigns/{campaignId}/trigger.json` | `Rest\V1\Campaigns\ByCampaignId\TriggerJson::post()` |
| Get Companies | GET | `/rest/v1/companies.json` | `Rest\V1\CompaniesJson::get()` |
| Sync Companies | POST | `/rest/v1/companies.json` | `Rest\V1\CompaniesJson::post()` |
| Delete Companies | POST | `/rest/v1/companies/delete.json` | `Rest\V1\Companies\DeleteJson::post()` |
| Describe Companies | GET | `/rest/v1/companies/describe.json` | `Rest\V1\Companies\DescribeJson::get()` |
| Get Company Fields | GET | `/rest/v1/companies/schema/fields.json` | `Rest\V1\Companies\Schema\FieldsJson::get()` |
| Get Company Field by Name | GET | `/rest/v1/companies/schema/fields/{fieldApiName}.json` | `Rest\V1\Companies\Schema\Fields\FieldApiNameJson::get()` |
| List Custom Objects | GET | `/rest/v1/customobjects.json` | `Rest\V1\CustomobjectsJson::get()` |
| List Custom Object Types | GET | `/rest/v1/customobjects/schema.json` | `Rest\V1\Customobjects\SchemaJson::get()` |
| Sync Custom Object Type | POST | `/rest/v1/customobjects/schema.json` | `Rest\V1\Customobjects\SchemaJson::post()` |
| Get Custom Object Type Field Data Types | GET | `/rest/v1/customobjects/schema/fieldDataTypes.json` | `Rest\V1\Customobjects\Schema\FieldDataTypesJson::get()` |
| Get Custom Object Linkable Objects | GET | `/rest/v1/customobjects/schema/linkableObjects.json` | `Rest\V1\Customobjects\Schema\LinkableObjectsJson::get()` |
| Add Custom Object Type Fields | POST | `/rest/v1/customobjects/schema/{apiName}/addField.json` | `Rest\V1\Customobjects\Schema\ByApiName\AddFieldJson::post()` |
| Approve Custom Object Type | POST | `/rest/v1/customobjects/schema/{apiName}/approve.json` | `Rest\V1\Customobjects\Schema\ByApiName\ApproveJson::post()` |
| Delete Custom Object Type | POST | `/rest/v1/customobjects/schema/{apiName}/delete.json` | `Rest\V1\Customobjects\Schema\ByApiName\DeleteJson::post()` |
| Delete Custom Object Type Fields | POST | `/rest/v1/customobjects/schema/{apiName}/deleteField.json` | `Rest\V1\Customobjects\Schema\ByApiName\DeleteFieldJson::post()` |
| Get Custom Object Dependent Assets | GET | `/rest/v1/customobjects/schema/{apiName}/dependentAssets.json` | `Rest\V1\Customobjects\Schema\ByApiName\DependentAssetsJson::get()` |
| Describe Custom Object Type | GET | `/rest/v1/customobjects/schema/{apiName}/describe.json` | `Rest\V1\Customobjects\Schema\ByApiName\DescribeJson::get()` |
| Discard Custom Object Type Draft | POST | `/rest/v1/customobjects/schema/{apiName}/discardDraft.json` | `Rest\V1\Customobjects\Schema\ByApiName\DiscardDraftJson::post()` |
| Update Custom Object Type Field | POST | `/rest/v1/customobjects/schema/{apiName}/{fieldApiName}/updateField.json` | `Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName\UpdateFieldJson::post()` |
| Get Custom Objects | GET | `/rest/v1/customobjects/{customObjectName}.json` | `Rest\V1\Customobjects\CustomObjectNameJson::get()` |
| Sync Custom Objects | POST | `/rest/v1/customobjects/{customObjectName}.json` | `Rest\V1\Customobjects\CustomObjectNameJson::post()` |
| Delete Custom Objects | POST | `/rest/v1/customobjects/{customObjectName}/delete.json` | `Rest\V1\Customobjects\ByCustomObjectName\DeleteJson::post()` |
| Describe Custom Objects | GET | `/rest/v1/customobjects/{customObjectName}/describe.json` | `Rest\V1\Customobjects\ByCustomObjectName\DescribeJson::get()` |
| Get Lead by Id | GET | `/rest/v1/lead/{leadId}.json` | `Rest\V1\Lead\LeadIdJson::get()` |
| Get Leads by Filter Type | GET | `/rest/v1/leads.json` | `Rest\V1\LeadsJson::get()` |
| Sync Leads | POST | `/rest/v1/leads.json` | `Rest\V1\LeadsJson::post()` |
| Delete Leads | POST | `/rest/v1/leads/delete.json` | `Rest\V1\Leads\DeleteJson::post()` |
| Describe Lead | GET | `/rest/v1/leads/describe.json` | `Rest\V1\Leads\DescribeJson::get()` |
| Describe Lead2 | GET | `/rest/v1/leads/describe2.json` | `Rest\V1\Leads\Describe2Json::get()` |
| Get Lead Partitions | GET | `/rest/v1/leads/partitions.json` | `Rest\V1\Leads\PartitionsJson::get()` |
| Update Lead Partition | POST | `/rest/v1/leads/partitions.json` | `Rest\V1\Leads\PartitionsJson::post()` |
| Get Leads by Program Id | GET | `/rest/v1/leads/programs/{programId}.json` | `Rest\V1\Leads\Programs\ProgramIdJson::get()` |
| Change Lead Program Status | POST | `/rest/v1/leads/programs/{programId}/status.json` | `Rest\V1\Leads\Programs\ByProgramId\StatusJson::post()` |
| Push Lead to Marketo | POST | `/rest/v1/leads/push.json` | `Rest\V1\Leads\PushJson::post()` |
| Get Lead Fields | GET | `/rest/v1/leads/schema/fields.json` | `Rest\V1\Leads\Schema\FieldsJson::get()` |
| Create Lead Fields | POST | `/rest/v1/leads/schema/fields.json` | `Rest\V1\Leads\Schema\FieldsJson::post()` |
| Get Lead Field by Name | GET | `/rest/v1/leads/schema/fields/{fieldApiName}.json` | `Rest\V1\Leads\Schema\Fields\FieldApiNameJson::get()` |
| Update Lead Field | POST | `/rest/v1/leads/schema/fields/{fieldApiName}.json` | `Rest\V1\Leads\Schema\Fields\FieldApiNameJson::post()` |
| Submit Form | POST | `/rest/v1/leads/submitForm.json` | `Rest\V1\Leads\SubmitFormJson::post()` |
| Associate Lead | POST | `/rest/v1/leads/{leadId}/associate.json` | `Rest\V1\Leads\ByLeadId\AssociateJson::post()` |
| Get Lists by Lead Id | GET | `/rest/v1/leads/{leadId}/listMembership.json` | `Rest\V1\Leads\ByLeadId\ListMembershipJson::get()` |
| Merge Leads | POST | `/rest/v1/leads/{leadId}/merge.json` | `Rest\V1\Leads\ByLeadId\MergeJson::post()` |
| Get Programs by Lead Id | GET | `/rest/v1/leads/{leadId}/programMembership.json` | `Rest\V1\Leads\ByLeadId\ProgramMembershipJson::get()` |
| Get Smart Campaigns by Lead Id | GET | `/rest/v1/leads/{leadId}/smartCampaignMembership.json` | `Rest\V1\Leads\ByLeadId\SmartCampaignMembershipJson::get()` |
| Get Leads By List Id | GET | `/rest/v1/list/{listId}/leads.json` | `Rest\V1\ListResource\ByListId\LeadsJson::get()` |
| Get Lists | GET | `/rest/v1/lists.json` | `Rest\V1\ListsJson::get()` |
| Get List by Id | GET | `/rest/v1/lists/{listId}.json` | `Rest\V1\Lists\ListIdJson::get()` |
| Remove from List | DELETE | `/rest/v1/lists/{listId}/leads.json` | `Rest\V1\Lists\ByListId\LeadsJson::delete()` |
| Get Leads By List Id | GET | `/rest/v1/lists/{listId}/leads.json` | `Rest\V1\Lists\ByListId\LeadsJson::get()` |
| Add to List | POST | `/rest/v1/lists/{listId}/leads.json` | `Rest\V1\Lists\ByListId\LeadsJson::post()` |
| Member of List | GET | `/rest/v1/lists/{listId}/leads/ismember.json` | `Rest\V1\Lists\ByListId\Leads\IsmemberJson::get()` |
| Get Named Account List Members | GET | `/rest/v1/namedAccountList/{id}/namedAccounts.json` | `Rest\V1\NamedAccountList\ById\NamedAccountsJson::get()` |
| Add Named Account List Members | POST | `/rest/v1/namedAccountList/{id}/namedAccounts.json` | `Rest\V1\NamedAccountList\ById\NamedAccountsJson::post()` |
| Remove Named Account List Members | POST | `/rest/v1/namedAccountList/{id}/namedAccounts/remove.json` | `Rest\V1\NamedAccountList\ById\NamedAccounts\RemoveJson::post()` |
| Get Named Account Lists | GET | `/rest/v1/namedAccountLists.json` | `Rest\V1\NamedAccountListsJson::get()` |
| Sync Named Account Lists | POST | `/rest/v1/namedAccountLists.json` | `Rest\V1\NamedAccountListsJson::post()` |
| Delete Named Account Lists | POST | `/rest/v1/namedAccountLists/delete.json` | `Rest\V1\NamedAccountLists\DeleteJson::post()` |
| Get NamedAccounts | GET | `/rest/v1/namedaccounts.json` | `Rest\V1\NamedaccountsJson::get()` |
| Sync NamedAccounts | POST | `/rest/v1/namedaccounts.json` | `Rest\V1\NamedaccountsJson::post()` |
| Delete NamedAccounts | POST | `/rest/v1/namedaccounts/delete.json` | `Rest\V1\Namedaccounts\DeleteJson::post()` |
| Describe NamedAccounts | GET | `/rest/v1/namedaccounts/describe.json` | `Rest\V1\Namedaccounts\DescribeJson::get()` |
| Get Named Account Fields | GET | `/rest/v1/namedaccounts/schema/fields.json` | `Rest\V1\Namedaccounts\Schema\FieldsJson::get()` |
| Get Named Account Field by Name | GET | `/rest/v1/namedaccounts/schema/fields/{fieldApiName}.json` | `Rest\V1\Namedaccounts\Schema\Fields\FieldApiNameJson::get()` |
| Get Opportunities | GET | `/rest/v1/opportunities.json` | `Rest\V1\OpportunitiesJson::get()` |
| Sync Opportunities | POST | `/rest/v1/opportunities.json` | `Rest\V1\OpportunitiesJson::post()` |
| Delete Opportunities | POST | `/rest/v1/opportunities/delete.json` | `Rest\V1\Opportunities\DeleteJson::post()` |
| Describe Opportunity | GET | `/rest/v1/opportunities/describe.json` | `Rest\V1\Opportunities\DescribeJson::get()` |
| Get Opportunity Roles | GET | `/rest/v1/opportunities/roles.json` | `Rest\V1\Opportunities\RolesJson::get()` |
| Sync Opportunity Roles | POST | `/rest/v1/opportunities/roles.json` | `Rest\V1\Opportunities\RolesJson::post()` |
| Delete Opportunity Roles | POST | `/rest/v1/opportunities/roles/delete.json` | `Rest\V1\Opportunities\Roles\DeleteJson::post()` |
| Describe Opportunity Role | GET | `/rest/v1/opportunities/roles/describe.json` | `Rest\V1\Opportunities\Roles\DescribeJson::get()` |
| Get Opportunity Fields | GET | `/rest/v1/opportunities/schema/fields.json` | `Rest\V1\Opportunities\Schema\FieldsJson::get()` |
| Get Opportunity Field by Name | GET | `/rest/v1/opportunities/schema/fields/{fieldApiName}.json` | `Rest\V1\Opportunities\Schema\Fields\FieldApiNameJson::get()` |
| Describe Program Member | GET | `/rest/v1/program/members/describe.json` | `Rest\V1\Program\Members\DescribeJson::get()` |
| Describe Program Member | GET | `/rest/v1/programs/members/describe.json` | `Rest\V1\Programs\Members\DescribeJson::get()` |
| Get Program Member Fields | GET | `/rest/v1/programs/members/schema/fields.json` | `Rest\V1\Programs\Members\Schema\FieldsJson::get()` |
| Create Program Member Fields | POST | `/rest/v1/programs/members/schema/fields.json` | `Rest\V1\Programs\Members\Schema\FieldsJson::post()` |
| Get Program Member Field by Name | GET | `/rest/v1/programs/members/schema/fields/{fieldApiName}.json` | `Rest\V1\Programs\Members\Schema\Fields\FieldApiNameJson::get()` |
| Update Program Member Field | POST | `/rest/v1/programs/members/schema/fields/{fieldApiName}.json` | `Rest\V1\Programs\Members\Schema\Fields\FieldApiNameJson::post()` |
| Get Program Members | GET | `/rest/v1/programs/{programId}/members.json` | `Rest\V1\Programs\ByProgramId\MembersJson::get()` |
| Sync Program Member Data | POST | `/rest/v1/programs/{programId}/members.json` | `Rest\V1\Programs\ByProgramId\MembersJson::post()` |
| Delete Program Members | POST | `/rest/v1/programs/{programId}/members/delete.json` | `Rest\V1\Programs\ByProgramId\Members\DeleteJson::post()` |
| Sync Program Member Status | POST | `/rest/v1/programs/{programId}/members/status.json` | `Rest\V1\Programs\ByProgramId\Members\StatusJson::post()` |
| Get SalesPersons | GET | `/rest/v1/salespersons.json` | `Rest\V1\SalespersonsJson::get()` |
| Sync SalesPersons | POST | `/rest/v1/salespersons.json` | `Rest\V1\SalespersonsJson::post()` |
| Delete SalesPersons | POST | `/rest/v1/salespersons/delete.json` | `Rest\V1\Salespersons\DeleteJson::post()` |
| Describe SalesPersons | GET | `/rest/v1/salespersons/describe.json` | `Rest\V1\Salespersons\DescribeJson::get()` |
| Get Daily Errors | GET | `/rest/v1/stats/errors.json` | `Rest\V1\Stats\ErrorsJson::get()` |
| Get Weekly Errors | GET | `/rest/v1/stats/errors/last7days.json` | `Rest\V1\Stats\Errors\Last7daysJson::get()` |
| Get Daily Usage | GET | `/rest/v1/stats/usage.json` | `Rest\V1\Stats\UsageJson::get()` |
| Get Weekly Usage | GET | `/rest/v1/stats/usage/last7days.json` | `Rest\V1\Stats\Usage\Last7daysJson::get()` |
| Get Users | GET | `/userservice/management/v1/users/allusers.json` | `Userservice\Management\V1\Users\AllusersJson::get()` |
| Invite User | POST | `/userservice/management/v1/users/invite.json` | `Userservice\Management\V1\Users\InviteJson::post()` |
| Get Roles | GET | `/userservice/management/v1/users/roles.json` | `Userservice\Management\V1\Users\RolesJson::get()` |
| Get Workspaces | GET | `/userservice/management/v1/users/workspaces.json` | `Userservice\Management\V1\Users\WorkspacesJson::get()` |
| Delete User | POST | `/userservice/management/v1/users/{userid}/delete.json` | `Userservice\Management\V1\Users\ByUserid\DeleteJson::post()` |
| Get Invited User by Id | GET | `/userservice/management/v1/users/{userid}/invite.json` | `Userservice\Management\V1\Users\ByUserid\InviteJson::get()` |
| Delete Invited User | POST | `/userservice/management/v1/users/{userid}/invite/delete.json` | `Userservice\Management\V1\Users\ByUserid\Invite\DeleteJson::post()` |
| Get Roles and Workspaces by Id | GET | `/userservice/management/v1/users/{userid}/roles.json` | `Userservice\Management\V1\Users\ByUserid\RolesJson::get()` |
| Add Roles | POST | `/userservice/management/v1/users/{userid}/roles/create.json` | `Userservice\Management\V1\Users\ByUserid\Roles\CreateJson::post()` |
| Delete Roles | POST | `/userservice/management/v1/users/{userid}/roles/delete.json` | `Userservice\Management\V1\Users\ByUserid\Roles\DeleteJson::post()` |
| Update User Attributes | POST | `/userservice/management/v1/users/{userid}/update.json` | `Userservice\Management\V1\Users\ByUserid\UpdateJson::post()` |
| Get User by Id | GET | `/userservice/management/v1/users/{userid}/user.json` | `Userservice\Management\V1\Users\ByUserid\UserJson::get()` |
