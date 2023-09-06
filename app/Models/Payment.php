<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function account_key() {
        return $this->belongsTo(AccountKey::class, 'account_key_id', 'id');
    }
    public function currency() {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }
}
