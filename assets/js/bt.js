function login(){
    var a=document.getElementById("name").Value;
    if(a==''||a=="Null"){
        alert("Please enter a valid username:");
        return false;
    }
    else if(!isNaN(a)){
        alert("username should be only in characters.");
        return false;
    }

}