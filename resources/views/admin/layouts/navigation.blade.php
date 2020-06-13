<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
<ul class="nav" id="side-menu">
    <li>
        <a class="active" href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i> داشبورد مدیریت</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i> محصولات<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('/admin/products')}}">لیست محصولات</a>
            </li>
            <li>
                <a href="{{url('/admin/products/create')}}">افزودن محصول</a>
            </li>
			 <li>
                <a href="{{url('admin/products/images')}}">تصاویر دیگر از محصولات</a>
            </li>
			
        </ul>
        <!-- /.nav-second-level -->
    </li>
	
	    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i> جزئیات بیشتر درباره ی محصول<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('/admin/products')}}">انتخاب محصول</a>
            </li>
            <li>
                <a href="{{url('/admin/propertiyvlue/create')}}">افزودن خصوصیت</a>
            </li>
			<!-- <li>
                <a href="{{--url('admin/products/images')--}}">افزودن ویژگی جدید به محصول</a>
            </li>-->
			
        </ul>
        <!-- /.nav-second-level -->
    </li>
	
    
<?php 
$user=Auth::user();


?>

 <!-- {{--@if ($user->role->title == 'developer') --}}   -->
    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i>نوع محصول<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('admin/categories')}}">لیست انواع</a>
            </li>
			  <li>
                <a href="{{url('admin/categories/create')}}">افزودن نوع جدید</a>
            </li>
           <!-- <li>
                <a href="{{--url('admin/l2category')--}}">سطح دو</a>
            </li>-->
            
         
            
        </ul>
        <!-- /.nav-second-level -->
    </li>
   <!-- {{--@endif--}}  -->
    <li>
        <a href="{{url('admin/orders')}}"><i class="fa fa-files-o fa-fw"></i>سفارشات<span class=""></span></a>
        
        <!-- /.nav-second-level -->
    </li>
	
	
	
	    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i> مقالات<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('/admin/articles')}}">لیست مقالات</a>
            </li>
            <li>
                <a href="{{url('/admin/articles/create')}}">افزودن مقاله</a>
            </li>
			
        </ul>
        <!-- /.nav-second-level -->
    </li>
	
	
		    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i> کلمات کلیدی<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('/admin/keywords')}}">لیست</a>
            </li>
            <li>
                <a href="{{url('/admin/keywords/create')}}">افزودن</a>
            </li>
			
        </ul>
        <!-- /.nav-second-level -->
    </li>
	
	
	
    
    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i>تصاویر<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('admin/slides')}}">اسلایدها</a>
            </li>
            <li>
                <a href="{{url('admin/baners')}}">بنرها</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
      {{--@if ($user->role->title == 'developer') --}}
    
    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i>کاربران<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('admin/users')}}">مشاهده</a>
            </li>
          <!--  <li>
                <a href="login.html">ویرایش</a>
            </li>-->
        </ul>
        <!-- /.nav-second-level -->
    </li>

  {{-- @endif--}} 
	
	
	    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i>تولید کنندگان<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('admin/producers')}}">مشاهده</a>
            </li>
          <!--  <li>
                <a href="login.html">ویرایش</a>
            </li>-->
        </ul>
        <!-- /.nav-second-level -->
    </li>
	
	
	
    
    
</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>