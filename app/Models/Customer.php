<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * 新規保存
     */
    public function put_NewCustomer($entry)
    {
        Customer::insert([
            'name' => $entry['name'],
            'email' => $entry['email'],
            'zip' => $entry['zip'],
            'pref' => $entry['pref'],
            'address' => $entry['address'],
        ]);

        return false;
    }
}
