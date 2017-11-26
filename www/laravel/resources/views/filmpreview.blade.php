@extends('layouts.cus')
@section('browsertitle')filmpreview @stop
@section('content')


	
    <div class="book-display">
     <div class="display-book" style="background: url('{{ asset('/uploads/' . $film->photo )}}') 
       no-repeat center; background-size: cover; width: 168px;
       height: 218px;"></div>
        <div class="info">

         <h2 class="book-title">Title :{!! $film->name !!}</h2>
         <h4 class="book-title"> Release Date: {!! $film->release_date !!}</h4>
         <h4 class="book-title">Genre : {!! $film->genre->type !!}</h4>
         <h4 class="book-title">Rating : {!! $film->rating->grade !!}</h4>
         <h3 class="book-author">Synopsis: {!! $film->description !!}</h3>
         <h3 class="book-price">${!! $film->ticket_price !!}</h3>

        </div>   
    </div>
    <div class="book-reviews">
        <h3 class="header">Reviews</h3>
        @foreach ($filmcomments as $filmcomment)
          <ul class="review-list">
             <li class="review">
               <div class="info">
               <h4 class="username" style="color:green;">{{ $filmcomment->user->name }}</h4>
               <p class="comment">{{ $filmcomment->text }}</p>
               </div>
             </li>                
          </ul>
        @endforeach
     
      <div class="add-comment">
        <h3 class="header">Add your comment</h3>
        <form class="comment" action="/films/{!! $film->slug_name !!}/" method="POST">
          <textarea class="text-field" name="comm" placeholder="write something"></textarea>
          <input type="submit" class="def-button post-comment" name="upl" value="Upload comment"/>
          <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
      </div>
    </div>  

@endsection