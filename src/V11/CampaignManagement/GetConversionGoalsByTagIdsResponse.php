<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the conversion goals that use the specified UET tags.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getconversiongoalsbytagids?version=11 GetConversionGoalsByTagIds Response Object
     * 
     * @uses ConversionGoal
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByTagIds
     */
    final class GetConversionGoalsByTagIdsResponse
    {
        /**
         * The list of conversion goals do not correspond directly to the tag identifiers specified in the request because there can be multiple conversion goals that use the same tag identifier specified in the request.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
