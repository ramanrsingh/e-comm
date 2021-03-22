@extends('master')

@section('content')
<div class=" custom-product">
    
    <div class="trending-products">
        
        <div class="col-sm-10">
            <h3>Cart Items:</h3>
            <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
             @foreach ($products as $item )
            <div class="row searched-item cart-item-divider">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-img"  src="{{ $item->gallery }}" alt="product">
                        
                        </a>
                </div>
                <div class="col-sm-4">
                    
                        <div class="">
                          <h2>{{ $item->name }}</h2>
                          <h5>{{ $item->description }}</h5>
                         
                        </div>
                        
                </div>
                <div class="col-sm-3">
                   <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart</a>
                </div>
            
        </div>    
        @endforeach
        <a href="ordernow" class="btn btn-success">Order Now</a><br><br>   
        </div>
        

    </div>
</div>

@endsection