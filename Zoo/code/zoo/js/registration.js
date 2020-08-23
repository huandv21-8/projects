var MEMBER_API = "https://youtube-api-challenger2.appspot.com/members";
var btnSubmit = document.getElementById("btnSubmit");
if (btnSubmit != null) {
  btnSubmit.onclick = function () {
    validateForm();
  }
}

function validateForm() {
  //lay gia tri cac phan tu trong form.
  //validate username
  var usernameInput = document.forms["member"].elements["username"];
  var username = usernameInput.value;
  if (username.length == 0) {
    usernameInput.nextElementSibling.innerHTML = "Vui lòng nhập thông tin tài khoản";
  }else if(username.length<7){
    usernameInput.nextElementSibling.innerHTML = "Thông tin tài khoản phải dài hơn 7 kí tự !";
  }else{
    usernameInput.nextElementSibling.innerHTML = "";
  }

//validate password
var passwordInput = document.forms["member"].elements["password"];
var password = passwordInput.value;
if (password.length == 0){
  passwordInput.nextElementSibling.innerHTML="Vui lòng nhập thông tin mật khẩu";
}else if(password.length < 7){
  passwordInput.nextElementSibling.innerHTML="Thông tin mật khẩu phải dài hơn 7 kí tự !";
}else{
  passwordInput.nextElementSibling.innerHTML= "";
}

//validate repasswold
var rePasswordInput = document.forms["member"].elements["re-password"];
var rePassword = rePasswordInput.value;
if(rePassword !== password){
  rePasswordInput.nextElementSibling.innerHTML= "Mật khẩu không khớp!";
}else{
  rePasswordInput.nextElementSibling.innerHTML= "";
}


//validate fullNAME.
var fullNameInput = document.forms["member"].elements["fullName"];
var fullName = fullNameInput.value;
if(fullName.length == 0){
  fullNameInput.nextElementSibling.innerHTML= "Vui lòng nhập họ và tên!";
}else if (fullName.length < 7){
  fullNameInput.nextElementSibling.innerHTML= "Họ và tên phải dài hơn 7 kí tự!";
}else{
  fullNameInput.nextElementSibling.innerHTML= "";
}

//validate email.
var emailInput = document.forms["member"].elements["email"];
var email = emailInput.value;
if(email.length == 0){
  emailInput.nextElementSibling.innerHTML="Vui lòng nhập email!";
}else if (email.length < 7){
  emailInput.nextElementSibling.innerHTML="Email phải dài hơn 7 kí tự!";
}else{
  emailInput.nextElementSibling.innerHTML="";
}

var object = {
  "data": {
    "type":"member",
    "attributes":{
      "username": username,
      "password":password,
      "fullName":fullName,
      "email":email,
      "birthDay":15066499900231,
      "gender":1
    }
  }
}
//construct an HTTP request
var xhr = new XMLHttpRequest();

xhr.open("POST",MEMBER_API, true);

xhr.send(JSON.stringify(object));
xhr.onreadystatechange = function () {

  if(xhr.readyState==XMLHttpRequest.DONE && xhr.status === 201){

    document.getElementById("total-msg").classList = "success-msg";
    document.getElementById("total-msg").innerHTML = "Đăng kí thành công";
  }else{
    if(xhr.readyState === XMLHttpRequest.DONE){
      var responseObject = JSON.parse(xhr.responseText);
      document.getElementById("total-msg").classList = "error-msg";
      document.getElementById("total-msg").innerHTML=
      responseObject.errors[0].title + " " + responseObject.errors[0].detail;
    }
  }
 };
}
