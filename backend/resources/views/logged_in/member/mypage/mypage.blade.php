@extends('layouts.app')

@section('content')
<!-- header -->
<header>
    
</header>

<!-- calender -->
<div class="container">
    {{ Auth::user()->name_reading }}
    <!-- 当月カレンダー
    出席、欠席、振替日、休館日がわかる -->
</div>

<!-- request -->
<div class="container">
  <div class="row m-3">
    <a href="{{ route('member.create') }}" class="col-6 col-sm-3 btn btn-secondary stretched-link">入会</a>
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">バス</a>
    
    <div class="w-100"></div>
    
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">社員</a>
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">カレンダー</a>

    <div class="w-100"></div>
    
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">パート</a>
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">進級テスト</a>

    <div class="w-100"></div>
    
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">商品</a>
    <a href="#" class="col-6 col-sm-3 btn btn-secondary stretched-link">カレンダー</a>
  </div>
</div>

<!-- notice -->
<div class="container">
  <div class="row m-3 d-flex flex-column">
    <a href="#" class="btn btn-secondary">水中運動会</a>
    <a href="#" class="btn btn-secondary">進級テスト</a>
    <a href="#" class="btn btn-secondary">記録会</a>
    <a href="#" class="btn btn-secondary">きもだめし</a>
  </div>
</div>

<!-- request_today -->
<div class="container">
  <div class="row m-3 d-flex flex-column">
    <a href="#" class="btn btn-secondary">19:00 休会申請</a>
    <a href="#" class="btn btn-secondary">19:00 変更申請</a>
    <a href="#" class="btn btn-secondary">19:00 休会申請</a>
    <a href="#" class="btn btn-secondary">20:30 大会振替</a>
  </div>
</div>


@endsection