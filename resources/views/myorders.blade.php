@extends('master')

@section('content')
<div class=" custom-product">
    
    <div class="trending-products">
        
        <div class="col-sm-10">
            <h3>My Orders:</h3>
            
             @foreach ($orders as $item )
            <div class="row searched-item cart-item-divider">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-img"  src="{{ $item->gallery }}" alt="product">
                        
                        </a>
                </div>
                <div class="col-sm-4">
                    
                        <div class="">
                          <h2>Name : {{ $item->name }}</h2>
                          <h5>Delivery Status : {{ $item->status }}</h5>
                          <h5>Address : {{ $item->address }}</h5>
                          <h5>Payment Method : {{ $item->payment_method }}</h5>
                          <h5>Payment Status : {{ $item->payment_status }}</h5>
                          
                         
                        </div>
                        
                </div>
               
        </div>    
        @endforeach
        
        </div>
        

    </div>
</div>

@endsection