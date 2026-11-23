<?php

global $reports, $dim;

$reports->addReport(RC_SUPPLIER, "_check_print",_('Printable &Check'),
    array(  _('Payment') => 'REMITTANCE',
            _('Check at top of page') => 'YES_NO',
            _('Print memo on check') => 'YES_NO',
            _('Omit payee address') => 'YES_NO',
            _('Destination') => 'DESTINATION'));
