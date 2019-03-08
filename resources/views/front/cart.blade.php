@extends('layouts.app')

@section('content')
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
          <div class="container">
           <div class="aa-catg-head-banner-content">
             <h2>Cart Page</h2>
             <ol class="breadcrumb">
               <li><a href="index.html">Home</a></li>                   
               <li class="active">Cart</li>
             </ol>
           </div>
          </div>
        </div>
       </section>
       <!-- / catg header banner section -->
     
      <!-- Cart view section -->
      <section id="cart-view">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cart-view-area">
                <div class="cart-view-table">
                  <form action="">
                    <div class="table-responsive">
                       <table class="table">
                         <thead>
                           <tr>
                             <th></th>
                             <th></th>
                             <th>Product</th>
                             <th>Price</th>
                             <th>Quantity</th>
                             <th>Total</th>
                           </tr>
                         </thead>
                         <tbody>
                    <?php
                      $total=0;  
                    ?>
                        @foreach ($cartproduct as $data)
                            
                           <tr>
                           <td><a class="remove" href="{{url('/delete-cart', $data->rowId)}}"><fa class="fa fa-close"></fa></a></td>
                             <td><a href="#"><img src="" alt="img"></a></td>
                             <td><a class="aa-cart-title" href="#">{{$data-> name}}</a></td>
                             <td>N{{$data-> price}}</td>
                             {!! Form::open(['url'=>'/update_cart', 'method'=>'POST' ]) !!}
                           
                             <td>  <input class="aa-cart-quantity" name="rowId" type="hidden" value="{{$data-> rowId}}"><input class="aa-cart-quantity" name="qty" type="number" value="{{$data-> qty}}">
                            <button type="submit"  class="btn btn-info">update cart</button></td>
                             {!! Form::close() !!}
                             <?php
                           $subtotal=$data-> price*$data-> qty;  
                         ?>
                             <td>N{{$subtotal}}</td>
                           </tr>
                           <?php
                           $total=$subtotal+$total;  
                         ?>
                        @endforeach 
                           
                           </tbody>
                       </table>
                     </div>
                  </form>
                  <!-- Cart Total view -->
                  <div class="cart-view-total">
                    <h4>Cart Totals</h4>
                    <table class="aa-totals-table">
                      <tbody>
                        <tr>
                          <th>Subtotal</th>
                          <td>{{$data-> subtotal}}</td>
                        </tr>
                        <tr>
                          <th>Total</th>
                          <td>N{{Cart::total()}}</td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Cart view section -->
     
     
       <!-- Subscribe section -->
       <section id="aa-subscribe">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="aa-subscribe-area">
                 <h3>Subscribe our newsletter </h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                 <form action="" class="aa-subscribe-form">
                   <input type="email" name="" id="" placeholder="Enter your Email">
                   <input type="submit" value="Subscribe">
                 </form>
               </div>
             </div>
           </div>
         </div>
       </section>
       <!-- / Subscribe section -->
@endsection
