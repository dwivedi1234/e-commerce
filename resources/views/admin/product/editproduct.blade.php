@extends('admin/layout/app')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
       <div class="row">
          <div class="col-7 align-self-center">
             <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"> Update Product</h3>
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
                        <form action="{{route('updateproduct',$product->id)}}" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control form-control-lg" name="product_name" placeholder="Product Name" value="{{$product->name}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_id">
                                            <option selected="">Choose...</option>
                                            @foreach ($category as $item)
                                            <option  value="{{$item->id}}" 

                                                @if ($item->id == $product->category_id)
                                                    selected
                                                @endif
                                                
                                                >{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Brand</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="brand_id">
                                            <option selected="">Choose...</option>
                                            @foreach ($brand as $item)
                                            <option value="{{$item->id}}" 
                                                
                                                @if ($item->id == $product->brand_id)
                                                  selected
                                                @endif 
                                            
                                            >{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                            
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Price</label>
                                            <input type="text" class="form-control" placeholder="Price" name="price" value="{{$product->price}}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Thumbnail <small> (size: 270 × 330 px) </small> </label>
                                            <input type="file" class="form-control" name="thumbnail" value="{{$product->thumbnail}}">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Description</label>
                                            <textarea name="description"class="form-control" id="" cols="30" rows="3" name="description">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>   
                            </div>
                            <div class="form-actions">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
             </div>
          </div>
    </div>
 </div>
 @endsection