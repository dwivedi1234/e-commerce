@extends('admin/layout/app')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
       <div class="row">
          <div class="col-7 align-self-center">
             <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"> Add Product</h3>
             
             @foreach (['danger', 'warning', 'success', 'info'] as $key)
             @if(Session::has($key))
                 <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
             @endif
         @endforeach 
          </div>
          <div class="col-5 align-self-center">
             <div class="customize-input float-right">
             </div>
          </div>
       </div>
    </div>
    <div class="container-fluid">
          <div class="row">
             <div class="col-md-12">
                 <div class="card">
                 <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $i => $item)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td><img src="{{asset('uploads/product/'.$item->thumbnail)}}" style="width: 50px" alt=""> </td>     
                            <td>{{$item->name}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->brand->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="{{route('editproduct',$item->id)}}"><img src="{{asset('backend/assets/images/edit.svg')}}" alt=""></a> 
                                <a href="{{route('deleteproduct',$item->id)}}"><img src="{{asset('backend/assets/images/hg.svg')}}" alt=""> </a>
                             </td>                  
                         </tr>
                        @endforeach
                    </tbody>
                </table>
                 </div>
                 </div>
                </div>
             </div>
          </div>
    </div>
 @endsection