@extends('index')
@section('body')
<body class="fastfood_1" >
@endsection
@section('mainContent')
<style>
@media only screen and (max-width: 540px) {
  .res {
    width: 400px !important;
  }
}

</style>
<div class="container">
  
  <div class="row">
    <br><br><br><br>
    {{-- errors --}}
    @if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
      @foreach ($errors->all() as $er)
          {{$er}}<br>
      @endforeach
    </div>
    @endif
    {{-- success --}}
    
    @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif
     {{-- errors --}}
    @if (session('error'))
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    </div>
    @endif

    <b><i>Cập nhật ảnh đại diện</i></b>
    <hr>
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    
    <form action="{{route('page.post_face')}}" class="col-sm-6 res" method="POST" enctype="multipart/form-data" style="width: 600px;" >
      @csrf
      
      
      <div class="form-group row">
        <label for="image" class="col-sm-3 col-form-label">Ảnh đại diện</label>
        <div class="col-sm-9">
          <input type="file" class="form-control" id="image" name="image" value="{{$user->image}}">
          <img src="assets/images/user/{{$user->image}}" alt="{{$user->image}}" >
        </div>
      </div>
      
      
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
          </div>
        </div>
        
    </form>
      
  </div>
  <div class="row">
   
    <b><i>Cập nhật thông tin</i></b>
    <hr>
   <div class="col-sm-2"></div>
   <div class="col-sm-10">
    
    
    <form class="col-sm-6 res" action="{{route('page.post_info')}}" method="POST" enctype="multipart/form-data" style="width: 600px;" >
      @csrf
     
      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Họ và tên</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
      </div>
      
      
      <div class="form-group row">
        <label for="SDT" class="col-sm-3 col-form-label">Số điện thoại</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="SDT" name="SDT" value="{{$user->SDT}}">
         </div>
      </div>
      <div class="form-group row">
        <label for="address" class="col-sm-3 col-form-label">Địa chỉ</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
         </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-3 pt-0">Giới tính</legend>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="status1" value="1" @if($user->gender == 'nam')
              checked
          @endif><label class="form-check-label" for="status1">Nam</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="status2" value="0" @if($user->gender == 'nữ')
              checked
          @endif>
              <label class="form-check-label" for="status2">
                Nữ
              </label>
            </div>
            
          </div>
        </div>
      </fieldset>
       
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
          </div>
         
        </div>
        
      </form>
    
   </div>

  </div>
  <div class="row">
    <br><br>
    <b><i>Thay đổi mật khẩu</i></b>
    <hr>
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    
      <form action="{{route('page.post_change_passwd')}}" class="col-sm-6 res" method="POST" enctype="multipart/form-data" style="width: 600px;" >
        @csrf
        
        
        <div class="form-group row">
          <label for="old_password" class="col-sm-3 col-form-label">Mật khẩu cũ</label>
          <div class="col-sm-9">
              <input type="password" class="form-control" id="old_password" name="old_password" >
          </div>
        </div>
        <div class="form-group row">
          <label for="new_password" class="col-sm-3 col-form-label">Mật khẩu mới</label>
          <div class="col-sm-9">
              <input type="password" class="form-control" id="new_password" name="new_password" >
          </div>
        </div>
        
        
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2 ">
              <a href="{{route('page.Home')}}" class="btn btn-primary">Quay lại</a>
            </div>
          </div>
          
      </form>
      
    </div>
  </div>
  
</div>
@endsection
