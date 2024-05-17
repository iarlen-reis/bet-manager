<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = [];

    // set id as string
    protected $keyType = 'string';

    // disable incrementing
    public $incrementing = false;

    public function user() {
        return $this->belongsTo("App\Models\User");
    }
}
