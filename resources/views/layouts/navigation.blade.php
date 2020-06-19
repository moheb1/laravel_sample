 <div class="navbar  navbar-expand-lg  navbar-light  bg-light" id="front-navigation">
 <div><a  class="nav-link"  link href="{{url('/')}}">{{__('navigation.home')}}</a></div>
  

 @can('edit articles')

 <div><a link href="{{url('/admin/articles')}}">{{__('navigation.articles_management')}}</a></div>

@endcan

 @can('manage all')

manage all
@endcan

@role('writer')
   <div><a link href="{{url('/admin/articles/create')}}">{{__('navigation.create')}} {{__('navigation.article')}}</a></div>
@endrole
 <div><a link href="{{url('/admin/messages/create/')}}">{{__('navigation.send_message')}}</a></div>
  <div><a link href="{{url('/admin/messages')}}">{{__('navigation.message_management')}}</a></div>
 @if (!Auth::check())

 <div><a link href="{{url('/register')}}">{{__('navigation.sign_up')}}</a></div>
 <div id="login"><a link href="{{url('/login')}}">{{__('navigation.sign_in')}}</a></div>
@else
<div id="logout"><a link href="{{url('/admin/logout')}}">{{__('navigation.logout')}}</a></div>


@endif
 



 </div>