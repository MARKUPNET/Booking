@extends('layouts.front')
@section('content')
<div class="container">
    <h3 class="box-title">予約の人数入力</h3>
    <form action="/booking-form/confirm" method="post">
        {{ csrf_field() }}
        <table class="table table-dark">
            <tbody>
                <tr>
                    <th class="booking-entry-title">予約日</th>
                    <td><label><input type="text" name="entry[date]" id="" placeholder="2021-9-1" value="{{$ymd}}"></label></td>
                </tr>
                <tr>
                    <th class="booking-entry-title">予約プラン</th>
                    <td>
                        <select class="booking-entry-select" name="entry[plan]">
                            <option value="">選択してください</option>
                            <option value="Aプラン">Aプラン</option>
                            <option value="Bプラン">Bプラン</option>
                            <option value="Cプラン">Cプラン</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="booking-entry-title">宿泊者</th>
                    <td>
                        <label class="booking-entry-label">女性：
                            <select class="booking-entry-select" name="entry[guest][woman]">
                                <option value="0">0</option>
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </label>
                        <label class="booking-entry-label">男性：
                            <select class="booking-entry-select" name="entry[guest][man]">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </label>
                        <label class="booking-entry-label">女子：
                            <select class="booking-entry-select" name="entry[guest][childwoman]">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </label>
                        <label class="booking-entry-label">男子：
                            <select class="booking-entry-select" name="entry[guest][childman]">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </label>
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
                        <span class="option-number"><select id="option-number-breakfast" class="entry-option-number"
                                name="entry[option][1][number]">
                                <option value="">選択してください</option>
                                <option value="選択１">選択１</option>
                                <option value="選択２">選択２</option>
                                <option value="選択３">選択３</option>
                                <option value="選択４">選択４</option>
                                <option value="選択５">選択５</option>
                            </select>
                        </span>
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
                        <label><input type="text" name="entry[customer][name]" id="" placeholder="例）山田　太郎"></label>
                    </td>
                </tr>
                <tr>
                    <th class="customer-name">郵便番号</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][zip]" id="" placeholder="例）000-0000"></label>
                    </td>
                </tr>
                <tr>
                    <th class="customer-name">都道府県</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][pref]" id="" placeholder="例）北海道"></label>
                    </td>
                </tr>
                <tr>
                    <th class="customer-name">住所</th>
                    <td class="customer-input">
                        <label><input type="text" name="entry[customer][address]" id="" placeholder="例）札幌市北区24条1丁目0-0"></label>
                    </td>
                </tr>
            </tbody>
        </table>


        <div id="mtsab-booking-action" class="box-action">
            <input id="mtsab-entry-button" type="submit" class="booking-button" name="entry_booking" value="確認する">
            <input id="mtsab-back-button" type="button" class="booking-button" value="戻る" onclick="location.href='../calendar/'">
        </div>

    </form>
</div>
@endsection
