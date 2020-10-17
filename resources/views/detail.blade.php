@extends('layout')
@section('detail')


<section >
<div class="container" >
<div class="full blog_cont"style="background-color:white;padding:3em;">
                
                  <h4><a href="{{route('detail',['id'=>$post1->id])}}">{{$post1->post_title}}</a></h4>
                     <h5>{{$post1->post_date}}</h5>
                     
<p>{{$post1->post_desc}}</p>
                     
                  </div>
                  </div>
</section>
@endsection