<div id="default-top">
    <div id="top-navbar">
        @if(Auth::check())
        <span>
            <a id="" href="{{ route('logout') }}" data-href="http://localhost/ziguna_2/public/cart" class="" title="">
                خروج
            </a>
        </span>
        @else
        <span>
            <a id="" href="{{ route('register') }}" data-href="https://ziguna.com/search#!Keyword_" class="" title="">
                ثبت نام
            </a>
        </span>
        <span>
            <a id="" href="{{ route('login') }}" data-href="https://ziguna.com/search#!Keyword_" class="" title="">
                ورود
            </a>
        </span>
        @endif
    </div>
    <div id="header" class="header-flex-container">
       

        <div id="search-form" class="header-flex-item-2">
            <div> 
             <form action="{{url('search_result/')}}" id="topSearch" class="" novalidate="novalidate">
                <input type="hidden" value="@csrf_token">
                
                <button class="button" type="submit">
                <i class="fa fa-search">
                </i>
                <span class=""></span>
                </button>
                <input id="search_input_text" class="" name="word" type="text"
                placeholder="محصول مورد نظر خود را در سایت جستجو کنید..." data-token="" data-tokenkey=""
                data-url="search/index">
                
            </form>
        </div>
    </div>


      <div id="logo">
            <a class="" href="{{url('/')}}" title="ziguna.com">
                <span class="">
                    <img src="{{asset('img/logo.png')}}" alt="ziguna.com" class="logo" title="ziguna.com">

                </span>
            </a>
        </div>


    
    <div id="user_menu_bottom">
        <span>
            <a id="" href="{{url('cart')}}" data-href="http://localhost/ziguna_2/public/cart" class="" title="">
                <i class="fa fa-shopping-cart">
                </i>
            </a>
        </span>
        <span>
            <a id="" href="{{url('admin')}}" data-href="https://ziguna.com/search#!Keyword_" class="" title="">
                <i class="fa fa-user header-user-icon">
                </i>
            </a>
        </span>
    </div>
</div>
</li></ul>
<!-- </div> -->
</div>