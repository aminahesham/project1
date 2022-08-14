

<style>

body {
background-color:white;
}

#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: white;
    font-weight:bold;
    background-color: orange;
    font-size: 14px;
    border: none;
}  

#submit:hover{ 
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}
#form{
    width:600px;
    background-color: #04AA6D;
    border-radius:20px;
    height:350px;


}

</style> 


    

            


    <div align="center">

<form id="form" method="post" action="" enctype="multipart/form-data">
@csrf
<br><br>
<h3 style="color:white; text-align: center;font-size:20px;">Update Post</h3><br>


<div class="form-group">
  <label for="name_ar" style="color:black" ><b>Title</b></label><br>
  <input type="text"   name="title" value="{{$posts->title}}" height="70px" size="50" placeholder="title" style="border-radius:10px;"><br><br>
</div>      



<div class="form-group">
  <label for="price" style="color:black"><b>Content</b></label><br>
  <input type="text"  name="content" value="{{$posts->content}}" width="50" size="50" placeholder="content" style="border-radius:10px;"><br><br>
</div>




<button onclick="window.location.href='{{url('updateposts/'.$posts-> id)}}'" id="submit"style="color:blue;">Update</button>


</form>
</div>
