<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Account extends Model
{
    use HasFactory;
    
    protected $table = 'accounts';

    public static function verifyAccount($username, $password)
    {
        $account = self::where('username', $username)->first();

        if ($account && $password === $account->password) {
            return $account; 
        }
        return null;
    }
}
