<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests;
use App\Mail\BookingFormSendmail;
use App\Models\BookingPost;

class BookingformController extends Controller
{
    //

    public function index(Request $parm)
    {
        $ymd = $parm->ymd;

        return view('booking-form-index', [
            'ymd' => $ymd,
        ]);
    }

    public function confirm(Request $request)
    {

        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'email' => 'required|email',
        ]);

        //フォームから受け取ったすべてのinputの値を取得
        $entry = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('booking-form-confirm', [
            'entry' => $entry,
        ]);
    }

    public function send(Request $request)
    {

        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            // 'name' => 'required',
            'email' => 'required|email',
            // 'zip'  => 'required',
            // 'pref'  => 'required',
            // 'address'  => 'required',
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったactionを除いたinputの値を取得
        $entry = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('booking-form.index')
                ->withInput($entry);

        } else {
            //DBに保存
            $post = new BookingPost;
            $post->put_BookingData_All($entry);

            //入力されたメールアドレスにメールを送信
            \Mail::to($entry['email'])->send(new BookingFormSendmail($entry));

            //管理者メールアドレスにメールを送信
            \Mail::to('webmaster@markupnet.jp')->send(new BookingFormSendmail($entry));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('booking-form-thanks');

        }
    }
}
