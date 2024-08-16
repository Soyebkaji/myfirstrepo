<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
   .box{
    width: 311px;
  height: 311px;
  background-color: white;
  border: 3px solid black;
  margin-left: 400px;

   }
   .cell{
    width: 99px;
    height: 99px;
    border:2px solid black;
    display: inline-block;
   }
   #red{
    width:45px;
    height: 45px;
   background-color:red;
   
   
   }
   </style>
</head>
<body>
    <div class="box">
        <span class="cell color" value="1"  id="1" onclick="sk(event)"></span>
        <span class="cell color" value="2" id="2" onclick="sk(event)"></span>
        <span class="cell color" value="3" id="3" onclick="sk(event)"></span>
        <span class="cell color" value="4" id="4" onclick="sk(event)"></span>
        <span class="cell color" value="5" id="5" onclick="sk(event)"></span>
        <span class="cell color" value="6" id="6" onclick="sk(event)"></span>
        <span class="cell color" value="7" id="7" onclick="sk(event)"></span>
        <span class="cell color" value="8" id="8" onclick="sk(event)"></span>
        <span class="cell color" value="9" id="9" onclick="sk(event)"></span>
    </div>
    <?php
echo "hello world";

?>
    <div id="red">

    </div>
</body>
<script src="sk.js">

</script>
</html>