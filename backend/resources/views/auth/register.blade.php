@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">新規登録</div>

                <div class="card-body p-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="last-name" class="col-md-4 col-form-label text-md-right">姓</label>

                            <div class="col-md-6">
                                <input id="last-name" type="text" placeholder="山田" class="form-control @error('first-name') is-invalid @enderror" name="last-name" required autocomplete="last-name">

                                @error('last-name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="first-name" class="col-md-4 col-form-label text-md-right">名</label>

                            <div class="col-md-6">
                                <input id="first-name" type="text" placeholder="太郎" class="form-control @error('first-name') is-invalid @enderror" name="first-name" required autocomplete="first-name">

                                @error('first-name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="last-name-reading" class="col-md-4 col-form-label text-md-right">せい</label>

                            <div class="col-md-6">
                                <input id="last-name-reading" type="text" placeholder="やまだ" class="form-control @error('first-name-reading') is-invalid @enderror" name="last-name-reading" required autocomplete="last-name-reading">

                                @error('last-name-reading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="first-name-reading" class="col-md-4 col-form-label text-md-right">めい</label>

                            <div class="col-md-6">
                                <input id="first-name-reading" type="text" placeholder="たろう" class="form-control @error('first-name-reading') is-invalid @enderror" name="first-name-reading" required autocomplete="first-name-reading">

                                @error('first-name-reading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="test@example.com"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="postal-code" class="col-md-4 col-form-label text-md-right">郵便番号</label>
                            <div class="col-md-6">
                                <input id="postal-code" type="text" placeholder="0000000(ハイフンなし7桁)"class="form-control" name="postal-code" value="{{ old('postal-code') }}" required autocomplete="postal-code">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="prefectures" class="col-md-4 col-form-label text-md-right">都道府県</label>
                            <div class="col-md-6">
                                <input id="prefectures" type="text" placeholder="東京都"class="form-control " name="prefectures" value="{{ old('prefectures') }}" required autocomplete="prefectures">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="municipalities" class="col-md-4 col-form-label text-md-right">市区町村</label>
                            <div class="col-md-6">
                                <input id="municipalities" type="text" placeholder="新宿区 西新宿"class="form-control" name="municipalities" value="{{ old('municipalities') }}" required autocomplete="municipalities">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="house-number" class="col-md-4 col-form-label text-md-right">番地</label>
                            <div class="col-md-6">
                                <input id="house-number" type="text" placeholder="○丁目○番地○号"class="form-control" name="house-number" value="{{ old('house-number') }}" required autocomplete="house-number">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="building-name" class="col-md-4 col-form-label text-md-right">建物名・部屋番号</label>
                            <div class="col-md-6">
                                <input id="building-name" type="text" placeholder="○ハイツ○号室"class="form-control" name="building-name" value="{{ old('building-name') }}" required autocomplete="building-name">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="telephone-number" class="col-md-4 col-form-label text-md-right">電話番号</label>
                            <div class="col-md-6">
                                <input id="telephone-number" type="text" placeholder="00000000000(ハイフンなし)"class="form-control " name="telephone-number" value="{{ old('telephone-number') }}" required autocomplete="telephone-number">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="emergency-telephone-number" class="col-md-4 col-form-label text-md-right">緊急連絡先</label>
                            <div class="col-md-6">
                                <input id="emergency-telephone-number" type="text" placeholder="00000000000(ハイフンなし)"class="form-control " name="emergency-telephone-number" value="{{ old('emergency-telephone-number') }}" required autocomplete="emergency-telephone-number">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード<span class="text-danger">※半角英数字8文字以上</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード(確認用)</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード(確認用)</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード(確認用)</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="employee" class="col-md-4 col-form-label text-md-right">従業員</label>

                            <div class="col-md-6">
                                <input id="employee" type="checkbox" class="form-check-input" name="employee" value="1" autocomplete="employee" aria-label="Checkbox for following text input">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection