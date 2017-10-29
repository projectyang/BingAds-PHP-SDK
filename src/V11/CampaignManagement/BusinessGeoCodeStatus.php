<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/businessgeocodestatus?version=11 BusinessGeoCodeStatus Value Set
     * 
     * @used-by LocationAdExtension
     */
    final class BusinessGeoCodeStatus
    {
        /** In the process of determining the latitude and longitude of the business. */
        const Pending = 'Pending';

        /** Successfully determined the latitude and longitude of the business. */
        const Complete = 'Complete';

        /** Unable to determine the latitude and longitude of the business, possibly because the address did not resolve. */
        const Invalid = 'Invalid';

        /** Unable to determine the latitude and longitude of the business. */
        const Failed = 'Failed';
    }

}
