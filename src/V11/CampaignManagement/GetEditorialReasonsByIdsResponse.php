<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/geteditorialreasonsbyids?version=11 GetEditorialReasonsByIds Response Object
     * 
     * @uses EditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsResponse
    {
        /**
         * An array of EditorialReasonCollection objects that corresponds directly to the EntityIdToParentIdAssociation objects that you specified in the request.
         * @var EditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
