<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getnegativesitesbycampaignids?version=11 GetNegativeSitesByCampaignIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsRequest
    {
        /**
         * The identifier of the account that contains the campaigns.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of identifiers of the campaigns that contain the negative site URLs that you want to get.
         * @var integer[]
         */
        public $CampaignIds;
    }
}
