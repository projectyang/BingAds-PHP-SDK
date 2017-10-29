<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified Universal Event Tracking (UET) tags.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getuettagsbyids?version=11 GetUetTagsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetUetTagsByIds
     */
    final class GetUetTagsByIdsRequest
    {
        /**
         * A maximum of 100 identifiers of the UET tags that you want to get.
         * @var integer[]
         */
        public $TagIds;
    }
}
