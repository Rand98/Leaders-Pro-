<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>modal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--link bootstrap vr 4.5-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--link bootstrap.css -->
<link rel="stylesheet" href="css/bootstrap.css"  type="text/css">
<!--override css file-->
<link rel="stylesheet" href="css/custom.css">
<!--fontawsome link library-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--  for modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.modal-backdrop {
  z-index: -1;
}
.modal-content{z-index:2000;}
</style>


</head>
<!--################################## End of head SECTION ################################################-->


<body> 



<!-- Modal -->
<div class="modal fade" id="addpro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"><br><br><br><br><br>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="manage_product.php" method="post"  enctype="multipart/form-data">
      <div class="modal-body">
       <!-- ................... FORM START ................. --> 
      
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                                <input id="cc-name" name="proname" type="text" class="form-control" required  value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product descreption</label>
                                                <input id="cc-name" name="prdesc" type="text" class="form-control" required  value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product Image</label>
                                                <input id="cc-name" name="img" type="file" class="form-control" required  value="">
                                            </div>


       <!-- ................... FORM ENDING ................. -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="insertdata" class="btn btn-primary">add</button>
      </div><!-- modal-footer -->
      </form>
    </div>
  </div>
</div>




<!-- $$$$$$$$$$$$$$$$$$$  my containar -->
    <div class="containar">
      <div class="first">
          
          <div class="card">
        <div class="card-body">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addpro">
         Add Product
         </button>
        </div><!-- card-body-->
          </div><!-- 2card -->
     </div><!-- first -->
    </div><!-- contanir -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>





</body>
</html>