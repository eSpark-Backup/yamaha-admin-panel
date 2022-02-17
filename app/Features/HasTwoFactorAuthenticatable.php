<?php

namespace App\Features;

use Laravel\Fortify\TwoFactorAuthenticatable;


trait HasTwoFactorAuthenticatable
{
    use TwoFactorAuthenticatable;



    /**
     * Get the status of two factor authentication.
     *
     * @return boolean
     */
    public function getTwoFactorEnabledAttribute()
    {
        return $this->two_factor_secret != null && $this->two_factor_recovery_codes != null;
    }
}
