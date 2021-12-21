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
                                <input id="birthday" type="birthday" placeholder="1999/09/09"class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">性別</label>
                            <div class="col-md-6">
                                <input type="radio" class="form-control" name="sex" required value="man" /> 男　
                                <input type="radio" class="form-control" name="sex" required value="woman" /> 女
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="input-group-text" for="classification">対象学年区分</label>
                            <select class="form-select" id="classification" name="classification" required>
                                <option selected>選択してください</option>
                                <option value="1">小学1年生</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label class="input-group-text" for="education_facility">教育機関</label>
                            <select class="form-select" id="education_facility" name="education_facility">
                                <option selected>選択してください</option>
                                <option value="1">小学校</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label class="input-group-text" for="school_name">学校名</label>
                            <select class="form-select" id="school_name" name="school_name">
                                <option selected>選択してください</option>
                                <option value="1">穂高小学校</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        

                        <div class="form-group row mb-2">
                            <label for="anamnesis" class="col-md-4 col-form-label text-md-right">既往症</label>
                            <div class="col-md-6">
                                <input type="radio" name="anamnesis" value="yes" required /> 有
                                <input id="anamnesis_disease_name" name="anamnesis_disease_name" type="text" class="form-control" placeholder="病名" aria-label="anamnesis_disease_name">
                                <input id="anamnesis_characteristic" name="anamnesis_characteristic" type="text" class="form-control" placeholder="特性" aria-label="anamnesis_characteristic">
                                <input type="radio" name="anamnesis" value="no" required /> 無
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="heart_disease" class="col-md-4 col-form-label text-md-right">心臓疾患</label>
                            <div class="col-md-6">
                                <input type="radio" name="heart_disease" value="yes" required /> 有
                                <input type="radio" name="heart_disease" value="no" required /> 無
                            </div>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="outpatient" class="col-md-4 col-form-label text-md-right">通院加療</label>
                            <div class="col-md-6">
                                <input type="radio" name="outpatient" value="yes" required /> 有
                                <input type="radio" name="outpatient" value="no" required /> 無
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="input-group-text" for="experience">水泳経験</label>
                            <select class="form-select" id="experience" name="experience">
                                <option selected>選択してください</option>
                                <option value="1">水が怖い</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label class="input-group-text" for="contract_kind">種別</label>
                            <select class="form-select" id="contract_kind" name="contract_kind" required>
                                <option selected>選択してください</option>
                                <option value="1">育成週一回</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label class="input-group-text" for="course">コースの選択</label>
                            <select class="form-select" id="course" name="course" required>
                                <option selected>選択してください</option>
                                <option value="1">月曜 16:45</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        
                        <div class="form-group row mb-2">
                            <label for="school_bus" class="col-md-4 col-form-label text-md-right">スクールバス希望</label>
                            <div class="col-md-6">
                                <input type="radio" name="school_bus" value="yes" required /> 有
                                <input type="radio" name="school_bus" value="no" required/> 無
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