<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookingPost;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookingPosts = $this->get_BookingPosts_All();

        return view('admin', [
            'bookingPosts' => $bookingPosts,
        ]);
    }

    /**
     * 一覧を表示する
     */
    public function get_BookingPosts_All()
    {
        $bookingPoint = new BookingPost;
        $result = $bookingPoint->all();

        $data = array();

        foreach( $result as $item ){
            $data[] = array(
                'id' => $item->id,
                'date' => $item->date,
                'plan' => $item->plan,
                'count' => $bookingPoint->get_guestCounter_by_id($item->id),
            );
        }

        return $data;
    }
}
