let cookieIsValid = true
let tokenIsValid = true

let dc = document.cookie

console.log(dc)

if (cookieIsValid && tokenIsValid)
  document.body.className = ""
else
  window.location = "index.php"