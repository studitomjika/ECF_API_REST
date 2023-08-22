let connectButton = document.getElementById("connect-btn")
connectButton.onclick = login

let token

function login (event) {

  const username = document.getElementById("login").value
  const password = document.getElementById("password").value

  let userLogin = {}

  userLogin.username = username
  userLogin.password = password

  console.log("userLogin: ", userLogin)

  fetch("/api/login", {
    method: 'POST',
    headers: {
      'accept': 'application/ld+json',
      'Content-Type': 'application/ld+json'
    },
    body: JSON.stringify(userLogin)
  })
  .then(function (response) {
    return response.text()
  })
  .then(function(text) { 
    token = JSON.parse(text).token;
    console.log(token)
  })
}
