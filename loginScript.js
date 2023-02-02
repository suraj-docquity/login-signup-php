
const form = document.getElementById("form1");
const errBox = document.getElementById("errBox");

function authenticate() {
  const email = document.getElementById("email_id");
  const pass = document.getElementById("pass_id");
  var email_id = email.value.trim();

  var pattern = /^[\w-\.]+@(docquity)\.+(com)$/;

  if (!email_id.match(pattern)) {
    // alert("Please enter docquity ID");

    email.classList.remove("pass_border");
    email.classList.add("error_border");

    errBox.classList.remove("hideErr");
    errBox.classList.add("showErr");

    email.value = "";
    pass.value = "";
    email.focus();
  }
  else {

    email.classList.add("pass_border");
    email.classList.remove("error_border");

    errBox.classList.add("hideErr");
    errBox.classList.remove("showErr");

    if (!validatePassword(pass.value)) {

      pass.classList.remove("pass_border");
      pass.classList.add("error_border");

      pass.value = "";
      pass.focus();
    }
  }
}

function validatePassword(str) {
  if (str == "") {
    // alert("Password should NOT be empty");
    return false;
  }
  else {
    return passwordCHK(str);
  }
}



function passwordCHK(str) {
  var flag = true;
  if (!str.match(/[a-z]/)) {
    flag = false;
  }
  else if (!str.match(/[A-Z]/)) {
    flag = false;
  }
  else if (!str.match(/[0-9]/)) {
    flag = false;
  }
  else if (!str.match(/[^a-zA-Z\d]/)) {
    flag = false;
  }
  else if (str.length < 8) {
    flag = false;
  }

  if (!flag) {
    // alert("Invalid Password ! \nPassword must contain 8 or more characters, with at least one number and one uppercase and one lowercase letter");
    return false;
  }
  return true;
}


function validateDetails() {
  const phone_id = document.getElementById("phone_id");
  var phone = phone_id.value.trim();

  if (phone == "" || phone.length != 10 || phone.match(/^[a-zA-Z]+$/)) {
    phone_id.classList.add("error_border");

    // alert("Please enter valid phone number !");
    phone_id.value = phone;
    phone_id.focus();
  } else {
    phone_id.classList.remove("error_border");
  }

}

