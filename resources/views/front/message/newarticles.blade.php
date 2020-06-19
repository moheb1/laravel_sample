              
        <!------------Blog Markup Starts------------->  
        
        
        <section class="latest-news-area" id="latest">
            <div class="container">
                <div class="row" id="new-blogs">
                    <div class="col-xs-12">
                        <div class="section-title text-center wow zoomIn" data-wow-duration=".2s" data-wow-delay=".2s">
                            <h2><b>جدیدترین مقالات</b></h2>
                          
                          
                        </div>
                    </div>                    
                </div><br><br> 
                <div class="row">

                	@foreach($articles as $article)
                    <div class="news-active">
                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".4s">
                           <div class="latest-news-wrap">
                               <div class="news-img">
                                   <img  src="{{url('images/articles/'.$article->image)}}"  class="img-responsive">
                                   <div class="deat">
                                       <span>{{$article->created_at->toTimeString()}}</span>
                                       <span>{{$article->created_at->toDateString()}}</span>                                     
                                   </div>                                
                               </div>
                               <div class="news-content">
                                  <div class="newblog-description"> 
                                   <p>
                                {!! substr($article->description,0,140)."..." !!}                                    
                                       
                                   </p>
								     </div> 
								   <br>
                                   <a href="{{url('articles/'.$article->slug)}}">ادامه ی مطلب...</a> </p>
                                                                     
                               </div>                         
                               </div>                       
                              </div>
                              
                               
                       @endforeach
                              
                            


                              </div>                    
                            </div>         
                           </div>      
                           </div>
     
                    </section>
        
        
        <!------------Counter stats Markup Starts-------------> 
         