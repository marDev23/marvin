@extends('layouts.app')

@section('content')
    <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Homes Furniture</a></li>
                        <li>Bedroom</li>
                    </ul>
                </div>

                <div class="col-md-9">

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>{{($products->currentpage()-1)*$products->perpage()+1}}</strong>-<strong>{{$products->currentpage()*$products->perpage()}}</strong> of <strong>{{$products->total()}}</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                    
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" id="sort" class="form-control">
                                                    <option>-Sort-</option>
                                                    <option value="">Price High - Low</a></option>
                                                    <option value="">Price Low - High</a></option>
                                                    <option value="">Name (Ascending)</a></option>
                                                    <option value="">Name (Descending)</a></option>
                                                </select>

                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">
                    @if(count($products) > 0)
                        @foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                    <img src="{{URL::to('cover_image/' .$product->image1)}}" alt="" class="img-responsive">
                                <div class="text">
                                    <h4><a href="detail.html">{{$product->title}}</a></h4>
                                    <p class="price">PHP {{number_format($product->price, 2, '.', ',')}}</p>
                                    <p class="buttons" style="margin-bottom: 0;">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                        @endforeach
                        {{$products->links()}}
                    @endif
                    </div>
                    <!-- /.products -->

                    {{-- <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div> --}}


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li class="active">
                                    <a href="#">home furniture <span class="badge pull-right">{{$products->total()}}</span></a>
                                    <ul>
                                        <li><a href="#">Living Room</a>
                                        </li>
                                        <li><a href="#">Bedroom</a>
                                        </li>
                                        <li><a href="#">Dining Room</a>
                                        </li>
                                        <li><a href="#">Outdoor</a>
                                        </li>
                                        <li><a href="#">Kid's Furniture</a>
                                        </li>
                                        <li><a href="#">Other Furniture</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">office furniture  <span class="badge pull-right">0</span></a>
                                    <ul>
                                        <li><a href="#">Chairs</a>
                                        </li>
                                        <li><a href="#">Tables</a>
                                        </li>
                                        <li><a href="#">Office Cabinets</a>
                                        </li>
                                        <li><a href="#">Safes and Vaults</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category.html">decor  <span class="badge pull-right">0</span></a>
                                    <ul>
                                        <li><a href="#">Artificial Flowers</a>
                                        </li>
                                        <li><a href="#">Mirrors</a>
                                        </li>
                                        <li><a href="#">Wall Clocks</a>
                                        </li>
                                        <li><a href="#">Wall Decors</a>
                                        </li>
                                        <li><a href="#">Vases</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="{{URL::to('img/banner1.jpg')}}" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection