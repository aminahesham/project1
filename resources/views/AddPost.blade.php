
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color:	  #66ccff;
}
#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: black;
    font-weight:bold;
    background-color: royalblue;
    font-size: 14px;
    border: none;
}
#submit:hover{ 
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}
#input{
    margin: 5px;
    padding: 5px;
    background-color:#f0f5f5;
    border-radius: 25px;
}
form {
  text-align: center;
  border: 2px solid black;
  border-radius: 6px;
  width:400px;

  }
</style> 

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post :') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

            

    <div class="py-12">

    <div align="center">

<form id="form" method="POST" action="{{URL('insertpost')}}" enctype="multipart/form-data">
@csrf
<fieldset id="fieldset">
<h1 style="color:#04AA6D; font-size:20px; text-align: center;">Create Post </h1><br>


<div class="form-group">
  <label for="name_ar" style="color:black" ><b>Title</b></label><br>
  <input type="text"  name="title" value="" maxlength="50" size="30" placeholder="title"><br><br>
</div>      



<div class="form-group">
  <label for="price" style="color:black"><b>Content</b></label><br>
  <input type="text" id="contnet" name="content" value="" maxlength="50" size="30" placeholder="contnet"><br><br>
</div>




  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{url('insertpost')}}"><br><br>


</fieldset>
</form>
</div>
</div>
            </div>
        </div>
    </div>

    </div>
