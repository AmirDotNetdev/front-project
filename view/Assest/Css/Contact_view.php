<!DOCTYPE html>
<html>
<head>
    <title>تماس با ما</title>
    <meta charset="utf-8">
<style>
input[type=text], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
    input,label,textarea{
        
        font-size: 20px;
    }   

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  direction: rtl;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
        </head>
<body>



<div>
  <form action="../../../controller/contact_controller.php" id="frmcontact" name="frmcontact" method="post">
    <label for="name">نام :</label>
    <input type="text" id="name" name="name" placeholder="نام شما...">

    <label for="title">عنوان :</label>
    <input type="text" id="title" name="title" placeholder="عنوان...">
      
      <label for="Description">توضیحات :</label>
      <textarea form="frmcontact" placeholder="توضیحات..." name="Description" id="Description"></textarea>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
    
</html>
