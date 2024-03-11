@include('header')
<!-- <pre>{{print_r($data)}}</pre> -->
        <section class="as_zodiac_single_wrapper as_padderTop80 as_padderBottom60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="as_zodiac_single_inner">
                            <div class="as_zodiac_heading as_padderBottom50">
                                <span class="as_sign"><img src="assets/images/svg/sign1.svg" alt=""></span>
                                Aries Horoscope 
                                <span>( Mar 21 - Apr 19 )</span>
                            </div>

                            <div class="as_tab_wrapper" >
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="Today" data-bs-toggle="tab" data-bs-target="#today" type="button" role="tab" aria-controls="today" aria-selected="true">Today</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Tomorrow" data-bs-toggle="tab" data-bs-target="#tomorrow" type="button" role="tab" aria-controls="tomorrow" aria-selected="false">Tomorrow</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="This-Week" data-bs-toggle="tab" data-bs-target="#this-week" type="button" role="tab" aria-controls="this-Week" aria-selected="false">This Week</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="This-Month" data-bs-toggle="tab" data-bs-target="#this-month" type="button" role="tab" aria-controls="this-month" aria-selected="false">This Month</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="This-Year" data-bs-toggle="tab" data-bs-target="#this-year" type="button" role="tab" aria-controls="this-year" aria-selected="false">This Year</button>
                                  </li>
                                </ul>
                                <div class="tab-content" id="myTabContent" >
                                       <h3 class="as_subheading as_orange">Status</h3>
                                       <p class="as_font14 as_padderBottom20">{{$data['response']['bot_response']['status']['split_response']}}</p>

                                       <h3 class="as_subheading as_orange">Phsique</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum nisi ut aliquip ex ea commodo consequat.</p>
                                       
                                       <h3 class="as_subheading as_orange">Family</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum nisi ut aliquip ex ea commodo consequat.</p>
                                       
                                       <h3 class="as_subheading as_orange">Friends</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum nisi ut aliquip ex ea commodo consequat.</p>
                                       
                                       <h3 class="as_subheading as_orange">RelationShip</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum nisi ut aliquip ex ea commodo consequat.</p>


                                       <h3 class="as_subheading as_orange">Travel</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam, sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est laborumc ommodo consequat. Duiess aute irure.</p>
                                       
                                       <h3 class="as_subheading as_orange">Career</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam, sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident.</p>

                                       <h3 class="as_subheading as_orange">Finance</h3>
                                       <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam, sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est laborumc ommodo consequat. Duiess aute irure.</p>

                                       <h3 class="as_subheading as_orange">Health</h3>
                                       <p class="as_font14 as_padderBottom10">Consectetur adipisicing elit, sed do eiusmod tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam, sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est laborumc ommodo consequat. Duiess aute irure.</p>

                                    </div>
                                    
                                       
                                    

                                         

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        
@include('footer')