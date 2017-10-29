<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/getbillingdocumentsinfo?version=11 GetBillingDocumentsInfo Response Object
     * 
     * @uses BillingDocumentInfo
     * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
     */
    final class GetBillingDocumentsInfoResponse
    {
        /**
         * The list of billing document information objects that were retrieved.
         * @var BillingDocumentInfo[]
         */
        public $BillingDocumentsInfo;
    }
}
