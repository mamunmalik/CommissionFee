<?php

declare(strict_types=1);

namespace CommissionFee\Service;

use CommissionFee\Service\CommissionPaymentMethodInterface;

class CommissionCalculator
{
    private $paymentMethod;

    public function __construct(CommissionPaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function calculateCommission(Transaction $transaction)
    {
        // Get the commission percentage for the user type and operation type
        $commissionPercentage = $this->paymentMethod->getCommissionPercentage($transaction->getUserType(), $transaction->getOperationType());

        // Calculate the commission fee
        $commissionFee = $transaction->getOperationAmount() * $commissionPercentage / 100;

        // Round the commission fee to 2 decimal places
        $commissionFee = round($commissionFee, 2);

        // Return the commission fee
        return $commissionFee;
    }
}
