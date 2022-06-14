<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        
    <title>Chat UV</title>

    <script type="text/javascript">
var socket;

function init() {
	// Apuntar a la IP/Puerto configurado en el contructor del WebServerSocket, que es donde está escuchando el socket.
	var host = "ws://localhost:9000"; 
	try {
		socket = new WebSocket(host);
		//log('WebSocket - status '+socket.readyState);
		log("¿Algún problema? En un momento un técnico académico te atendera :D.");
		socket.onopen    = function(msg) { 
							   //log("Welcome - status "+this.readyState); 
							   log("Bienvenido"); 
						   };
		socket.onmessage = function(msg) { 
							   log("Received: "+msg.data); 
						   };
		socket.onclose   = function(msg) { 
							   //log("Disconnected - status "+this.readyState); 
							   log("Desconectado"); 
						   };
	}
	catch(ex){ 
		log(ex); 
	}
	$("msg").focus();
}

function send(){
	var txt,msg;
	txt = $("msg");
	msg = txt.value;
	if(!msg) { 
		alert("¡El mensaje no se puede enviar vacío!"); 
		return; 
	}
	txt.value="";
	txt.focus();
	try { 
		socket.send(msg); 
		log('Sent: '+msg); 
	} catch(ex) { 
		log(ex); 
	}
}
function quit(){
	if (socket != null) {
		log("Goodbye!");
		socket.close();
		socket=null;
        location.href = '../views/index.php';
	}
}

function reconnect() {
	quit();
	init();
}

// Utilities
function $(id){ return document.getElementById(id); }
function log(msg){ $("log").innerHTML+="<br>"+msg; }
function onkey(event){ if(event.keyCode==13){ send(); } }
</script>    

</head>
<body onload="init()">
    

    <h2 class="text-center">¡Bienvenido al Chat UV!</h2>
    
    <div class="border" style="height: 550px; width: 100%; background-color: #edf2f4;">

        <div id="log" class="border border-secondary rounded overflow-auto mh-100">
        </div>
    </div>

<!--     <input id="msg" class="w-75 p-1" type="text" onkeypress="onkey(event)" required>
    <button class="btn btn-outline-primary w-20" onclick="send()">Enviar</button>
    <button class="btn btn-outline-danger " onclick="quit()">Salir</button>
    <button class="btn btn-outline-warning " onclick="reconnect()">Reconectar</button> -->

 <!-- Footer -->
 <footer class="page-footer font-small purple pt-4 fixed-bottom">


    <input id="msg" class="w-75 p-1" type="text" onkeypress="onkey(event)" required>
    <button class="btn btn-primary" style="width:18% ;" onclick="send()">Enviar</button>
    <button class="btn btn-danger " onclick="quit()">Salir</button>
    <!-- <button class="btn btn-warning " onclick="reconnect()">Reconectar</button> -->



</footer>

</body>
</html>