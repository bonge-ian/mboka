<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects\Factories;

use Carbon\Carbon;
use App\Domain\ValueObjects\Flutterwave\TransactionResponse;
use App\Domain\ValueObjects\Factories\Contracts\ValueObjectFactory;

class TransactionResponseFactory implements ValueObjectFactory
{
    public static function make(array $attributes): TransactionResponse
    {
        return new TransactionResponse(
            id: $attributes['id'],
            transactionCode: $attributes['tx_ref'],
            amount: floatval($attributes['amount']),
            paymentType: strval($attributes['payment_type']),
            created_at: Carbon::parse($attributes['created_at']),
            status: strval($attributes['status']),
        );
    }
}