<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addbudgets?version=11 AddBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBudgets
     */
    final class AddBudgetsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the budgets that were added.
         * @var integer[]
         */
        public $BudgetIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
