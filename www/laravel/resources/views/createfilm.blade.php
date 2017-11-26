@extends('layouts.cus')
@section('browsertitle')createfilm @stop
@section('content')

<div class="registration-form">
      <form class="def-modal-form" action="/films-create" method="POST" enctype="multipart/form-data">
        <div class="cancel-icon close-form"></div>

        <label for="registration-from" class="header"><h3>Create Film</h3></label>
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

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red;">{{ $error }}</li>
                    @endforeach
                </ul>  
            </div>
          @endif
        <input type="text" class="text-field first-name" name="name" placeholder="Film Title">
        <input type="text" class="text-field first-name" name="slug_name" placeholder="slug name e.g. fast_n_furious">
        
        <input type="text" class="text-field first-name" name="description" placeholder="Description">

        <input type="text" class="text-field first-name" name="release_date" placeholder="Release Date e.g 23rd March, 2019 ">
        
        <select name="rating" class="text-field">
            <option value=""> Select Rating </option>
            @foreach ($rating as $ratings)
                <option value="{!! $ratings->id !!}">{!! $ratings->grade !!}</option>
            @endforeach
               
        </select>


        <input type="text" class="text-field first-name" name="price" placeholder="Ticket Rice e.g 54.99">
        <input type="text" class="text-field first-name" name="country" placeholder="Country e.g Turkey">
        <select name="genre" class="text-field">
            <option value=""> Select Genre </option>
            @foreach ($genre as $genres)
                <option value="{!! $genres->id !!}">{!! $genres->type !!}</option>
            @endforeach
               
        </select>

        <label>Photo:</label>
	    <input type="file" name="photo"> 
        
        <input type="submit" class="def-button" name="reg" value="CREATE">
        <input type="hidden" value="{{ Session::token() }}" name="_token">

      </form>
</div>

@endsection