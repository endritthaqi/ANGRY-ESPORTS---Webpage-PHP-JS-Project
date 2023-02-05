function validoMeRegex() {
  var email = document.getElementById("em1").value;
  var passwordi = document.getElementById("pw1").value;

  var regexEMAIL = /^[a-zA-Z][a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.(com|net)$/; //email duhet te startoj me shkronje dhe ka @ dhe ends.com.net
  var regexPASSWORD =
    /^[A-Z][a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]{6,}$/; // min. 7 karaktere, karakteri i pare ne upper case dhe te ket 1num 1specchar

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

  console.log(email);
  console.log(passwordi);
}
