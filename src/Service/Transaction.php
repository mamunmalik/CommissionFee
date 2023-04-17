<?php

declare(strict_types=1);

namespace CommissionFee\Service;

class Transaction
{
    private string $date;
    private int $userId;
    private string $userType;
    private string $operationType;
    private int $operationAmount;
    private string $operationCurrency;

    public function __construct(string $date, int $userId, string $userType, string $operationType, int $operationAmount, string $operationCurrency)
    {
        $this->date = $date;
        $this->userId = $userId;
        $this->userType = $userType;
        $this->operationType = $operationType;
        $this->operationAmount = $operationAmount;
        $this->operationCurrency = $operationCurrency;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getUserType(): string
    {
        return $this->userType;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function getOperationAmount(): int
    {
        return $this->operationAmount;
    }

    public function getOperationCurrency(): string
    {
        return $this->operationCurrency;
    }

}
