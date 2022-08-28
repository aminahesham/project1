

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
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}

</style> 

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        <button onclick="window.location.href='{{url('addcity/')}}'" id="submit"style="color:blue;">Add New City</button>
<center>
<h2>Cities Table</h2>
</center>
<table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  
  <th scope="col">Edit</th>
</tr>

  @foreach($city as $index)
  <tr>
  <th scope="row">{{$index->id}}</th>
    <td>{{$index -> id}}</td>
    <td>{{$index -> name}}</td>
    

    <td>

<button onclick="window.location.href='{{url('cityuser/'.$index->id)}}'" id="submit"style="color:blue;">users in this city</button>

<button onclick="window.location.href='{{url('cityposts/'.$index->id)}}'" id="submit"style="background-color:blue;">posts in this city</button>


<br><br>


    </td>
  @endforeach
  </tr>
 
</table>



        </div>
    </div>
