@extends('master')



@section('content')
<div class=" custom-product">
    
    <div class="trending-products">
        <div class="col-sm-4">
            <a href="#">filter</a>
        </div>
        <div class="col-sm-4">
            <h3>Search Result:</h3>
             @foreach ($products as $item )
            <div class="searched-item">
            <a href="detail/{{ $item['id'] }}">
            <img class="trending-img"  src="{{ $item['gallery'] }}" alt="product">
            <div class="">
              <h2>{{ $item['name'] }}</h2>
              <h5>{{ $item['description'] }}</h5>
              
            </div>
            </a>
        </div>    
        @endforeach
            
        </div>
        

    </div>
</div>

@endsection