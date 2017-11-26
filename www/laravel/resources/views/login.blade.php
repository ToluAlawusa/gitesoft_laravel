@extends('layouts.cus')
@section('browsertitle')login @stop
@section('content')

<div class="login-form">
      <form class="def-modal-form" action="/login" method="POST">
        
        <label for="login-form" class="header"><h3>Login</h3></label>

        @if(Session::has('success'))
        <div class="form-group">
            <div class="alert alert-success">
                
                <section class="info-box success">
                    {{ Session::get('success') }}
                </section>
                
            </div>
        </div>
        <hr/>
        @endif
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

        <input type="text" class="text-field email" name="email" placeholder="Email"> 

        <input type="password" class="text-field password" name="password" placeholder="Password">
        
        <input type="submit" class="def-button login" name="login" value="Login">
        <input type="hidden" value="{{ Session::token() }}" name="_token">
      </form>
    
  </div>

@endsection