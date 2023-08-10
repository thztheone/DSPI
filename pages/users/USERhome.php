<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
.angry-grid {
   display: grid; 

   grid-template-rows: 1fr 1fr 1fr;
   grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
   
   gap: 0px;
   height: 150%;
   
}
  
#item-0 {
    position:relative;
    left:50px;
    border-radius:10px;
   color:white;
   font-size: 30px;
   background-color: #000000; 
   grid-row-start: 1;
   grid-column-start: 1;

   grid-row-end: 4;
   grid-column-end: 2;
   
}
#item-1 {
    border-radius:10px;
    color:white;
    font-size: 30px;
   background-color: #000000; 
   grid-row-start: 1;
   grid-column-start: 3;

   grid-row-end: 4;
   grid-column-end: 4;
   
}
#item-2 {
    position:relative;
    right:50px;
    
    border-radius:10px;
    color:white;
    font-size: 30px;
   background-color: #000000; 
   grid-row-start: 1;
   grid-column-start: 5;

   grid-row-end: 4;
   grid-column-end: 6;
   
}
</style>
<br> <br> <br> <br> 
<center>
<div class="angry-grid">
  
<div id="item-0">
   <a href="USERlog.php">  
   <span class="material-symbols-outlined" style= "font-size:100px">
  calendar_month
  </a>
  </span>
  <br>
  Agendamentos
  </div>

  <div id="item-1">
  <a href="USERlog.php">  
   <span class="material-symbols-outlined" style= "font-size:100px">
   account_box
  </a>
  </span>
  <br>
  Dados Pessoais
  </div>
  
  <div id="item-2">
  <a href="pages/users/USERlog.php">  
   <span class="material-symbols-outlined" style= "font-size:100px">
   lab_profile
  </a>
  </span>
  <br>
  Histórico
  </div>

</body>
</html>