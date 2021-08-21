@extends('layouts.front')
@section('content')
<div class="container">
    <h3 class="box-title">予約の人数入力</h3>
    <form method="post" action="{{ route('booking-form.confirm') }}">
        {{ csrf_field() }}
        <table class="table table-dark">
            <tbody>
                <tr>
                    <th class="booking-entry-title">予約日</th>
                    <td><label><input type="text" name="date" id="" placeholder="2021-9-1" value="{{$ymd}}"></label></td>
                </tr>
                <tr>
                    <th class="booking-entry-title">予約プラン</th>
                    <td>
                        <select class="booking-entry-select" name="plan">
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
                            <select class="booking-entry-select" name="woman">
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
                            <select class="booking-entry-select" name="man">
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
                            <select class="booking-entry-select" name="childwoman">
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
                            <select class="booking-entry-select" name="childman">
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
                        <span class="option-number">
                            <select id="option-number-breakfast" class="entry-option-number" name="option1">
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
                    <th class="customer-namheade">お名前</th>
                    <td class="customer-input">
                        <label><input type="text" name="name" id="" value="{{ old('name') }}" placeholder="例）山田　太郎"></label>
                        @if ($errors->has('name'))
                            <p class="error-message">{{ $errors->first('name') }}</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">メールアドレス</th>
                    <td class="customer-input">
                        <label><input type="text" name="email" id="" value="{{ old('email') }}" placeholder="例）example@email.jp"></label>
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">郵便番号</th>
                    <td class="customer-input">
                        <label><input type="text" name="zip" id="" value="{{ old('zip') }}" placeholder="例）000-0000"></label>
                        @if ($errors->has('zip'))
                            <p class="error-message">{{ $errors->first('zip') }}</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">都道府県</th>
                    <td class="customer-input">
                        <label><input type="text" name="pref" id="" value="{{ old('pref') }}" placeholder="例）北海道"></label>
                        @if ($errors->has('pref'))
                            <p class="error-message">{{ $errors->first('pref') }}</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="customer-head">住所</th>
                    <td class="customer-input">
                        <label><input type="text" name="address" id="" value="{{ old('address') }}" placeholder="例）札幌市北区24条1丁目0-0"></label>
                        @if ($errors->has('address'))
                            <p class="error-message">{{ $errors->first('address') }}</p>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>


        <div id="mtsab-booking-action" class="box-action">
            <button type="submit" name="action" value="back">戻る</button>
            <button type="submit" name="action" value="submit">確認する</button>
        </div>

    </form>
</div>
@endsection
