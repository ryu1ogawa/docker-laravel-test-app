<form method="POST" action="{{ route('member.store') }}">
    @csrf
    <div class="input-group mb-3">
        <label for="number" class="form-label">会員番号</label>
        <input id="number" type="text" class="form-control" placeholder="" aria-label="number">    
    </div>

    <div class="input-group mb-3">
        <label for="phot" class="form-label">写真</label>
        <input id="phot" type="text" class="form-control" placeholder="" aria-label="phot">
    </div>

    <div class="input-group mb-3">
        <label for="start_date" class="form-label">利用開始日</label>
        <input id="start_date" type="text" class="form-control" placeholder="2021/01/01" aria-label="start_date">
    </div>

    <div class="input-group mb-3">
        <label for="member_last_name" class="form-label">姓</label>
        <input id="member_last_name" type="text" class="form-control" placeholder="山田" aria-label="member_last_name">
    </div>

    <div class="input-group mb-3">
        <label for="member_first_name" class="form-label">名</label>
        <input id="member_first_name" type="text" class="form-control" placeholder="太郎" aria-label="member_first_name">
    </div>

    <div class="input-group mb-3">
        <label for="member_last_name_reading" class="form-label">せい</label>
        <input id="member_last_name_reading" type="text" class="form-control" placeholder="やまだ" aria-label="member_last_name_reading">
    </div>

    <div class="input-group mb-3">
        <label for="member_first_name_reading" class="form-label">めい</label>
        <input id="member_first_name_reading" type="text" class="form-control" placeholder="たろう" aria-label="member_first_name_reading">
    </div>

    <div class="input-group mb-3">
        <label for="member_birthday" class="form-label">生年月日</label>
        <input id="member_birthday" type="date" class="form-control" aria-label="member_birthday">
    </div>

    <div class="input-group mb-3">
        <label for="member_sex" class="form-label">性別</label>
        <input type="radio" name="member-sex" value="man" /> 男　
        <input type="radio" name="member-sex" value="woman" /> 女
    </div>

    <div class="input-group mb-3">
        <label for="member_classification" class="form-label">対象学年区分</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member_classification" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学1年生</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member_education_facility" class="form-label">教育機関</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member_education_facility" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学校</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member_school_name" class="form-label">学校名</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member_school_name" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学校</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="anamnesis" class="form-label">既往症</label>
        <input type="radio" name="anamnesis" value="yes" /> 有
        <input id="anamnesis" type="text" class="form-control" placeholder="病名" aria-label="anamnesis">
        <input id="anamnesis" type="text" class="form-control" placeholder="特性" aria-label="anamnesis">
        <input type="radio" name="anamnesis" value="no" /> 無
    </div>

    <div class="input-group mb-3">
        <label for="heart_disease" class="form-label">心臓疾患</label>
        <input type="radio" name="heart_disease" value="yes" /> 有
        <input type="radio" name="heart_disease" value="no" /> 無
    </div>

    <div class="input-group mb-3">
        <label for="outpatient" class="form-label">通院加療</label>
        <input type="radio" name="outpatient" value="yes" /> 有
        <input type="radio" name="outpatient" value="no" /> 無
    </div>

    
    <div class="input-group mb-3">
        <label for="experience" class="form-label">水泳経験</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="experience" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">水が怖い</a></li>

            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member_contract_kind" class="form-label">種別</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member_contract_kinds" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">育成週一回</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member_course" class="form-label">コースの選択</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member_course" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">月曜 16:45</a></li>
            </ul>
        </div>
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
    
    <div class="input-group mb-3">
        <label for="school_bus" class="form-label">スクールバス希望</label>
        <input type="radio" name="school_bus" value="yes" /> 有
        <input type="radio" name="school_bus" value="no" /> 無
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>