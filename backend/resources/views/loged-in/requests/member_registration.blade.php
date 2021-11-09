<form>
    <div class="input-group mb-3">
        <label for="member-last-name" class="form-label">姓</label>
        <input id="member-last-name" type="text" class="form-control" placeholder="山田" aria-label="member-last-name">
    </div>

    <div class="input-group mb-3">
        <label for="member-first-name" class="form-label">名</label>
        <input id="member-first-name" type="text" class="form-control" placeholder="太郎" aria-label="member-first-name">
    </div>

    <div class="input-group mb-3">
        <label for="member-last-name-reading" class="form-label">せい</label>
        <input id="member-last-name-reading" type="text" class="form-control" placeholder="やまだ" aria-label="member-last-name-reading">
    </div>

    <div class="input-group mb-3">
        <label for="member-first-name-reading" class="form-label">めい</label>
        <input id="member-first-name-reading" type="text" class="form-control" placeholder="たろう" aria-label="member-first-name-reading">
    </div>

    <div class="input-group mb-3">
        <label for="member-birthday" class="form-label">生年月日</label>
        <input id="member-birthday" type="date" class="form-control" aria-label="member-birthday">
    </div>

    <div class="input-group mb-3">
        <label for="member-sex" class="form-label">性別</label>
        <input type="radio" name="member-sex" value="man" /> 男　
        <input type="radio" name="member-sex" value="woman" /> 女
    </div>

    <div class="input-group mb-3">
        <label for="member-classification" class="form-label">対象学年区分</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member-classification" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学1年生</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member-education-facility" class="form-label">教育機関</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member-education-facility" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学校</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member-school-name" class="form-label">学校名</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member-school-name" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">小学校</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member-contract-kinds" class="form-label">会員種別</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member-contract-kinds" data-bs-toggle="dropdown" aria-expanded="false">
                選択してください
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">育成週一回</a></li>
            </ul>
        </div>        
    </div>

    <div class="input-group mb-3">
        <label for="member-course" class="form-label">コースの選択</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="member-course" data-bs-toggle="dropdown" aria-expanded="false">
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