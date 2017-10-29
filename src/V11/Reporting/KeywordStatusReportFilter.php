<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the keyword status values that you can use to filter the report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/keywordstatusreportfilter?version=11 KeywordStatusReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by NegativeKeywordConflictReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class KeywordStatusReportFilter
    {
        /** The report will contain keywords that are active. */
        const Active = 'Active';

        /** The report will contain keywords that are paused. */
        const Paused = 'Paused';

        /** The report will contain keywords that have been deleted. */
        const Deleted = 'Deleted';
    }

}
