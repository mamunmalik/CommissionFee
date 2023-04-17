<?php

declare(strict_types=1);

namespace CommissionFee\Service;

class VariableCommissionPaymentMethod implements CommissionPaymentMethodInterface
{
    private $freeOfChargeAmount;
    private $commissionPercentage;

    public function __construct($freeOfChargeAmount, $commissionPercentage)
    {
        $this->freeOfChargeAmount = $freeOfChargeAmount;
        $this->commissionPercentage = $commissionPercentage;
    }

    public function getCommissionPercentage($userType, $operationType)
    {
        return $this->commissionPercentage;
    }

    public function getFreeOfChargeAmount()
    {
        return $this->freeOfChargeAmount;
    }
}