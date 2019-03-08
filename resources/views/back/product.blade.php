@extends('back.index')

@section('content')
    <div class="container-fluid">
         <!-- Breadcrumbs-->
         <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{url('Dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                        <a href="{{route('add_product')}}">Add Product</a>
                      </li>
                <li class="breadcrumb-item active">View Product</li>
              </ol>

    {{-- @if (count($data) > 0) --}}
        
        <!-- DataTables Example -->
        <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-table"></i>
                  Product Table</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Details</th>
                          <th>Price</th>
                          <th>Category</th>
                        <th>Status </th>
                          <th>Description</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                                <th>S/N</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Status </th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                        </tr>
                      </tfoot>
                      <tbody>

                    @foreach ($data as $d)

                    <tr>
                            <td>{{$d-> id}}</td>
                            <td><a href="{{ asset('/upload/product/'.$d-> slug)}}"><img class="img-fluid rounded-circle" style="width:50px; height:50px" src="{{ asset('/upload/product/'.$d-> slug)}}" /></a></td>
                              <td>{{$d-> name}}</td>
                              <td>{{$d-> details}}</td>
                              <td>{{$d-> price}}</td>
                              <td>{{$d-> category_id}}</td>
                              <td>{{$d-> status}}</td>
                              <td>{{$d-> description}}</td>
                              <td><a href="{{ route('product.edit', $d->id) }}"> <i class="fa fa-edit"></i></a></td>
                              <td><a href="{{ route('product.delete', $d->id) }}"> <i class="fa fa-trash"></i></a></td>
                            </tr>
                        
                    @endforeach      
                        {{-- {{$data->link()}}               --}}
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
      

        
       

    </div>
      <!-- /.container-fluid -->

      {{-- @endif --}}

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

@endsection