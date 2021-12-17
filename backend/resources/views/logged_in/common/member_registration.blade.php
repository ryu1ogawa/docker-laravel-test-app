@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">入会登録</div>

                <div class="card-body p-3">
                    <form method="POST" action="{{ route('member.store') }}">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="number" class="col-md-4 col-form-label text-md-right">会員番号</label>

                            <div class="col-md-6">
                                <input id="number" type="text" placeholder="0001" class="form-control @error('first_name') is-invalid @enderror" name="number" required autocomplete="number">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="phot" class="col-md-4 col-form-label text-md-right">写真</label>

                            <div class="col-md-6">
                                <input id="phot" type="text" placeholder="写真" class="form-control @error('phot') is-invalid @enderror" name="phot" required autocomplete="phot">

                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">利用開始日</label>

                            <div class="col-md-6">
                                <input id="start_date" type="text" placeholder="2021/01/01" class="form-control @error('start_date') is-invalid @enderror" name="start_date" required autocomplete="start_date">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="last_name" class="form-label">姓</label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="山田" name="last_name" required autocomplete="last_name">
                        </div>

                        <div class="form-group row mb-2">
                            <label for="first_name" class="form-label">名</label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="太郎" name="first_name" required autocomplete="first_name">
                        </div>

                        <div class="form-group row mb-2">
                            <label for="last_name_reading" class="form-label">せい</label>
                            <input id="last_name_reading" type="text" class="form-control @error('last_name_reading') is-invalid @enderror" placeholder="やまだ" name="last_name_reading" required autocomplete="last_name_reading">
                        </div>

                        <div class="form-group row mb-2">
                            <label for="first_name_reading" class="form-label">めい</label>
                            <input id="first_name_reading" type="text" class="form-control @error('first_name_reading') is-invalid @enderror" placeholder="たろう" name="first_name_reading" required autocomplete="first_name_reading">
                        </div>

                        <div class="form-group row mb-2">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">生年月日</label>

                            <div class="col-md-6">
                                <input id="birthday" type="birthday" placeholder="test@example.com"class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">性別</label>
                            <div class="col-md-6">
                                <input type="radio" class="form-control" name="sex" value="man" /> 男　
                                <input type="radio" class="form-control" name="sex" value="woman" /> 女
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="classification" class="col-md-4 col-form-label text-md-right">対象学年区分</label>
                            <div class="col-md-6 dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="classification" data-bs-toggle="dropdown" aria-expanded="false">
                                    選択してください
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">小学1年生</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="education_facility" class="col-md-4 col-form-label text-md-right">教育機関</label>
                            <div class="col-md-6 dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="education_facility" data-bs-toggle="dropdown" aria-expanded="false">
                                    選択してください
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">小学校</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="school_name" class="col-md-4 col-form-label text-md-right">学校名</label>
                            <div class="col-md-6 dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="school_name" data-bs-toggle="dropdown" aria-expanded="false">
                                    選択してください
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">穂高小学校</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="anamnesis" class="col-md-4 col-form-label text-md-right">既往症</label>
                            <div class="col-md-6">
                                <input type="radio" name="anamnesis" value="yes" /> 有
                                <input id="anamnesis" type="text" class="form-control" placeholder="病名" aria-label="anamnesis">
                                <input id="anamnesis" type="text" class="form-control" placeholder="特性" aria-label="anamnesis">
                                <input type="radio" name="anamnesis" value="no" /> 無
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="heart_disease" class="col-md-4 col-form-label text-md-right">心臓疾患</label>
                            <div class="col-md-6">
                                <input type="radio" name="heart_disease" value="yes" /> 有
                                <input type="radio" name="heart_disease" value="no" /> 無
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="outpatient" class="col-md-4 col-form-label text-md-right">通院加療</label>
                            <div class="col-md-6">
                                <input type="radio" name="outpatient" value="yes" /> 有
                                <input type="radio" name="outpatient" value="no" /> 無
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">水泳経験</label>
                            <div class="col-md-6 dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="experience" data-bs-toggle="dropdown" aria-expanded="false">
                                    選択してください
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">水が怖い</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="contract_kind" class="col-md-4 col-form-label text-md-right">種別</label>
                            <div class="col-md-6 dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="contract_kind" data-bs-toggle="dropdown" aria-expanded="false">
                                    選択してください
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">育成週一回</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="course" class="col-md-4 col-form-label text-md-right">コースの選択</label>
                            <div class="col-md-6 dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="course" data-bs-toggle="dropdown" aria-expanded="false">
                                    選択してください
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">月曜 16:45</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="school_bus" class="col-md-4 col-form-label text-md-right">スクールバス希望</label>
                            <div class="col-md-6">
                                <input type="radio" name="school_bus" value="yes" /> 有
                                <input type="radio" name="school_bus" value="no" /> 無
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