

<div class="custom-product">
<div class="col-sm-10">

<div class="trending-wrapper">


<br><br>
@foreach($post as $index)
<h3 style="color:black;">{{$index->title}}</h3>
<br>
<p  style="color:blue;font-size:18px;">
{{$index-> content}}
</p>
<br>

@endforeach
</div>



   

