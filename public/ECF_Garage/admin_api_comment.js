const commentsDiv = document.querySelector("#comments");

let comments = []

fetch("/api/comments")
  .then(function (response) {
    return response.json();
  })
  .then(function (json) {
    json['hydra:member'].forEach( comment => {
      comments.push(comment)
      commentsDiv.innerHTML += (
        "<div class='comment'>"+
        "<p>Commentaire: "+comment.message+"</p>"+
        "<p>Note: "+comment.grade+"/5</p>"+
        "<p>De: "+comment.name+"</p>"
      )

      let cbInput = document.createElement("input")
      cbInput.type = "checkbox"
      cbInput.name = "comment_cb"
      cbInput.id = "comment-"+comment.idCommentaire
      cbInput.className = "update-input"
      cbInput.setAttribute("onchange", 'handleClick(this)')
      if( comment.accepted == 1 ) cbInput.setAttribute("checked", "checked")
      commentsDiv.appendChild(cbInput)

      commentsDiv.innerHTML += (
        "<label>Commentaire accepté</label></div>"
      )
    })
  })

let comments_btn = document.getElementById("validate-comments-btn")
comments_btn.onclick = commentsValidation

function handleClick(cb) {
  comments.find((el) => el.idCommentaire == cb.id.replace("comment-","")).accepted = cb.checked
}

function commentsValidation (event) {

  let commentCBs = document.getElementsByName("comment_cb")

  commentCBs.forEach( commentCB => {

    let commentToSend = comments.find((el) => el.idCommentaire == commentCB.id.replace("comment-",""))

    fetch("/api/comments/"+commentCB.id.replace("comment-",""), {
      method: 'PATCH',
      headers: {
        'accept': 'application/ld+json',
        'Content-Type': 'application/merge-patch+json'
      },
      body: JSON.stringify(commentToSend)
    })
    .then(function (response) {
      console.log(response)
    })
  })
}
