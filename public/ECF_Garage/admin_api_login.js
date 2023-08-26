let connectButton = document.getElementById("connect-btn")
connectButton.onclick = login

let token

function login (event) {

  const username = document.getElementById("login").value
  const password = document.getElementById("password").value

  let userLogin = {}

  let error

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
    console.log("ici")
    if (response.status == 401)
    {
      error = "fail-id"
      throw error
    }
    else
    {
      let dc = document.cookie
      console.log(dc)// pas de BEARER à cause de httpOnly
      
      //document.getElementById("admin-btn") //show
      //document.getElementById("connect-btn") //change name and target to logout
//      $_SESSION["id_user"] = $user["id_employee"];
//      $_SESSION["isAdmin"] = $user["role_admin"];

      window.location="index.php" 
    }
  })
  .catch(function(error) {
    console.error(`Log error: ${error.message}`)
    if(error == "fail-id")
    {
      document.getElementById("fail-id").classList.remove("hidden")
    }
    else
      document.getElementById("fail-technical").classList.remove("hidden")
  });
}
