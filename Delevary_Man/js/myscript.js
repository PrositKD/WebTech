function validation(){
 
    if(checkfname()==false||checkphn()==false ||checkemail()==false || checkphoto()==false || checkgender()==false || checkdate()==false || checkaddress()==false || 
    checkvec()==false || checktk()==false || checkpass() ==false || checkpass2()==false){
    
        return false;
    }
    return true;   
}

function checkfname(){
    var fname= document.getElementById("fname").value;
    if(fname==""){
        document.getElementById("fnameerror").innerHTML=
        "*name must be fill";
          return false;
    }
    else if(!/^[A-Za-z_ ]+$/.test(fname)){
      document.getElementById("fnameerror").innerHTML=
      "*name must be A_Z or a-z mentioned";
        return false;
    }
    else{
        document.getElementById("fnameerror").innerHTML="";
        return true;
    }
}
function checkphn(){
    var phn=document.getElementById("phn").value;
    if(phn==""){
        document.getElementById("phnerror").innerHTML="*Number fill needed";
        return false;
    }
   else if(phn.length!==11 || !/^[0-9]+$/.test(phn)){
        document.getElementById("phnerror").innerHTML="*Number must be 11 digit";
        return false;
    }
    else {
        document.getElementById("phnerror").innerHTML="";
        return true;
    }
}
function checkemail(){
    var email=document.getElementById("email").value;
    if(email==""){
        document.getElementById("emailerror").innerHTML="*email fill needed";
        return false;
    }
   else if(!/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/.test(email)){
        document.getElementById("emailerror").innerHTML="*email must be ..@.gmail.com";
        return false;
    }
    else {
        document.getElementById("emailerror").innerHTML="";
        return true;
    }
}
function checkphoto(){
    var photo=document.getElementById("photo").value;
    if(photo==""){
        document.getElementById("photoerror").innerHTML="*photo needed";
        return false;
    }
   
    else {
        document.getElementById("photoerror").innerHTML="";
        return true;
    }
}


function checkgender(){
  if(document.getElementById("gender").checked==false && document.getElementById("gender1").checked==false && document.getElementById("gender2").checked==false)
  {
    document.getElementById("gendererror").innerHTML=
    "*gender must be specified";
    return false;
  }
  else {
    document.getElementById("gendererror").innerHTML=
    "";
  return true; 
  }
}
function checkdate(){
    var date=document.getElementById("date").value;
    if(date==""){
        document.getElementById("dateerror").innerHTML="*select date";
        return false;
    }
  
    else {
        document.getElementById("dateerror").innerHTML="";
        return true;
    }
}
function checkaddress(){
    var address=document.getElementById("address").value;
    if(address==""){
        document.getElementById("addresserror").innerHTML="*address nedded";
        return false;
    }
  
    else {
        document.getElementById("addresserror").innerHTML="";
        return true;
    }
}

function checkvec(){
    if(document.getElementById("vec").checked==false)
    {
      document.getElementById("vecerror").innerHTML=
      "*vechile must be specified";
      return false;
    }
    else {
      document.getElementById("vecerror").innerHTML=
      "";
    return true; 
    }
  }

  function checktk(){
    var tk=document.getElementById("tk").value;
    if(tk==""){
        document.getElementById("tkerror").innerHTML="*tk fill needed";
        return false;
    }
   else if(tk.length>5||!/^[0-9]+$/.test(tk)){
        document.getElementById("tkerror").innerHTML="*Number must be number and under 5 digit";
        return false;
    }
    else {
        document.getElementById("tkerror").innerHTML="";
        return true;
    }
}
function checkpass(){
    var pass=document.getElementById("pass").value;
    if(pass==""){
        document.getElementById("passerror").innerHTML="*Fill password";
        return false;
    }
  
    else {
        document.getElementById("passerror").innerHTML="";
        return true;
    }
}
function checkpass2(){
    var pass=document.getElementById("pass").value;
    var pass2=document.getElementById("pass2").value;
    if(pass2==""){
        document.getElementById("passerror2").innerHTML="*Fill password";
        return false;
    }

    else if (pass!==pass2){
        document.getElementById("passerror2").innerHTML="*password not matched";
        return false;
    }
  
    else {
        document.getElementById("passerror2").innerHTML="";
        return true;
    }
}

function fetchUsers(){
    var email = document.getElementById("email").value;
    
    var xttp= new XMLHttpRequest();
    xttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status== 200)
      {
     document.getElementById("print").innerHTML=this.responseText;
      }
    }
    
    
    
    xttp.open("POST", "http://localhost/PKD/Delevary_Man/Control/request.php", true);
    xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xttp.send("email="+email);
    
    
    
    }
    $("button").click(function()
      {
        
        $("demo").toggleClass("style1")
      })
     
    