<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines properties for revenue that can be tracked by a conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/conversiongoalrevenue?version=11 ConversionGoalRevenue Data Object
     * 
     * @uses ConversionGoalRevenueType
     * @used-by ConversionGoal
     */
    final class ConversionGoalRevenue
    {
        /**
         * The currency type that you want the conversion goal revenue to be reported.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Determines how revenue is tracked.
         * @var ConversionGoalRevenueType
         */
        public $Type;

        /**
         * The revenue value or amount.
         * @var float
         */
        public $Value;
    }

}
