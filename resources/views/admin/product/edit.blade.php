@extends('admin.layouts.default')



@section('header_css')
@include('admin.layouts.css')
@stop
@section('header')
@stop
@section('main_content')
<style>
  .btn-primary{
    margin-bottom:20px;
  }
</style>


<?php
session()->flash('trycreateflash','mohammad');

?>

@if(count($errors)>0)

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
<li>{{$error}}</li>
    @endforeach

  </ul>
</div>

@endif


<!-- <div id="page-wrapper"> -->
<form action="" id="createproductform" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  عنوان<input type="text" name="title" id="" class="form-control" value="{{$product->title}}" required><br>
  
 عنوان منحصر به فرد برای آدرس<input type="text" name="slug" id="" class="form-control" required value="{{$product->slug}}"><br>
 
 
  عنوان منحصر به فرد جهت عنوان صفحه<input type="text" name="page_title" id="" class="form-control" value="{{$product->page_title}}" required><br>
  
  
  
  <div id="categorydiv" class="form-group">
    نوع محصول
    <select name="category" id="selectcategory"  class="form-control" >
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
  <div id="properties" class="">
 
  <div class="form-group">
  <label for="" id=""></label>
  <select name="default" id="defaultprop" style="display:none"></select>
</div>
</div>
<br>
واحد<select name="package" id=""  class="form-control" >
  @foreach($packages as $package)
  <option value="{{$package->id}}">{{$package->title}}</option>
  @endforeach
</select>
<br>
کلمات کلیدی
<select name="keywords[]" id=""  class="form-control" multiple >
  @foreach($keywords as $keyword)
  <option value="{{$keyword->id}}">{{$keyword->name}}</option>
  @endforeach
</select>
<br>
قیمت <input type="text" name="price" id="" value="{{$product->price}}" class="form-control"><br>
<!-- توضیحات <input type="text" name="description" id="" class="form-control" value="{{--$product->description--}}"><br> -->
تصویر اصلی<input type="file" name="thumbnail" id="" class="form-control" ><br>

  <img src="{{asset('images/products/'.$product->image)}}" width="200px" height="auto"  alt="">
      <input type="hidden" value="{{$product->image}}" name="imagename">
<br>

<br>

<div id="extis_extra_images">
  <?php 

$i=1;

?>
@foreach($product->extraimages as $extraimage)
<div class="previousely-exImage">
<input name="{{'exist_ext_image_'.$i}}" value="{{$extraimage->name}}" class="form-control" type="" >
<img width="300px" src="{{asset('images/products/'.$extraimage->name) }}" alt="">
<a id="" class="btn-primary create_extra_image_remove" value=""  >
  <label for=""  class="fa fa-remove">   حذف </label>
</a>
</div>
<?php
$i++;
?>
@endforeach
</div>
<fieldset>

<div id="extraimages" class="form-group">

</div>
</fieldset>

<a id="create_extra_image" class="btn-primary" value=""  >+
  <label for="" class="">بارگزاری تصویر بیش تر </label>
</a>
<br>
<br>
<br>
<textarea name="body" id="body" rows="10" cols="80">
{{$product->description}}
</textarea>
<button type="submit" value="save" class="btn-primary">save
</button>
</form>
</div>
<!-- </div>
</div>
-->
<!-- <div id="editor">
<p>This is the editor content.</p>
</div> -->
<script>
var CKEDITOR_BASEPATH = '../../../js/ckeditor/';
var addextraimageinputbutton = document.querySelector('#create_extra_image');
var createproductform = document.querySelector('#extraimages');
addextraimageinputbutton.addEventListener('click', addextraimageinput);
var removeThisExtraImageBtns=document.querySelectorAll('.create_extra_image_remove');
removeThisExtraImageBtns.forEach(function(removeThisExtraImageBtn){

  removeThisExtraImageBtn.addEventListener('click',removeThisExtraImage);
})

var extimageremovebutons=document.querySelectorAll('.fa-remove');
// console.log(extimageremovebutons);
extimageremovebutons.forEach(function(extimageremovebuton){
extimageremovebuton.addEventListener('click',deleteExistExtImage);


});

function deleteExistExtImage(e){
e.preventDefault;
  // alert('hit on remove button');
}



function removeThisExtraImage(e){
  e.target.parentNode.parentNode.remove();
}



function addextraimageinput() {
    // var createExtraImagePrev=document.get
    extraimageinputfiledbase = document.querySelector('#extraimage_1');
    var label = document.createElement(label);
    var extraimagecreatedprev = document.querySelectorAll('#extraimages>input');
    var newextraimageinputfiled = document.createElement('input');
    newextraimageinputfiled.setAttribute('name', extraimagecreatedprev.length + 1);
    newextraimageinputfiled.setAttribute('class', 'form-control');
    newextraimageinputfiled.setAttribute('type', 'file');
    var brelement = document.createElement('br');
    var deleteThisExtraImageBtn=document.createElement('button');
    // deleteThisExtraImageBtn.setAttribute('class','');
    deleteThisExtraImageBtn.className='fa fa-remove btn btn-primary';
    deleteThisExtraImageBtn.append(brelement);
    deleteThisExtraImageBtn.appendChild(document.createTextNode('حذف'));

    labelvaluenumber = extraimagecreatedprev.length + 2;
    labelvalue = 'تصویر' + labelvaluenumber;
    label.append(labelvalue);
    createproductform.append(label);
    createproductform.append(newextraimageinputfiled);
    createproductform.append(brelement);
    createproductform.append(deleteThisExtraImageBtn);
    // extraimageinputfiled=extraimageinputfiledbase.setAttribute('name',extraimagecreatedprev.length+'1');
}
categoryselect = document.getElementById('selectcategory');
categoryselect.addEventListener('change', alertthatchanged);
defaultproperti = document.getElementById('defaultprop');


//*************************************************************/

function loadpropertyoptions(property_id){
      const xhr = new XMLHttpRequest();
    xhr.open('GET', '../../api/properties/' + property_id, true);
    xhr.onload = function() {
        if (this.status === 200) {
            var options = "";
            var label=
            JSON.parse(this.responseText).forEach(function(takprop) {
                options += '<label>' + takprop.label + '</label><select><option>'+takprop.name+'</option>';

            })


        }
    }
    xhr.send();
}

//*************************************************************/


function alertthatchanged(e) {
    const xhr = new XMLHttpRequest();
    // console.log(e.target.value);
    xhr.open('GET', '../../api/properties/' + e.target.value, true);
    xhr.onload = function() {
        if (this.status === 200) {
            let selectcategory =document.createElement('select');
            let label=document.createElement('label');;
            JSON.parse(this.responseText).forEach(function(takprop) {
                // selectcategory += '<label>' + takprop.label + '</label><select><option>'+takprop.name+'</option>';
              // var label=document.createElement('label');



                labelinner=document.createTextNode(takprop.label);
              label.appendChild(labelinner);
              var option=document.createElement('option');
              optionvalue=document.createTextNode(takprop.name);
              option.appendChild(optionvalue);
              //'<option>'+takprop.name+'</option>';
              selectcategory.appendChild(label);
                // selectcategory.appendChild(option);


                // loadpropertyoptions(takprop.)

            })

// console.log(label);

            var propertiselect = document.createElement('select');
            propertiselect.setAttribute('class', 'form-control');
            propertiselect.setAttribute('id','defaultprop');
            // var sfdfsdf=document.getElementById('properties');
            // sfdfsdf.appendChild(propertiselect);
            propertiselect.innerHTML = selectcategory;
            var defaultprop=document.getElementById('defaultprop');
            // defaultproperti=document.getElementById('defaultprop');
            var properties = document.getElementById('properties');
            // console.log(defaultprop);
            properties.replaceChild(propertiselect,defaultprop);



            // properties.replaceChild(propertiselect, defaultproperti);
        }
    }
    xhr.send();
}
</script>
@stop
@section('footer_js')
<script src="{{asset('js/admin_app_witheditor.js')}}"></script>

<script>



   CKEDITOR.replace('body', {
     language: 'fa',
     // uiColor: '#9AB8F3',
     // customConfig: '/custom/ckeditor_config.js'
 });
</script>

@stop
@section('footer')
@stop
