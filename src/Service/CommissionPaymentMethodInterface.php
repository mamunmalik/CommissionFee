<?php

declare(strict_types=1);

namespace CommissionFee\Service;

interface CommissionPaymentMethodInterface
{
    public function getCommissionPercentage($userType, $operationType);
}
