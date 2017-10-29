<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getusersinfo?version=11 GetUsersInfo Request Object
     * 
     * @uses UserLifeCycleStatus
     * @used-by BingAdsCustomerManagementService::GetUsersInfo
     */
    final class GetUsersInfoRequest
    {
        /**
         * The identifier of the customer to which the users belong.
         * @var integer
         */
        public $CustomerId;

        /**
         * The status value that the operation uses to filter the list of users that it returns.
         * @var UserLifeCycleStatus
         */
        public $StatusFilter;
    }
}
