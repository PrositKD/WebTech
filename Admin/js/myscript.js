function validation(){
 
    if(checkfname()==false || checkemail()==false||checkphone()==false||checkgender()==false||checkDOB()==false||
    checknid()==false||Address()==false ||checkpass1()==false||checkpass2()==false){
    
        return false;
    }
    return true;   
}

function checkfname(){
    var fname= document.getElementById("fname").value;
    if(fname=="" || fname.length <3){
      document.getElementById("fnameerror").innerHTML=
      "name must be mentioned";
        return false;
    }
    else{
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
function checkphone(){
    var phone= document.getElementById("phone").value;
    if(phone=="" || phone.length!=11){
      document.getElementById("phoneerror").innerHTML=
      "phone num must be 11 digit";
        return false;
    }
    else{
        return true;
    }
}
function checkgender(){
  
    var gender= document.getElementById("gender");
    var gender1= document.getElementById("gender1");
    var gender2= document.getElementById("gender2");

    if(gender.checked==true ||gender1.checked==true||gender2.checked==true)
    {
        document.getElementById("gendererror").innerHTML="";
        return true;
    }
  
  document.getElementById("gendererror").innerHTML=
    "gender must be specified";
  return false; 

}

function checkDOB(){
    var date= document.getElementById("date").value;
    
    if(date==""){
      document.getElementById("dateerror").innerHTML=
      "*Date of birth is required";
        return false;
    }
    else{
        document.getElementById("dateerror").innerHTML="";
        return true;
    }
}
function checknid(){
    var nid= document.getElementById("nid").value;
    if(nid=="" || nid.length!==16){
      document.getElementById("niderror").innerHTML=
      "nid number must be 16 digit";
        return false;
    }
    return true; 
}

function Address(){
    var address= document.getElementById("address").value;
    if(address==""){
      document.getElementById("addresserror").innerHTML=
      "*address is required";
        return false;
    }
    else if (address.length<5)
    {
        document.getElementById("addresserror").innerHTML=
      "*address is not valid";
        return false;
    }
    else{
        document.getElementById("addresserror").innerHTML="";
        return true;
    }
}
function checkpass1(){
    var password= document.getElementById("pass1").value;
    if(password==""){
      document.getElementById("pass1error").innerHTML=
      "*Password is required";
        return false;
    }
    else{
        document.getElementById("pass1error").innerHTML="";
        return true;
    }
}

function checkpass2(){
    var password= document.getElementById("pass1").value;
    var password1= document.getElementById("pass2").value;
    if(password1==""){
      document.getElementById("pass2error").innerHTML=
      "*Password is required";
        return false;
    }
    else if(password!==password1)
    {
        document.getElementById("pass2error").innerHTML=
      "*Password did not match";
        return false;
    }
    else{
        document.getElementById("pass2error").innerHTML="";
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
    
    
    
    xttp.open("POST","http://localhost/PKD/PKD/Admin/control/request.php", true);
    xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xttp.send("email="+email);
    
    
    
    }