function sendCardData(event) {
    event.preventDefault()

    const form = event.target
    const formData = new FormData()

    formData.append("name", form["card-name"].value)
    formData.append("description", form["card-description"].value)

    fetch(form.action, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(json => {
        console.log(json);
    })
}

document.addEventListener("DOMContentLoaded", function() {
    const mainForm = document.querySelector("form")

    mainForm.addEventListener("submit", sendCardData)
})