function password1(){
    var password1 = document.getElementById("password");
    var ojo = document.getElementById("ojo");
    if(password1.type == "password"){
        password1.type = "text";
        ojo.src = "https://cdn-icons-png.flaticon.com/512/6405/6405909.png";
        
    }else{
        password1.type = "password";
        ojo.src = "https://cdn.icon-icons.com/icons2/878/PNG/512/private-eye_icon-icons.com_68510.png";
    }

}