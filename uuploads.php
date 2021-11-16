 <form method="post" align="center"onsubmit="return validate()" onchange="demo()"enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         
              <div class="form-group">
              <label id='lab'>Uploads not related to your skill/talent will be deleted</label>
              <input type="file" class="form-control" name="file" id="upload" required>
              </div>
              
             
              
              <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary"value="Click to upload">
                  
              </div>
          </form>
          
          <?php
if(isset($_POST['submit'])){

  
$file=$_FILES['file']['name'];
$filesize=$_FILES['file']['size'];
if($filesize > 11000000){
    echo"nothing";
}
    else{
echo $file;
echo $filesize;
    
    }
}
?>