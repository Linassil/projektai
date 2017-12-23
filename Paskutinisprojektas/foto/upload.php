<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      echo "virs";
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      echo "po";
      $expensions= array("jpg","png","jpeg");
      echo "dadasd";
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Klaida, galima kelti tik JPG,JPEG ir PNG failus";

     }

     echo "1337";
      if($file_size > 2097152) {
         $errors[]='Nuotrauka negali būti didesnė negu 2 MB';
         echo "bananas";
     }else{
         echo "labas";
     }

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"irodymufoto/".$file_name);
         echo "Pavyko!";
      }else{
         print_r($errors);
         echo "klaida";
      }
   }
?>

<html>
   <body>

      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>



      </form>

   </body>
</html>
