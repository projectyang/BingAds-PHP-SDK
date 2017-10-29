<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an ad extension that includes between 3 and 8 price table rows.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/priceadextension?version=11 PriceAdExtension Data Object
     * 
     * @uses PriceExtensionType
     * @uses PriceTableRow
     * @uses CustomParameters
     */
    final class PriceAdExtension extends AdExtension
    {
        /**
         * The language for the ad copy of your price ad extension.
         * @var string
         */
        public $Language;

        /**
         * The type of the price ad extension.
         * @var PriceExtensionType
         */
        public $PriceExtensionType;

        /**
         * The price table rows.
         * @var PriceTableRow[]
         */
        public $TableRows;

        /**
         * The tracking template to use as a default for all landing page URLs.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
