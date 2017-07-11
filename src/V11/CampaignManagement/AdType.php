<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the type of ad.
     * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.110).aspx AdType Value Set
     * 
     * @used-by Ad
     * @used-by GetAdsByAdGroupIdRequest
     * @used-by GetAdsByEditorialStatusRequest
     * @used-by GetAdsByIdsRequest
     */
    final class AdType
    {
        /** Refers to a TextAd. */
        const Text = 'Text';

        /** Reserved for future use. */
        const Image = 'Image';

        /** Refers to a ProductAd. */
        const Product = 'Product';

        /** Refers to an AppInstallAd. */
        const AppInstall = 'AppInstall';

        /** Refers to an ExpandedTextAd. */
        const ExpandedText = 'ExpandedText';

        /** Refers to a DynamicSearchAd. */
        const DynamicSearch = 'DynamicSearch';
    }

}
