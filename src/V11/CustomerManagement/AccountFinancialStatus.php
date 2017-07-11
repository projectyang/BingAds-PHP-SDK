<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible financial status values of an account.
     * @link http://msdn.microsoft.com/en-us/library/ff728399(v=msads.110).aspx AccountFinancialStatus Value Set
     * 
     * @used-by Account
     */
    final class AccountFinancialStatus
    {
        /** For an advertiser account, this status indicates that the customer can add campaigns to the account; however, the service will not deliver the account's ads. */
        const Proposed = 'Proposed';

        /** Not used. */
        const PendingCreditCheck = 'PendingCreditCheck';

        /** The account is in good standing. */
        const ClearFinancialStatus = 'ClearFinancialStatus';

        /** Not used. */
        const SoldToOnly = 'SoldToOnly';

        /** Not used. */
        const CreditWarning = 'CreditWarning';

        /** For an advertiser account, this status indicates that the account is past due. */
        const Hold = 'Hold';

        /** The account is past due; however, collection is no longer being pursued. */
        const WriteOff = 'WriteOff';

        /** For a publisher account, this status indicates that the publisher has yet to provide a valid tax instrument. */
        const TaxOnHold = 'TaxOnHold';

        /** For a publisher account, this status indicates that the payout to the publisher was placed on hold by publisher. */
        const UserHold = 'UserHold';
    }

}
