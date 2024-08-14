<?php
$message="";
require("barua.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAHLISO</title>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<style>
.contestants{
color:green;

}
.form-control{
    width: 100%;

}
.container{
    
  
    width: 330px;
}
link{
    margin-top: 200000px;
}
a{
    text-decoration: none;
}
body{
    margin-top: 20px;
    
    color:white;
    background-repeat:vertical;
    background-size:cover;
}
marquee{
  color:black;
}

</style>
</head>
<body>
    
    <marquee behavior="" direction="">Karibu mkutano wa pili wa seneti ndugu mjumbe</marquee>
    <div class="container mx-auto d-block">
        <div>
            <img class=" ml-3  mx-auto d-block "  src="tahliso-removebg-preview.png" alt="">

        </div>
<div class="">

<form action="" class="form-inline" method='POST'>
    <span><?php echo $message; ?></span>
<label for="jinalachuo" class="mr-sm-2">Jina la chuo(sio kifupisho)</label>
    <input type="text" style="width: 300px;" name="jinalachuo" required placeholder="Mfano Chuo Kikuu Cha Dodoma"
     class="form-control mt-0"  >
     <label for="number" class="mr-sm-2">Namba ya sanduku la posta
     <input type="number" style="width: 300px;" name="number" required placeholder=" Mfano 100"
     class="form-control mt-0"  min=1 >
     <label for="mkoa" class="mr-sm-2">Mkoa
     <input type="text" style="width: 300px;" name="mkoa" required placeholder=" Mfano Dodoma"
    class="form-control mt-0"  >
    <label for="nambasimu" class="mr-sm-2">Namba yako ya simu inayopatikana
     <input type="number" style="width: 300px;" name="nambasimu"  required placeholder="Mfano 0657435203"
    class="form-control mt-0"  >
    <label for="cheo" class="mr-sm-2">Chagua cheo Chako
     <div class="form-group">
     <select name="cheo" id="" class="form-control">
            <option value="Rais">Rais</option>
            <option value="Makamu wa Rais">Makamu wa Rais</option>
            <option value="Waziri Mkuu">Waziri Mkuu</option>
            <option value="Spika">Spika</option>

        </select>
     </div>
 
    <p> <span class="Contestants" id="txtHint"></span></p>
  <button  class="btn btn-warning ml-4">Pakua Barua</button>
   

</form>

</div>


    </div>
   
   

  

    



</body>
</html>



<script>
var request;
    function Createhttprequest(){
        if(window.XMLHttpRequest){
           request=new XMLHttpRequest();
       
        }
        else{
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }

    function test(){
        if( document.getElementById("mtoto").value==""){
            document.getElementById("txtHint").innerHTML ="";
        }
        
       else if(this.readyState==4 && this.status==200 ){
            
            document.getElementById("txtHint").innerHTML = this.responseText;
         }
         else{
            console.log(request.status)
            console.log(request.readyState)
         }
     }
    
    function validation(name){
      
        Createhttprequest();
         
       
        request.open('GET','test.php?name='+name,true)
        request.send();
        request.onreadystatechange=test;
    }
</script>