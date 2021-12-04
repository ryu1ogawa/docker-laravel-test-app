<form method="POST" action="{{ route('event.store') }}">
    <div class="input-group mb-3">
        <label for="name" class="form-label">イベント名</label>
        <input id="name" type="text" class="form-control" placeholder="" aria-label="name">
    </div>

    
    <button type="submit" class="btn btn-primary">追加</button>
</form>