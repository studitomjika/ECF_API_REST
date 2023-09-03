const commentsDiv = document.querySelector("#comments");

let comments = []

fetch("/api/comments")
  .then(function (response) {
    console.log(response)
    return response.json();
  })
  .then(function (json) {
    json['hydra:member'].forEach( comment => {
      comments.push(comment)
      let newComment = ""
      newComment += (
        "<div>"+
        "<div class='comment'>"+
        "<p>Commentaire: "+comment.message+"</p>"+
        "<p>Note: "+comment.grade+"/5</p>"+
        "<p>De: "+comment.name+"</p></div>"
      )

      let isChecked = ""
      if( comment.accepted == 1 ) isChecked = "checked"
console.log(comment.idCommentaire)
      newComment +=(
        "<input type='checkbox' name='comment_cb' id='comment-"+comment.idCommentaire+"' class='update-input' onchange='handleClick(this)' "+isChecked+" />"+
        "<label>Commentaire accepté</label></div>")

      commentsDiv.innerHTML += newComment
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
