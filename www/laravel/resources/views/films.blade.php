@extends('layouts.cus')
@section('browsertitle')films @stop
@section('content')
    

    <div class="book-display">
      @foreach ($payload as $payloads)
        <a href="/films/{{ $payloads->slug_name }}/">
          <div class="display-book" style="background: url('{{ asset('/uploads/' . $payloads->photo )}}') 
          no-repeat center; background-size: cover; width: 190px;
          height: 270px;"></div>
      <div class="info">
        <h2 class="book-title">{{ $payloads->name }}</h2>
          <h3 class="book-author">{{ $payloads->description }}</h3>
            <h3 class="book-price">${{ $payloads->ticket_price }}</h3></a>
      </div>
      @endforeach 
               
    </div>
    <div class="text-center"> {{ $payload->links() }}</div>

@endsection
