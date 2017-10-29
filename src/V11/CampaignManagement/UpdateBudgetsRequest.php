<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatebudgets?version=11 UpdateBudgets Request Object
     * 
     * @uses Budget
     * @used-by BingAdsCampaignManagementService::UpdateBudgets
     */
    final class UpdateBudgetsRequest
    {
        /**
         * An array of Budget objects to update in the account's shared budget library.
         * @var Budget[]
         */
        public $Budgets;
    }
}
