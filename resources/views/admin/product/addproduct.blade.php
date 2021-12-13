@extends('admin/layout/app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>

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
                        <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control form-control-lg" name="product_name" placeholder="Product Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_id">
                                            <option selected="">Choose...</option>
                                            @foreach ($data['category'] as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Brand</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="brand_id">
                                            <option selected="">Choose...</option>
                                            @foreach ($data['brand'] as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Price</label>
                                            <input type="text" class="form-control" placeholder="Price" name="price">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Thumbnail <small> (size: 270 × 334 px) </small> </label>

                                            <input type="file" class="form-control" name="thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Description</label>
                                            <textarea name="description"class="form-control" id="editor" cols="30" rows="3" name="description"></textarea>
                                        </div>
                                    </div>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                    
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