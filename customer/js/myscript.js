function validation(){
 

    if(checkfname()==false || checklname()==false || checkhouse()==false || checkroad()==false || checkdistrict()== false || 
    checkcity()== false|| checkphn()==false || checkgender()==false || checkage()==false || checkemail()== false
    || checkpass()== false || checkcpass()== false)
    
    {

        return false;
    }
    
    return true;   
}

function checkfname(){
    var fname= document.getElementById("fname").value;
    if(fname=="" ||!/^[A-Za-z_]+$/.test(fname)){
      document.getElementById("fnameerror").innerHTML=
      "*fname must be A-Z or a-z mentioned";
        return false;
    }
    else{
        document.getElementById("fnameerror").innerHTML=""
        return true;
    }
}
function checklname(){
    var lname= document.getElementById("lname").value;
    if(lname=="" ||!/^[A-Za-z_]+$/.test(lname)){
      document.getElementById("lnameerror").innerHTML=
      "*lname must be A-Z or a-z mentioned";
        return false;
    }
    else{
        document.getElementById("lnameerror").innerHTML=""
        return true;
    }
}
function checkhouse(){
    var house= document.getElementById("house").value;
    if(house==""){
      document.getElementById("houseerror").innerHTML=
      "*House must be mentioned";
        return false;
    }
    else{
        document.getElementById("houseerror").innerHTML=""
        return true;
    }
}

function checkroad(){
    var road= document.getElementById("road").value;
    if(road=="" ||!/^[0-9]+$/.test(road)){
      document.getElementById("roaderror").innerHTML=
      "*road must be number mentioned";
        return false;
    }
    else{
        document.getElementById("roaderror").innerHTML=""
        return true;
    }
}

function checkdistrict(){
    var district= document.getElementById("district").value;
    if(district=="" ||!/^[A-Za-z_]+$/.test(district)){
      document.getElementById("districterror").innerHTML=
      "*District must be number mentioned";
        return false;
    }
    else{
        document.getElementById("districterror").innerHTML=""
        return true;
    }
}
function checkcity(){
    var city= document.getElementById("city").value;
    if(city=="" ){
      document.getElementById("cityerror").innerHTML=
      "*City must be number mentioned";
        return false;
    }
    else{
        document.getElementById("cityerror").innerHTML=""
        return true;
    }
}
function checkphn(){
    var phn= document.getElementById("phn").value;
    if(phn=="" ){
      document.getElementById("phnerror").innerHTML=
      "*Number must be filled";
        return false;
    }
    else if(phn.length!==11||!/[0-9]+$/.test(phn)){
        document.getElementById("phnerror").innerHTML=
    "*Number must be 11 Digit";
      return false;
    }
    else{
        document.getElementById("phnerror").innerHTML=""
        return true;
    }
}
function checkgender() {
    var gender = document.getElementById("gender").value;
    if (gender == "Gender") {
      document.getElementById("gendererror").innerHTML =
        "*Gender must be selected";
      return false;
    } else {
      document.getElementById("gendererror").innerHTML = "";
      return true;
    }
  }
// function checkgender(){
//     var gender= document.getElementById("gender").value;
//     if(gender=="Gender_type" ){
//       document.getElementById("gendererror").innerHTML=
//       "Gender must be number mentioned";
//         return false;
//     }
//     else{
//         document.getElementById("gendererror").innerHTML=""
//         return true;
//     }
// }

function checkage(){
    var age= document.getElementById("age").value;
    if(age=="" ){
      document.getElementById("ageerror").innerHTML=
      "*Age must be filled";
        return false;
    }
    else if(age.length!==2||!/[0-9]+$/.test(age)){
        document.getElementById("ageerror").innerHTML=
    "*Number must be 2 Digit";
      return false;
    }
    else{
        document.getElementById("ageerror").innerHTML=""
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
function checkpass(){
    var pass= document.getElementById("password").value;
    if(pass=="" ){
      document.getElementById("passerror").innerHTML=
      "*Password must be filled";
        return false;
    }
    else if(/^(?=.*[A-Z])[A-Za-z0-9]{5}$/.test(pass)){
        document.getElementById("passerror").innerHTML=
    "*Enter 6 number with 1 upperclass letter";
      return false;
    }
    else{
        document.getElementById("passerror").innerHTML=""
        return true;
    }
}

function checkcpass(){
    var cpass= document.getElementById("confirm_password").value;
    if(cpass=="" ){
      document.getElementById("cpasserror").innerHTML=
      "*Confirm Password must be filled";
        return false;
    }
    else if(/^(?=.*[A-Z])[A-Za-z0-9]{}$/.test(cpass)){
        document.getElementById("cpasserror").innerHTML=
    "*Enter 6 number with 1 upperclass letter";
      return false;
    }
    else{
        document.getElementById("cpasserror").innerHTML=""
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
  
  
  
  xttp.open("POST", "http://localhost/PKD/customer/control/searchproduct.php", true);
  xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xttp.send("email="+email);
  
  
  
  }