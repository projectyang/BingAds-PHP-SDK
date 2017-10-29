<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads on specific devices.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/devicecriterion?version=11 DeviceCriterion Data Object
     */
    final class DeviceCriterion extends Criterion
    {
        /**
         * The name of the device to target.
         * @var string
         */
        public $DeviceName;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $OSName;
    }

}
