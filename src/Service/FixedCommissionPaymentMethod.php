<?php

declare(strict_types=1);

namespace CommissionFee\Service;

class FixedCommissionPaymentMethod implements CommissionPaymentMethodInterface
{
    private $commissionPercentage;

    public function __construct($commissionPercentage = 0.5)
    {
        $this->commissionPercentage = $commissionPercentage;
    }

    public function getCommissionPercentage($userType, $operationType)
    {
        // For the fixed commission payment method, the commission percentage is always the same
        return $this->commissionPercentage;
    }
}