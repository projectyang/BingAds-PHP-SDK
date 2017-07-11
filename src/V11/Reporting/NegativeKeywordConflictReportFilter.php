<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the negative keyword conflict report data.
     * @link http://msdn.microsoft.com/en-us/library/mt706469(v=msads.110).aspx NegativeKeywordConflictReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses KeywordStatusReportFilter
     * @used-by NegativeKeywordConflictReportRequest
     */
    final class NegativeKeywordConflictReportFilter
    {
        /**
         * The report will only include data for accounts with the specified status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will only include data for ad groups with the specified status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will only include data for campaigns with the specified status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will only include data for keywords with the specified status.
         * @var KeywordStatusReportFilter
         */
        public $KeywordStatus;
    }

}
