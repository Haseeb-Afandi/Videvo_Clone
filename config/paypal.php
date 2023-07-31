<?php 
return [ 
    'client_id' => 'ASiXAqVrda_mTgwHIdX2xk536fMh7e3qpJn3gT-hnxjsdpnSqAwYJU60MBd7E1VdwTqwkmLP9gag0AQs',
	'secret' => 'EGYHlkwhg-SkduWxIOauZKYzgRzXoANAAsVriALe-XvNcqQqRDWB4PnPqlZ1_U1OnVWLJjQSB0R8fBvi',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];