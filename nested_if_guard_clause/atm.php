<?php

class ATM
{
    function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    function isInactive()
    {
        if ($this->credentials['cardStatus'] === 'inactive') {
            return TRUE;
        }
    }

    function isExpired()
    {
        if ($this->credentials['registeredCard'] < date("Y-m-d")) {
            return TRUE;
        }
    }

    function isWrongPIN($pin)
    {
        if ($this->credentials['registeredPIN'] !== $pin) {
            return TRUE;
        }
    }

    function isInsufficient($amount)
    {
        if ($this->credentials['balance'] < $amount) {
            return TRUE;
        }
    }

    function withdraw($mycredentials)
    {
        if ($this->isWrongPIN($mycredentials['inputPIN'])) {
            return 'Wrong PIN!';
        }
        if ($this->isInactive()) {
            return 'Your card is inactive. Please activate it.';
        }
        if ($this->isExpired()) {
            return 'Your card is expired.';
        }
        if ($this->isInsufficient($mycredentials['withdrawAmount'])) {
            return 'Insufficient amount.';
        }
        return 'Please take your money.';
    }
}

$credentials = [
    'registeredPIN'     => 123456,
    'cardStatus'        => 'active',
    'registeredCard'    => '2021-11-10',
    'balance'           => 1600000
];

$mycredentials = [
    'inputPIN'          => 123456,
    'withdrawAmount'    => 1200000
];

$atm = new ATM($credentials);
echo ($atm->withdraw($mycredentials));
