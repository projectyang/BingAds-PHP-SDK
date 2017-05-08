<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the geographical locations of users who have searched for the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219328(v=msads.110).aspx GetKeywordLocations Request Object
     * 
     * @used-by BingAdsAdInsightService::GetKeywordLocations
     */
    final class GetKeywordLocationsRequest
    {
        /**
         * An array of keywords for which you want to get geographical location information.
         * @var string[]
         */
        public $Keywords;

        /**
         * The language in which the keywords are written.
         * @var string
         */
        public $Language;

        /**
         * The country code of the country/region to use as the source of the location data.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A list of one or more of the following device types: Computers, NonSmartphones, Smartphones, Tablets.
         * @var string[]
         */
        public $Device;

        /**
         * The level at which to aggregate the geographical location data.
         * @var integer
         */
        public $Level;

        /**
         * The country from which the search originated.
         * @var string
         */
        public $ParentCountry;

        /**
         * The maximum number of locations to return.
         * @var integer
         */
        public $MaxLocations;
    }
}
