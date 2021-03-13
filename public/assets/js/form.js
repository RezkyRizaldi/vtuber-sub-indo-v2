const scriptURL =
  "https://script.google.com/macros/s/AKfycbwTfN4vWTwrxuNpppG59OUbYIy8n7MsJwIcIABwh6nnWFl9ffqb6a_qD6DHVfynKxn2/exec";
const form = document.forms["form"];
const alertSuccess = document.getElementById("alertSuccess");
const alertFailed = document.getElementById("alertFailed");
const btnSend = document.getElementById("btnSend");
const btnLoad = document.getElementById("btnLoad");

if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    btnSend.classList.toggle("d-none");
    btnLoad.classList.toggle("d-none");
    fetch(scriptURL, { method: "POST", body: new FormData(form) })
      .then((response) => {
        btnLoad.classList.toggle("d-none");
        btnSend.classList.toggle("d-none");
        alertSuccess.classList.toggle("d-none");
        form.reset();
        console.log("Success!", response);
      })
      .catch((error) => {
        alertFailed.classList.toggle("d-none");
        console.error("Error!", error.message);
      });
  });
}
