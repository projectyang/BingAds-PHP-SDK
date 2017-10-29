<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible formats of the body of an email message.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/emailformat?version=11 EmailFormat Value Set
     * 
     * @used-by ContactInfo
     */
    final class EmailFormat
    {
        /** The format of the body of the email message is HTML. */
        const Html = 'Html';

        /** The format of the body of the email message is plain text. */
        const Text = 'Text';
    }

}
