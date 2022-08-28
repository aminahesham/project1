

<div class="custom-product">
<div class="col-sm-10">

<div class="trending-wrapper">


<br><br>
@foreach($user as $index)
<h3 style="color:black;">{{$index->name}}</h3>
<br>
<p  style="color:black;font-size:18px;">
{{$index-> email}}
</p>
<br>

@endforeach
</div>



   

