@extends('layouts.front')
@section('content')
<div class="container my-5 py-5">
    <h3 class="text-center py-3">My Shopping Carts</h3>
    <div class="table-responsible">
        <table class="table table-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item Name</th>
                    <th>Image</th>
                    <th>Item Price</th>
                    <th>Discount</th>
                    <th>Qty</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
    </div>
    <div class="d-grid gap-2">
        @guest
            <a href="/login" class="btn btn-primary">Login</a>
        @else
            <form id="paymentForm" class="row" enctype="multipart/form-data">
               @csrf
                <div class="col-md-6">
                    <label for="payment_slip">Payment Slip</label>
                    <input type="file" name="payment_slip" id="payment_slip" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="payment_method">Payment method</label>
                    <select name="payment_method" id="payment_method" class="form-select">
                        <option>Choose PAyment Method</option>
                        @foreach($payments as $payment)
                            <option value="{{$payment->id}}">{{$payment->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="note">Note</label>
                    <textarea name="note" id="" class="form-control"></textarea>
                </div>
                <button class="btn btn-success my-3" id="order-now" type="submit">Order Now</button>
            </form>
        @endif
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
           // alert('hello');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#paymentForm').on('submit',function(e){
                e.preventDefault();
                //alert('hello');
                var formData = new FormData(this);
                console.log(formData);

                let itemString = localStorage.getItem('shops');
                formData.append('orderItems',itemString);

                $.ajax({
                    type: 'POST',
                    url: "{{route('orderNow')}}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);

                        if(response){
                            alert('Order Successful');
                            localStorage.clear('shops');
                            location.href= '/';
                        }
                    }
                })
            })
        })
    </script>
@endsection