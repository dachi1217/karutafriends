@extends('layouts.app')

@section('content')
<div class="card-header text-center"><h2>My Profile</h2></div>
<div class="card-body">
<form action="{{ route('mypage.store') }}" method="POST">
  {{ csrf_field() }}
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="name" placeholder="名前" name="name" {{ $user->name }}>
      
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="好きな札" id="cards_id" name="cards_id">
    </div>
  </div>

  <div class="row pt-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="かるた会や部活・所属" id="user_belongs" name="user_belongs">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="段位" id="user_class" name="user_class">
    </div>
  </div>

  <div class="form-group pt-3">
    <label for="exampleFormControlTextarea1">自己紹介文</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" >設定完了</button>
    </div>

</form>
                    
</div>
@endsection
