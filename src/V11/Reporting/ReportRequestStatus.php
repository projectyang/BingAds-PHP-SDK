<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb672100(v=msads.110).aspx ReportRequestStatus Data Object
     * 
     * @uses ReportRequestStatusType
     * @used-by PollGenerateReportResponse
     */
    final class ReportRequestStatus
    {
        /**
         * The URL from where the report can be downloaded.
         * @var string
         */
        public $ReportDownloadUrl;

        /**
         * The status of a report request.
         * @var ReportRequestStatusType
         */
        public $Status;
    }

}
