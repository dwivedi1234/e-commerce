@extends('front/supportive/action')
@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('orderaddress')}}" method="POST">
                  {{ csrf_field() }}
                    <div class="card-body">
                        <h4>Address</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                              <input type="text" name="name" class="form-control" placeholder=" Name">
      
                            
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="phone" class="form-control" placeholder=" phone">
                             
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                          <div class="col-md-6">
                            <input type="text" name="city" class="form-control" placeholder=" city">
      
                          
                          </div>
                          <div class="col-md-6">
                            <input type="text" name="pincode" class="form-control" placeholder=" pin-code">
                           
                          </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12">
                         <textarea class="form-control" name="description" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3"> 
                        <button type="submit" class="form-control btn btn-primary">Store</button>
                     </div>
                      </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
 <table class="table">
           <thead>
               <tr>
                   <th>#</th>
                   {{-- <th>Image</th> --}}
                   <th>Name</th>
                   <th>Quantity</th>
                   <th>Price</th>
                </tr>
           </thead>
           {{-- <tbody>

                    
                @php
                $total = 0;
                $sr =  0;
                @endphp
                @foreach (Session::get('cart') as $i=> $item)


                <tr>
                  <td>{{$sr+1}}</td>
                  
                  <td>{{$item['name']}}</td>
                  <td>{{$item['quantity']}} X {{$item['price']}}</td>
                  <td>{{$item['quantity'] * $item['price']}} Rs</td>
                </tr>

                @php
                $sr++;
                $total = $total + ($item['price'] * $item['quantity'] );
                @endphp
                @endforeach

           </tbody> --}}
       </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection