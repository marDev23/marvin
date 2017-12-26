<!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="">About us</a>
                            </li>
                            <li><a href="">Terms and conditions</a>
                            </li>
                            <li><a href="">FAQ</a>
                            </li>
                            <li><a href="">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            @guest
                                <li><a href="{{route('login')}}">login</a></li>
                                <li><a href="{{route('register')}}">register</a></li>
                            @else
                                <li><a class="text-white"</a>Hi, {{ Auth::user()->name }}</a></li>
                                <li><a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                </li>
                            @endguest
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5><a href="">Home Furniture</a></h5>

                        <ul>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                        </ul>

                        <h5><a href="">Office Furniture</a></h5>
                        <ul>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                        </ul>
                        <h5><a href="">Decor</a></h5>
                        <ul>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                            <li><a href="/"></a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Tingson Furniture</strong>
                            <br>Masao
                            <br>Tungawan
                            <br>Zamboanga Sibugay
                            <br>7018
                            <br>
                            <strong>Philippines</strong>
                        </p>

                        <a href="/">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 TingsonFurniture.com</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">by Tingson's Group
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
