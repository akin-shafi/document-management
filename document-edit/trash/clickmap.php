
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Rezerv On</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

<style>

#container {
    width: 1200px;
    height: 750px;
    border: 5px dotted #292929;        
    }
#box {
    float:left;
    width:100px;
    height:75px;
    padding:15px;
    margin-right:15px;
    background:yellow;
    cursor:move;
}

#box0 {
    float:left;
    width:100px;
    height:75px;
    padding:15px;
    margin-right:15px;
    background:yellow;
    cursor:move;
    
}


</style>
</head>
<body>
<script type="text/javascript">


 $(document).ready(function() {

 $("#box").draggable({ 
   containment: '#container',
   drag: function(e, ui) {
          var top = ui.position.top;
          var left = ui.position.left;
          $("#top").html(top);
          $("#left").html(left);
    }
 }); 
       
$("#box0").draggable({ 
     containment: '#container',
     drag: function (e, ui) {
          var top = ui.position.top ;
          var left = ui.position.left;
          $("#box0>#top").html(top);
          $("#box0>#left").html(left);
           }
       });         
});



</script>
<div id="container">
<div id="box" style="top:199; left: 246; ">
    1. BOX
   <p id="top"></p>
   <p id="left"></p>
</div>
<div id="box0"> 
    2. BOX
   <p id="top"></p>
   <p id="left"></p>
</div>
</div>
</body>

</html>

