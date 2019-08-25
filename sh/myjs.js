function mail()
{
var mail = document.forms["myform"]["email"].value;
if (mail == "")
    {
  alert("E-mail cannot be blank");
        return false;
    }
}
function mail1()
{
var mail = document.forms["login"]["email"].value;
if (mail == "")
    {
  alert("E-mail cannot be blank");
        return false;
    }
}


function box()
{
if(!document.myform.tearmsandcondition.checked)
    {
        alert("You must agree our terms and conditions");
        return false;
    }
    
}
function age()
{
   if(document.forms["myform"]["age"].value<18)
   {
       alert("You are under aged");
       return false;
   } 
}
function allFuncAndPwd()
{
    var pass=document.myform.password.value;
    var repass=document.myform.repassword.value;
   
    if(pass!=repass)
    {
        alert("Password mismatched");
        return false;
    }
    box();
    age();
    mail();
    
}