<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Ip extends Model
{
    const CACHE_MINUTES = 30;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'value', 'created_at', 'updated_at'
    ];

    /**
     * @param $ip
     * @return self
     */
    public static function findByValue($ip)
    {
        if (Cache::has($ip)) {
            return Cache::get($ip);
        }

        $result = self::where('value', $ip)->first();

        Cache::put($ip, $result, self::CACHE_MINUTES);

        return $result;
    }
}
