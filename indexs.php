<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

  <body style="background-color:rgba(0, 136, 255, 0.344);">

  <h1>SEARCH FOR A MEAL</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Meal Name</th>  
        </tr> </thead>
      <tbody id="output">    
    </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'search.php',
        data:{
          meal:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>

</body>
</html>
