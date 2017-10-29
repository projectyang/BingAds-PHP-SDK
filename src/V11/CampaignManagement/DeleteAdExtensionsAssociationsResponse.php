<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteadextensionsassociations?version=11 DeleteAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
