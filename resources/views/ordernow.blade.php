@extends('master')

@section('content')

<div class=" custom-product">
    <div class="col-sm-10">
        <table class="table">
            <thead>
              <tr>
                <th></th>
                <th>Amount in INR</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>Amount</td>
                <td>{{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <label for="address">Enter address:</label>
                  <textarea name="address" class="form-control" id="address"></textarea>
                </div>
                <div class="form-group">
                  <label for="payment">Payment Method:</label><br><br>
                  <input type="radio" value="cash" name="payment"><span>Online</span><br><br>
                  <input type="radio" value="cash" name="payment"><span>EMI</span><br><br>
                  <input type="radio" value="cash" name="payment"><span>COD</span><br><br>
                </div>
                
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
    </div>

</div>

@endsection