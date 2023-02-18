function validoMeRegex() {
  var username = document.getElementById("un").value;
  var email = document.getElementById("em1").value;
  var passwordi = document.getElementById("pw1").value;
  var firstname = document.getElementById("firstname3").value;

  var regexFIRSTNAME = /^[a-zA-Z]+((\s[a-zA-Z]+){1,2})?$/;
  var regexUSERNAME = /^[a-zA-Z0-9]{5,20}$/; // mesepaku 5
  var regexEMAIL = /^[a-zA-Z][a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.(com|net)$/; //email duhet te startoj me shkronje dhe ka @ dhe ends.com.net
  var regexPASSWORD =
    /^[A-Z][a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]{6,}$/; // min. 7 karaktere, karakteri i pare ne upper case dhe te ket 1num 1specchar

  if (regexFIRSTNAME.test(firstname)) {
    console.log("First name eshte mire");
  } else {
    alert("First name eshte gabim!!!");
  }

  if (regexUSERNAME.test(username)) {
    console.log("Username eshte mire");
  } else {
    alert("Username eshte gabim!!!");
  }

  if (regexEMAIL.test(email)) {
    console.log("Email eshte mire");
  } else {
    alert("Email eshte gabim!!!");
  }
  if (regexPASSWORD.test(passwordi)) {
    console.log("Password eshte mire");
  } else {
    alert("Password eshte gabim!!!");
  }

  console.log(firstname);
  console.log(username);
  console.log(email);
  console.log(passwordi);
}
