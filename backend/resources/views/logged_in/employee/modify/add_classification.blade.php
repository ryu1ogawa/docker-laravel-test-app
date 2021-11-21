@extends('layouts.app')

<form method="POST" action="{{ route('classification.store') }}">
    <div class="input-group mb-3">
        <label for="name" class="form-label">対象学年区分</label>
        <input id="name" type="text" class="form-control" placeholder="" aria-label="name">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>