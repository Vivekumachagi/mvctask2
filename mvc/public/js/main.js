document.getElementById("b1").addEventListener("click",displayLogin);
document.getElementById("input").addEventListener("submit",check);


function check()
{ 
let username = document.getElementById["email"].value;
let password = document.getElementById["password"].value;

    if(username=="")
    {
        alert("empty username");
        return false;
    }
    else if(password==""){
        alert("empty password");
        return false;
    }
    else{
        return true;
    }
}
function scearch()
{
    alert("Please enter your name properly.");
}
function displayLogin()
{
   
     document.getElementById("form1").style.display = "none";
     return true;
}
if(window.history.replaceState)
{
    window.history.replaceState(null,null,window.location.href);
}