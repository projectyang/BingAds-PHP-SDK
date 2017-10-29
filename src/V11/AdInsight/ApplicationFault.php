<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the base object from which all fault detail objects derive.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/applicationfault?version=11 ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

}
