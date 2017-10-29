<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified ads from the specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadsbyids?version=11 GetAdsByIds Response Object
     * 
     * @uses Ad
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsResponse
    {
        /**
         * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request.
         * @var Ad[]
         */
        public $Ads;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
