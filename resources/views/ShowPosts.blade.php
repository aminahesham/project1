

<?php
use App\Models\Post;
$posts= Post :: all();
?>
<style>

</style>


<br>

<h2 style="color:black;text-align: center;">All Posts !</h2>


<div class="container" style="margin:10px; border-color: #996666; border-radius: 10px ;">

<div id='#showposts'>
<br><br>
@foreach($posts as $post)
<h3 style="color:black;">{{$post['title']}}</h3>
<br>
<p  style="color:black;font-size:18px;">
{{$post['content']}}
</p>
<br>

@endforeach
</div>



</div>
  


