function checkfirstname() {
    var txt = document.getElementById('inputfirstname').value;
    var errr = document.getElementById('error-firstname');
    if (txt.length == 0 || txt.length == null) {
        errr.innerHTML = "Please enter your first name";
    } else if (txt.length < 2) {
        errr.innerHTML = "firname short";
    } else {
        errr.innerHTML = "";
    }
}

function checklastname() {
    var txt = document.getElementById('inputlastname').value;
    var errr = document.getElementById('error-lastname');
    if (txt.length == 0 || txt.length == null) {
        errr.innerHTML = "Please enter your last name";
    } else if (txt.length < 2) {
        errr.innerHTML = "lastname short";
    } else {
        errr.innerHTML = "";
    }
}

/*kiem tra email */
function checkemail() {
    var error = document.getElementById('error-email');
    var x = document.getElementById('inputEmail4').value;
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    if (atposition < 1 || dotposition < (atposition + 2) ||
        (dotposition + 2) >= x.length) {
        error.style.color = "red";
        error.innerHTML = "Enter your email in the correct format";

    } else {
        error.innerHTML = "";
    }
}

/* check so phone*/
function checkphone() {
    var checkphone = document.getElementById('inputPhone').value;
    var error = document.getElementById('error-phone');
    if (isNaN(checkphone)) {

        error.style.color = "red";
        error.innerHTML = "Please enter the correct phone format";
        return false;
    } else {
        if (checkphone.length === 9 || checkphone.length == 10) {
            error.innerHTML = "";
            return true;
        } else {
            error.style.color = "red";
            error.innerHTML = "Please enter enough phone numbers";
        }
    }
}

/*check address1*/
function checkaddress1() {
    var txt = document.getElementById('inputAddress1').value;
    var errr = document.getElementById('error-address1');
    if (txt.length < 3 || txt.length == null) {
        errr.innerHTML = "Please enter your address";
    } else {
        errr.innerHTML = "";
    }
}

function checkzip() {
    var checkphone = document.getElementById('inputZip').value;
    var error = document.getElementById('error-zip');
    if (isNaN(checkphone)) {

        error.innerHTML = "correct zip format";
        return false;
    } else {
        if (checkphone.length === 6) {
            error.innerHTML = "";
            return true;
        }

    }
}

//check creatdit card numbers
function checkcardnumber() {
    var checkcard = document.getElementById('cardnumber').value;
    var error = document.getElementById('error-numbercard');
    var pay = document.getElementById('basic-addon2');

    if (isNaN(checkcard)) {

        error.innerHTML = "Malformed";
        return false;
    } else {
        if (checkcard.length === 15) {
            error.innerHTML = "";
            switch (checkcard[0]) {
                case '5': {
                    $('#henxui').removeClass();
                    $('#henxui').addClass('fab fa-cc-mastercard visa');

                    break;
                }
                case '4': {
                    $('#henxui').removeClass();
                    $('#henxui').addClass('fab fa-cc-visa visa');

                    break;
                }
                default: {
                    $('#henxui').removeClass();
                    error.innerHTML = "Invalid card";
                }

            }


        } else {
            error.style.color = "red";
            error.innerHTML = "Please enter enough phone numbers";
        }
    }
}

function checknamecard() {
    var txt = document.getElementById('namecard').value;
    var errr = document.getElementById('error-namecard');
    if (txt.length == 0 || txt.length == null) {
        errr.innerHTML = "Please enter your namecard";
    } else {
        errr.innerHTML = "";
    }
}

function checkCvv() {
    var checkphone = document.getElementById('ipcvv').value;
    var error = document.getElementById('error-cvv');
    if (isNaN(checkphone)) {

        error.innerHTML = "Please enter the correct cvv format";
        return false;
    } else {
        if (checkphone.length === 3) {
            error.innerHTML = "";
            return true;
        }

    }
}

function checkbirthday() {
    var error = document.getElementById('error-ngaydi');
    var today = new Date();
    var year = today.getFullYear();
    var day = today.getDate();
    var month = today.getMonth() + 1;

    var date = year + "-" + month + "-" + day;
    var getbirthday = document.getElementById('ipdatego').value;

    var cutyear = getbirthday.substring(0, 4); /*cat chuoi */
    var cutmonth = getbirthday.substring(5, 7);
    var cutdate = getbirthday.substring(8, 10);


    if (cutyear < year) {

        error.innerHTML = "Please reenter year";
    } else if (cutyear == year && cutmonth < month) {
        error.innerHTML = "Please reenter month";
    } else if (cutyear == year && cutmonth == month && cutdate < day) {
        error.innerHTML = "Please reenter day";
    } else {
        error.innerHTML = "";
    }


}

function testchoi() {
    var test = document.getElementById('hanam');

}

function total() {
    var tknglon = Number(document.getElementById('iptkadult').value) * 100;
    var tkchildren = Number(document.getElementById('iptkchildren').value * 50);
    var tkfree = Number(document.getElementById('iptkfree').value * 0);
    var text = document.getElementById('tongtien');

    var total = tknglon + tkchildren + tkfree;
    text.innerHTML = total + " USD";
}

// hien form banking
function hienbanking() {
    $('#xhien').hide();
    $('#hiencash').hide();
    $('#showbanking').show();

}

// hien form creadit
function hiencredit() {

    $('#hiencash').hide();
    $('#showbanking').hide();
    $('#xhien').show();
}

// show pay Cash
function hiencash() {
    $('#xhien').hide();
    $('#showbanking').hide();
    $('#hiencash').show();

}

function checkaccbanking() {
    var checkphone = document.getElementById('accbanking').value;
    var error = document.getElementById('error-accbanking');
    if (isNaN(checkphone)) {


        error.innerHTML = "This account is Invalid";
        return false;
    } else {
        if (checkphone.length === 13) {
            error.innerHTML = "";
            return true;
        }

    }
}

function orderLink() {
  var firstname = document.getElementById('inputfirstname').value;
  var lastname = document.getElementById('inputlastname').value;
  var email = document.getElementById('inputEmail4').value;
  var checkphone = document.getElementById('inputPhone').value;
  var checkcard = document.getElementById('cardnumber').value;
  var namecard = document.getElementById('namecard').value;
  var checkcvv = document.getElementById('ipcvv').value;
  if( firstname.length !=0 && lastname.length !=0 && email.length !=0 && checkphone.length !=0
  && checkcard.length !=0 && namecard.length !=0 && checkcvv.length !=0)
  window.location.href = 'OrderDetail.html';
}
