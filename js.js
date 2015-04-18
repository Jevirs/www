function checkLogin(){
    var x=document.forms["login"]["name"].value;
    var y=document.forms["login"]["password"].value;
    if(x==null||x==""){
        alert("Please Input Name!");
        return false;
    }else{
        if(y==null||y==""){
            alert("Please Input Password!");
            return false;
        }else{
            return true;
        }
    }
}

function checkName(x){
    if (x==null || x=="")
    {
        document.getElementById("show").innerHTML="Empty!";
    }else{
        show(x);
    }
}

function checkRegister() {
    var a = document.getElementById('name').value;
    var b = document.getElementById('password').value;
    var c = document.getElementById('confirm').value;
    var d = document.getElementById('email').value;
    if(b!=null && b.length>=8 && b==c){
            var atpos = d.indexOf("@");
            var dotpos = d.lastIndexOf(".");
            return !(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= d.length);
    }else{
        return false;
    }
}

function checkPassword(x){
    if(x==null|| x.length<8){
        document.getElementById('showpassword').innerHTML='Disallowed!';
    }else{
        document.getElementById("showpassword").innerHTML='OK!';
    }
}

function checkConfirm(x){
    if(x!=document.getElementById("password").value){
        document.getElementById('showconfirm').innerHTML='Unmatched!';
    }else{
        document.getElementById('showconfirm').innerHTML='OK!';
    }
}

function checkEmail(z) {
    var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= z.length) {
        document.getElementById("showemail").innerHTML='Wrong!';
    }else{
        document.getElementById("showemail").innerHTML='OK!';
    }
}

function clearShow() {
    document.getElementById("show").innerHTML = '';
    document.getElementById("showpassword").innerHTML = '';
    document.getElementById("showconfirm").innerHTML = '';
    document.getElementById("showemail").innerHTML = '';
}