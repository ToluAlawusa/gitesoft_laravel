@extends('layouts.cus')
@section('browsertitle')registration @stop
@section('content')

<div class="registration-form">
      <form class="def-modal-form" action="/registration" method="POST">
        <div class="cancel-icon close-form"></div>

        <label for="registration-from" class="header"><h3>User Registration</h3></label>
        @if(Session::has('fail'))
        <div class="form-group">
            <div class="alert alert-danger">
                
                    <section class="info-box success">
                        {{ Session::get('fail') }}
                    </section>
                
            </div>
        </div>
        <hr/>
        @endif


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red;">{{ $error }}</li>
                    @endforeach
                </ul>  
            </div>
          @endif
        <input type="text" class="text-field first-name" name="name" placeholder="Name">
        
        <input type="email" class="text-field email" name="email" placeholder="Email">

        <input type="password" class="text-field password" name="password" placeholder="Password">
        
        <input type="password" class="text-field confirm-password" name="confirm_password" placeholder="Confirm Password">
        
        <input type="submit" class="def-button" name="reg" value="Register">
        <input type="hidden" value="{{ Session::token() }}" name="_token">

        <p class="login-option"><a href="/login"> Have an account already? Login</a></p>
      </form>
</div>

@endsection