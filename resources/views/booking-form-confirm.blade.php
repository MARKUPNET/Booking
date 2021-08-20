@extends('layouts.front')
@section('content')
<div class="container">
    <h3 class="box-title">予約の人数入力</h3>
    <form action="/booking-form/thanks" method="post">
        {{ csrf_field() }}
        <table class="table table-dark">
            <tbody>
                <tr>
                    <th class="booking-entry-title">予約日</th>
                    <td><label class="booking-entry-label"><input type="text" name="entry[date]" id="" value="{{ $entry['entry']['date'] }}"></label></td>
                </tr>
                <tr>
                    <th class="booking-entry-title">予約プラン</th>
                    <td><label class="booking-entry-label"><input type="text" name="entry[plan]" id="" value="{{ $entry['entry']['plan'] }}"></label>
                </tr>
                <tr>
                    <th class="booking-entry-title">宿泊者</th>
                    <td>
                        <label class="booking-entry-label">女性：<input type="text" name="entry[guest][woman]" id="" value="{{ $entry['entry']['guest']['woman'] }}"></label>
                        <label class="booking-entry-label">男性：<input type="text" name="entry[guest][man]" id="" value="{{ $entry['entry']['guest']['man'] }}"></label>
                        <label class="booking-entry-label">女子：<input type="text" name="entry[guest][childwoman]" id="" value="{{ $entry['entry']['guest']['childwoman'] }}"></label>
                        <label class="booking-entry-label">男子：<input type="text" name="entry[guest][childman]" id="" value="{{ $entry['entry']['guest']['childman'] }}"></label>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3 class="box-title">オプション</h3>
        <table class="booking-option-entry entry-field">
            <tbody>
                <tr>
                    <th class="option-name">オプション１</th>
                    <td class="option-input">
                        <label class="booking-entry-label"><input type="text" name="entry[option][1][number]" id="" value="{{ $entry['entry']['option'][1]['number'] }}"></label>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3 class="box-title">お客様情報</h3>
        <table class="booking-option-entry entry-field">
            <tbody>
                <tr>
                    <th class="customer-name">名前</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][name]" id="" value="{{ $entry['entry']['customer']['name'] }}"></label>
                    </td>
                </tr>
                <tr>
                    <th class="customer-name">郵便番号</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][zip]" id="" value="{{ $entry['entry']['customer']['zip'] }}"></label>
                    </td>
                </tr>
                <tr>
                    <th class="customer-name">都道府県</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][pref]" id="" value="{{ $entry['entry']['customer']['pref'] }}"></label>
                    </td>
                </tr>
                <tr>
                    <th class="customer-name">住所</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][address]" id="" value="{{ $entry['entry']['customer']['address'] }}"></label>
                    </td>
                </tr>
            </tbody>
        </table>


        <div id="mtsab-booking-action" class="box-action">
            <input type="hidden" name="booking_nonce" value="d1136886f0">
            <input id="mtsab-entry-button" type="submit" class="booking-button" name="entry_booking" value="予約する">
            <input id="mtsab-back-button" type="button" class="booking-button" value="戻る" onclick="location.href='../calendar/'">
        </div>

    </form>
</div>
@endsection
