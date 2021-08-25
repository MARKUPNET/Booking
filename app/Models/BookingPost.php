<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class BookingPost extends Model
{
    use HasFactory;

    protected $table = 'booking_posts';

    /**
     * list()を呼んだらscopeList()が呼ばれる
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder $query
     */
    public static function scopeList($query)
    {
        return $query->select(['id']);
    }

    /**
     * PUT 予約データ保存
     */
    public function put_BookingData_All($entry)
    {
        BookingPost::insert([
            'date' => $entry['date'],
            'plan' => $entry['plan'],
            'woman' => $entry['woman'],
            'man' => $entry['man'],
            'childwoman' => $entry['childwoman'],
            'childman' => $entry['childman'],
            'option1' => $entry['option1'],
        ]);

        //顧客情報新規保存
        $customer = new Customer;
        $customer->put_NewCustomer($entry);

        return false;
    }

    /**
     * GET 人数
     */
    public function get_guestCounter_by_id($id)
    {

        $guest = BookingPost::select('woman','man','childwoman','childman')
                            ->where('id',$id)
                            ->get();

        $count = 0;

        foreach( $guest as $val ){
            $count = $val['woman'] + $val['man'] + $val['childwoman'] + $val['childman'];
        }

        return $count;
    }

}
