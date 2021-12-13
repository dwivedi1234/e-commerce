@extends('front/supportive/action')
@section('content')
  <div class="container">

    @if (Session::get('cart') )



      <div class="row">
       <table class="table">
           <thead>
               <tr>
                   <th>#</th>
                   <th>Image</th>
                   <th>Name</th>
                   <th>Quantity</th>
                   <th>Price</th>
                </tr>
           </thead>
           <tbody>

                    
                @php
                $total = 0;
                $sr =  0;
                @endphp
                @foreach (Session::get('cart') as $i=> $item)


                <tr>
                  <td>{{$sr+1}}</td>
                  <td><img src="{{asset('uploads/product/'.$item['thumbnail'])}}" style="width:64px" alt=""> </td>
                  <td>{{$item['name']}}</td>
                  <td>{{$item['quantity']}} X {{$item['price']}}</td>
                  <td>{{$item['quantity'] * $item['price']}} Rs</td>
                </tr>

                @php
                $sr++;
                $total = $total + ($item['price'] * $item['quantity'] );
                @endphp
                @endforeach

           </tbody>
       </table>
       
       

      </div>


      <div class="row mb-2">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <hr>
         <div>
             <span class="float-right">
                  <h4  class="float-right" >Total: {{$total}} Rs</h4> <br>

                  <div class="mt-4 mb-3" >
                    <a href="{{route('checkout')}}" class="btn btn-primary" >Check Out</a>
                  </div>
             </span>

         </div>
        </div>
    </div>
    
    @else
    
    <h1>Card is empty</h1>

    @endif

  </div>
@endsection


