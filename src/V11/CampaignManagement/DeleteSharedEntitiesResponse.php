<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.110).aspx DeleteSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
