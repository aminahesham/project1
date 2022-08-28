<?php

use App\Models\User;
use App\Models\Post;

        $users=User::all();
        $posts=Post::all();


?>

<style>

body {
background-color:white;
}

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

a{
    color: black;
    text-decoration:none;
    font-size:15px;
    padding: 15px 25px;
    display:inline;
}
a:hover {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}
a.button{
   cursor:pointer; 
   margin:10px;
   padding:10px;
}
#fr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 99%;
  margin:4px;
  padding:8px;
}
#submit{
    width: 80px;
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
    font-size: 14px;
    border-radius: 15px;
    cursor: pointer; 
}
</style> 

    
<button onclick="window.location.href='{{url('usercreatepost/')}}'" id="submit"style="color:blue;">Create Post</button>





<center>
<h2>Posts Table</h2>
</center>

<table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Title</th>
  <th scope="col">Content</th>
  <th scope="col"></th>
</tr>

  @foreach($posts as $post)
  <tr>
  <th scope="row">{{$post->id}}</th>
    <td>{{$post -> title}}</td>
    <td>{{$post -> content}}</td>
    

    <td>

<button onclick="window.location.href='{{url('usergetpost/'.$post-> id)}}'" id="submit"style="color:blue;">update</button><br>
<button onclick="window.location.href='{{url('deletepost/'.$post->id)}}'" id="submit"style="background-color:red;">Delete</button>




<br><br>


    </td>
  @endforeach
  </tr>
 
</table>



        </div>
    </div>
