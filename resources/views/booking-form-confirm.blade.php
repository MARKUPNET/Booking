@extends('layouts.front')
@section('content')
<div class="container">
    <h3 class="box-title">予約の人数入力</h3>
    <form method="POST" action="{{ route('booking-form.send') }}">
        {{ csrf_field() }}
        <table class="table table-dark">
            <tbody>
                <tr>
                    <th class="booking-entry-title">予約日</th>
                    <td>
                        <label class="booking-entry-label">{{ $entry['date'] }}</label>
                        <input type="hidden" name="date" value="{{ $entry['date'] }}">
                    </td>
                </tr>
                <tr>
                    <th class="booking-entry-title">予約プラン</th>
                    <td>
                        <label class="booking-entry-label">{{ $entry['plan'] }}</label>
                        <input type="hidden" name="plan" id="" value="{{ $entry['plan'] }}">
                </tr>
                <tr>
                    <th class="booking-entry-title">宿泊者</th>
                    <td>
                        <label class="booking-entry-label">女性：{{ $entry['woman'] }}</label>
                        <label class="booking-entry-label">男性：{{ $entry['man'] }}</label>
                        <label class="booking-entry-label">女子：{{ $entry['childwoman'] }}</label>
                        <label class="booking-entry-label">男子：{{ $entry['childman'] }}</label>
                        <input type="hidden" name="woman" value="{{ $entry['woman'] }}">
                        <input type="hidden" name="man" value="{{ $entry['man'] }}">
                        <input type="hidden" name="childwoman" value="{{ $entry['childwoman'] }}">
                        <input type="hidden" name="childman" value="{{ $entry['childman'] }}">
                    </td>
                </tr>
            </tbody>
        </table>

        <h3 class="box-title">オプション</h3>
        <table class="booking-option-entry entry-field">
            <tbody>
                <tr>
                    <th class="option-head">オプション１</th>
                    <td class="option-input">
                        <label class="booking-entry-label">{{ $entry['option1'] }}</label>
                        <input type="hidden" name="option1" value="{{ $entry['option1'] }}">
                    </td>
                </tr>
            </tbody>
        </table>

        <h3 class="box-title">お客様情報</h3>
        <table class="booking-option-entry entry-field">
            <tbody>
                <tr>
                    <th class="customer-head">名前</th>
                    <td class="customer-input">
                        <label>{{ $entry['name'] }}</label>
                        <input type="hidden" name="name" value="{{ $entry['name'] }}">
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">メールアドレス</th>
                    <td class="customer-input">
                        <label>{{ $entry['email'] }}</label>
                        <input type="hidden" name="email" value="{{ $entry['email'] }}">
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">郵便番号</th>
                    <td class="customer-input">
                        <label>{{ $entry['zip'] }}</label>
                        <input type="hidden" name="zip" value="{{ $entry['zip'] }}">
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">都道府県</th>
                    <td class="customer-input">
                        <label>{{ $entry['pref'] }}</label>
                        <input type="hidden" name="pref" value="{{ $entry['pref'] }}">
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">住所</th>
                    <td class="customer-input">
                        <label>{{ $entry['address'] }}</label>
                        <input type="hidden" name="address" value="{{ $entry['address'] }}">
                    </td>
                </tr>
            </tbody>
        </table>


        <div id="mtsab-booking-action" class="box-action">
            <button type="submit" name="action" value="back">戻る</button>
            <button type="submit" name="action" value="submit">送信する</button>
        </div>

    </form>
</div>
@endsection
