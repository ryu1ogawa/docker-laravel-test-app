<form method="POST" action="{{ route('school_name.store') }}">
    <div class="input-group mb-3">
        <label for="name" class="form-label">学校名</label>
        <input id="name" type="text" class="form-control" placeholder="" aria-label="name">
    </div>
    
    <div class="input-group mb-3">
        <label for="address" class="form-label">住所</label>
        <input id="address" type="text" class="form-control" placeholder="" aria-label="address">
    </div>
    
    <div class="input-group mb-3">
        <label for="education_facility" class="form-label">教育機関</label>
        <input id="education_facility" type="text" class="form-control" placeholder="" aria-label="education_facility">
    </div>
    
    <button type="submit" class="btn btn-primary">追加</button>
</form>