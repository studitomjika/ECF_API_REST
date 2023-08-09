let cardeal_btn = document.getElementById("add-cardeal-btn")
cardeal_btn.onclick = cardealAdd

function cardealAdd (event) {
  let carDeal = {}
  carDeal.model = document.getElementById("title").value
  carDeal.kilometres = Number(document.getElementById("km").value)
  carDeal.year = Number(document.getElementById("year").value)
  carDeal.price = document.getElementById("price").value
  carDeal.pictureLink = document.getElementById("pic_link").value

  fetch("/api/used_cars", {
    method: 'POST',
    headers: {
      'accept': 'application/ld+json',
      'Content-Type': 'application/ld+json'
    },
    body: JSON.stringify(carDeal)
  })
  .then(function (response) {
    console.log(response)
  })
}
 