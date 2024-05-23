let confirmationModal = document.getElementById("confirmationModal");
let deleteButton = document.getElementById("deleteUser");
let closeButton = document.getElementById("close-btn");


console.log(confirmationModal,deleteButton,closeButton)

deleteButton.addEventListener('submit', (e) => {
    e.preventDefault()
    console.log('hello')
    confirmationModal.style.display = 'block'
})

/* closeButton.addEventListener('click', () => {
    confirmationModal.style.display = 'hidden';
})  */

/* window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} */
