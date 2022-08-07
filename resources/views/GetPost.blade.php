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
<div class="container">
    <div class="row">
    <div class="col-sm-6">
    <br>
    </div>
    <div class="col-sm-6">
    <br>
    <center>
    <form id="form" method="POST" action="{{ URL('updatepost/',$posts->id) }}" enctype="multipart/form-data">
@csrf
      <h2 style='color:black'>title</h2>
      <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" value="{{$posts->title}}" name="title"  size="50" multiple><br>

      <h4 style='color:black'>Content </h4>
      <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" value="{{$posts->content}}" name="content"  size="50" multiple><br>

      <br><br>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" id="submit" class="btn btn-success">Update</button>
            </div>        </form></center>
      <br><br>
      </div>
      </div>
    </div>