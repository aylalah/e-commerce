@extends('back.index')

@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('Dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
                <a href="{{url('view_product')}}">View Product</a>
              </li>
          <li class="breadcrumb-item active">Edit Product Product</li>
        </ol>

        <div class="row">
            <div class="col-md-6">
                <div class="">

                    {!! Form::open(['method'=>'POST', 'action'=>['ProductController@update', $data->id], 'enctype' => 'multipart/form-data' ]) !!}
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                              
    
                    <div class="form-group">
                        <label for="image" class="col-md-4 control-label">Image</label>

                        <div class="col-md-6">
                        <input type="file" name="file"   value="" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Product Name</label>

                        <div class="col-md-6">
                        <input id="pname" type="text" class="form-control" name="name" value="{{ $data->name}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details" class="col-md-4 control-label">Product No</label>

                        <div class="col-md-6">
                            <input id="details" type="text" class="form-control" name="details" value="{{ $data->details}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-md-4 control-label">Product Price</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="form-control" name="price" value="{{ $data->price}}" required>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="oprice" class="col-md-4 control-label">Other Price</label>

                        <div class="col-md-6">
                            <input id="oprice" type="text" class="form-control" name="other_price" required>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="desc" class="col-md-4 control-label">Product Description</label>

                        <div class="col-md-6">
                            <textarea id="desc" type="text" class="form-control" name="description" value="" required>{{ $data-> description}}</textarea>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="like" class="col-md-4 control-label">Like</label>

                        <div class="col-md-6">
                            <input id="like" type="text" class="form-control" name="like" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-md-4 control-label">Category</label>

                        <div class="col-md-6">
                            <input id="category" type="text" class="form-control" name="category" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-md-4 control-label">Status</label>
                        
                        <div class="form-group col-md-6">
                            <select name="status" class="form-control" required>
                                <option value=""></option>
                                <option value="hot">Hot</option>
                                <option value="sold">Sold</option>
                                <option value="out">Out</option>
                                <option value="sale">Sale</option>
                              </select>
                        </div>
                    </div> --}}
                    

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                          

                      {!! Form::close() !!}

                </div>
            </div>
        </div>
       

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

@endsection