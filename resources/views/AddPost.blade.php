
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

form {
  text-align: center;
  border: 2px solid black;
  border-radius: 6px;
  width:400px;

  }
  form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] ,input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
</style> 

    <x-slot name="header">
        <h2 style="color:blue">
            {{ __('Create Post :') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="py-12">

    <div align="center">

<form id="form" method="POST" action="{{URL('insertpost')}}" enctype="multipart/form-data">
@csrf
<fieldset id="fieldset">
<h1 style="color:#04AA6D; font-size:20px; text-align: center;">Create Post </h1><br>


<div class="form-group">
  <label for="name_ar" style="color:black" ><b>Title</b></label><br>
  <input type="text"  name="title" value="" maxlength="50" size="30" placeholder="title" class="@error('title') is-invalid @enderror"><br><br>
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
</div>      



<div class="form-group">
  <label for="price" style="color:black"><b>Content</b></label><br>
  <input type="text" id="contnet" name="content" value="" maxlength="50" size="30" placeholder="contnet" class="@error('content') is-invalid @enderror"><br><br>
  @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="price" style="color:black"><b>User Id</b></label><br>
  <input type="text" id="contnet" name="user_id" value="" maxlength="50" size="30" placeholder="user_id" class="@error('user_id') is-invalid @enderror"><br><br>
 
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
