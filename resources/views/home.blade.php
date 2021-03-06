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
        <img src="{{ asset('front/img/fashion/fashion-banner.jpg')}}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
          <div class="container">
           <div class="aa-catg-head-banner-content">
             <h2>Fashion</h2>
             <ol class="breadcrumb">
               <li><a href="index.html">Home</a></li>         
               <li class="active">Women</li>
             </ol>
           </div>
          </div>
        </div>
       </section>
       <!-- / catg header banner section -->
     
       <!-- product category -->
       <section id="aa-product-category">
         <div class="container">
           <div class="row">
             <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
               <div class="aa-product-catg-content">
                 <div class="aa-product-catg-head">
                   <div class="aa-product-catg-head-left">
                     <form action="" class="aa-sort-form">
                       <label for="">Sort by</label>
                       <select name="">
                         <option value="1" selected="Default">Default</option>
                         <option value="2">Name</option>
                         <option value="3">Price</option>
                         <option value="4">Date</option>
                       </select>
                     </form>
                     <form action="" class="aa-show-form">
                       <label for="">Show</label>
                       <select name="">
                         <option value="1" selected="12">12</option>
                         <option value="2">24</option>
                         <option value="3">36</option>
                       </select>
                     </form>
                   </div>
                   <div class="aa-product-catg-head-right">
                     <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                     <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                   </div>
                 </div>


                    @yield('category')


                 <div class="aa-product-catg-pagination">
                   <nav>
                     <ul class="pagination">
                       <li>
                         <a href="#" aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                         </a>
                       </li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li>
                         <a href="#" aria-label="Next">
                           <span aria-hidden="true">&raquo;</span>
                         </a>
                       </li>
                     </ul>
                   </nav>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
               <aside class="aa-sidebar">
                 <!-- single sidebar -->
                 <div class="aa-sidebar-widget">
                   <h3>Category</h3>
                   <ul class="aa-catg-nav">
                     <li><a href="{{url('home')}}">All</a></li>
                     <li><a href="{{route('home_categ','men')}}">Men</a></li>
                     <li><a href="{{route('home_categ')}}">Women</a></li>
                     <li><a href="{{route('home_categ')}}">Kids</a></li>
                     <li><a href="{{route('home_categ')}}">Electornics</a></li>
                     <li><a href="{{route('home_categ')}}">Sports</a></li>
                   </ul>
                 </div>
                 <!-- single sidebar -->
                 <div class="aa-sidebar-widget">
                   <h3>Tags</h3>
                   <div class="tag-cloud">
                     <a href="#">Fashion</a>
                     <a href="#">Ecommerce</a>
                     <a href="#">Shop</a>
                     <a href="#">Hand Bag</a>
                     <a href="#">Laptop</a>
                     <a href="#">Head Phone</a>
                     <a href="#">Pen Drive</a>
                   </div>
                 </div>
                 <!-- single sidebar -->
                 <div class="aa-sidebar-widget">
                   <h3>Shop By Price</h3>              
                   <!-- price range -->
                   <div class="aa-sidebar-price-range">
                    <form action="">
                       <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                       </div>
                       <span id="skip-value-lower" class="example-val">30.00</span>
                      <span id="skip-value-upper" class="example-val">100.00</span>
                      <button class="aa-filter-btn" type="submit">Filter</button>
                    </form>
                   </div>              
     
                 </div>
                 <!-- single sidebar -->
                 <div class="aa-sidebar-widget">
                   <h3>Shop By Color</h3>
                   <div class="aa-color-tag">
                     <a class="aa-color-green" href="#"></a>
                     <a class="aa-color-yellow" href="#"></a>
                     <a class="aa-color-pink" href="#"></a>
                     <a class="aa-color-purple" href="#"></a>
                     <a class="aa-color-blue" href="#"></a>
                     <a class="aa-color-orange" href="#"></a>
                     <a class="aa-color-gray" href="#"></a>
                     <a class="aa-color-black" href="#"></a>
                     <a class="aa-color-white" href="#"></a>
                     <a class="aa-color-cyan" href="#"></a>
                     <a class="aa-color-olive" href="#"></a>
                     <a class="aa-color-orchid" href="#"></a>
                   </div>                            
                 </div>
                 <!-- single sidebar -->
                 <div class="aa-sidebar-widget">
                   <h3>Recently Views</h3>
                   <div class="aa-recently-views">
                     <ul>
                       <li>
                         <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                         <div class="aa-cartbox-info">
                           <h4><a href="#">Product Name</a></h4>
                           <p>1 x $250</p>
                         </div>                    
                       </li>
                       <li>
                         <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                         <div class="aa-cartbox-info">
                           <h4><a href="#">Product Name</a></h4>
                           <p>1 x $250</p>
                         </div>                    
                       </li>
                        <li>
                         <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                         <div class="aa-cartbox-info">
                           <h4><a href="#">Product Name</a></h4>
                           <p>1 x $250</p>
                         </div>                    
                       </li>                                      
                     </ul>
                   </div>                            
                 </div>
                 <!-- single sidebar -->
                 <div class="aa-sidebar-widget">
                   <h3>Top Rated Products</h3>
                   <div class="aa-recently-views">
                     <ul>
                       <li>
                         <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                         <div class="aa-cartbox-info">
                           <h4><a href="#">Product Name</a></h4>
                           <p>1 x $250</p>
                         </div>                    
                       </li>
                       <li>
                         <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                         <div class="aa-cartbox-info">
                           <h4><a href="#">Product Name</a></h4>
                           <p>1 x $250</p>
                         </div>                    
                       </li>
                        <li>
                         <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                         <div class="aa-cartbox-info">
                           <h4><a href="#">Product Name</a></h4>
                           <p>1 x $250</p>
                         </div>                    
                       </li>                                      
                     </ul>
                   </div>                            
                 </div>
               </aside>
             </div>
            
           </div>
         </div>
       </section>
       <!-- / product category -->
     
     
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
