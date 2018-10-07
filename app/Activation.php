<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\User;

class Activation extends Model
{
    protected $fillable = ['user_id', 'code', 'used', 'expire'];

    public function scopeCreateCode($query, $user)
    {
        return $query->create([
            'user_id' => $user->id,
            'code' => $this->code(),
            'expire' => Carbon::now()->addMinutes(15),
        ]);
    }

    public function code()
    {
        do{
            $code = Str::random(60);
            $checkCode = static::whereCode($code)->get();
        }while(!$checkCode->isEmpty());

        return $code;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
