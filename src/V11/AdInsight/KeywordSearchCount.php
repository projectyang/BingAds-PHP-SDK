<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a list of search counts for each device and network where the keyword was included in a search query.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordsearchcount?version=11 KeywordSearchCount Data Object
     * 
     * @uses SearchCountsByAttributes
     * @used-by GetHistoricalSearchCountResponse
     */
    final class KeywordSearchCount
    {
        /**
         * The keyword to which the search count data applies.
         * @var string
         */
        public $Keyword;

        /**
         * An array of SearchCountsByAttributes objects that contain search counts for each device and network where the keyword was included in a search query.
         * @var SearchCountsByAttributes[]
         */
        public $SearchCountsByAttributes;
    }

}
