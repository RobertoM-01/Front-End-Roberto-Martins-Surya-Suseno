<!DOCTYPE html>
<html>
<head>
     <title>Nomor 2</title>
     <style >
     	body{
     		background-color: #282c34;
     	}

     </style>
</head>
<body>
 <div align="center">
 	<input align="center" type="text" id="teks"><br/> </div>
 	<div align="center">
 <font align="center" color="#ffffff">  Output</font> <input type="text" id="hasil">
 </div>
<div align="center">
	<input type="button" onclick="reverse()" value="reverse"><br/>


</div>



<script type="text/javascript">
     function reverse(){
           x=document.getElementById('teks').value; 
           var hsl,p;
           hsl="";  
           p=x.length;  
           for(a=p-1;a>=0;a--){  
                hsl=hsl+x.charAt(a); 
           }
           document.getElementById('hasil').value=hsl;  
     }
</script>
</body>
</html>