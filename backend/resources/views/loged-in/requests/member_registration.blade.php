<form>
    <div class="input-group mb-3">
        <label for="memberLastName" class="form-label">姓</label>
        <input id="memberLastName" type="text" class="form-control" placeholder="山田" aria-label="memberLastName">
    </div>

    <div class="input-group mb-3">
        <label for="memberFirstName" class="form-label">名</label>
        <input id="memberFirstName" type="text" class="form-control" placeholder="太郎" aria-label="memberFirstName">
    </div>

    <div class="input-group mb-3">
        <label for="memberLastNameReading" class="form-label">せい</label>
        <input id="memberLastNameReading" type="text" class="form-control" placeholder="やまだ" aria-label="memberLastNameReading">
    </div>

    <div class="input-group mb-3">
        <label for="memberFirstNameReading" class="form-label">めい</label>
        <input id="memberFirstNameReading" type="text" class="form-control" placeholder="たろう" aria-label="memberFirstNameReading">
    </div>

    <div class="input-group mb-3">
        <label for="memberBirthday" class="form-label">生年月日</label>
        <input id="memberBirthday" type="date" class="form-control" aria-label="memberBirthday">
    </div>

    <div class="input-group mb-3">
        <label for="memberSex" class="form-label">性別</label>
        <input type="radio" name="memberSex" value="man" /> 男　
        <input type="radio" name="memberSex" value="woman" /> 女
    </div>

    <div class="input-group mb-3">
        <label for="memberClassification" class="form-label">対象学年区分</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="memberClassification" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学1年生</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="memberEducationFacility" class="form-label">教育機関</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="memberEducationFacility" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学校</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="memberSchoolName" class="form-label">学校名</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="memberSchoolName" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学校</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="memberContractKinds" class="form-label">会員種別</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="memberContractKinds" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">育成週一回</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="memberCourse" class="form-label">コースの選択</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="memberCourse" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">月曜 16:45</a></li>
            </ul>
        </div>
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
    

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>