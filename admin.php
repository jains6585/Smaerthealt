<!DOCTYPE html>
<html>
<head>
  <title>Smart Health Prediction System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  
    $(window).on('load',function(){
        $('#myModal').modal('show');



    });

</script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;


  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body >

<div class="container" style="background-color:#f9f9f9;">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog" style="background-size: cover; background-image: url(images/aaa.jpg);">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" >
          
          <h4><span class="glyphicon glyphicon-lock"></span> Admin Login</h4>
           <img src="images/pp.png" >    
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="LogIn3.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="email" class="form-control" id="usrname" name="uname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" name="pass" placeholder="Enter password">
            </div>
            
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
         
           </div>
      </div>
      
    </div>
  </div> 
</div>
 

</body>
</html>
