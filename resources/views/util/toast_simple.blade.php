
{{-- requere utiljs --}}

<style>
    #simpletoast {
  visibility: hidden;
  min-width: 250px;
  margin-left: -200px;
  background-color: white;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  color: black;
  text-align: center;
  border-radius: 10px;
  padding: 16px;
  position: fixed;
  z-index: 10000;
  left: 50%;
  bottom: 30px;
  font-size: 16px;
}

#simpletoast.show {
  visibility: visible;
  -webkit-animation: tfadein 0.5s, tfadeout 0.5s 2.5s;
  animation: tfadein 0.5s, tfadeout 0.5s 2.5s;
}
#simpletoast_error {
  visibility: hidden;
  min-width: 250px;
  margin-left: -200px;
  background-color: rgb(161, 24, 24);
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  color: rgb(255, 255, 255);
  text-align: center;
  border-radius: 10px;
  padding: 16px;
  position: fixed;
  z-index: 10000;
  left: 50%;
  bottom: 30px;
  font-size: 16px;
}

#simpletoast_error.show {
  visibility: visible;
  -webkit-animation: tfadein 0.5s, tfadeout 0.5s 2.5s;
  animation: tfadein 0.5s, tfadeout 0.5s 2.5s;
}
#simpletoast_success {
  visibility: hidden;
  min-width: 250px;
  margin-left: -200px;
  background-color: rgb(15, 168, 110);
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  color: rgb(255, 255, 255);
  text-align: center;
  border-radius: 10px;
  padding: 16px;
  position: fixed;
  z-index: 10000;
  left: 50%;
  bottom: 30px;
  font-size: 16px;
}

#simpletoast_success.show {
  visibility: visible;
  -webkit-animation: tfadein 0.5s, tfadeout 0.5s 2.5s;
  animation: tfadein 0.5s, tfadeout 0.5s 2.5s;
}

@-webkit-keyframes tfadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes tfadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes tfadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes tfadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>

<script>
  function showToastMsg(msg,timemili=3000) {
 var x=document.createElement('div');
 x.id='simpletoast';
document.body.insertBefore(x, document.body.firstChild);
 var msg_elm=document.createElement('h2');
 msg_elm.innerHTML=msg;
 x.appendChild(msg_elm);
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); },timemili);//animacion
  //setTimeout(function(){deleteElement(x);},timemili*2);//elimino elemento completamente
}
function showToastMsgError(msg,timemili=3000) {
 var x=document.createElement('div');
 x.id='simpletoast_error';
document.body.insertBefore(x, document.body.firstChild);
 var msg_elm=document.createElement('h2');
 msg_elm.innerHTML=msg;
 x.appendChild(msg_elm);
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); },timemili);//animacion
  //setTimeout(function(){deleteElement(x);},timemili*2);//elimino elemento completamente
}
function showToastMsgSuccess(msg,timemili=3000) {
 var x=document.createElement('div');
 x.id='simpletoast_success';
document.body.insertBefore(x, document.body.firstChild);
 var msg_elm=document.createElement('h2');
 msg_elm.innerHTML=msg;
 x.appendChild(msg_elm);
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); },timemili);//animacion
  //setTimeout(function(){deleteElement(x);},timemili*2);//elimino elemento completamente
}
</script>
