

<div class="custom-product">
<div class="col-sm-10">

<div class="trending-wrapper">


<br><br>
@foreach($posts as $post)
<h3 style="color:black;">{{$post->title}}</h3>
<br>
<p  style="color:black;font-size:18px;">
{{$post-> content}}
</p>
<br>

@endforeach
</div>



   

