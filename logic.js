 let btnOpenModal = document.querySelector("#btn-open-modal");
 let btnCloseModal = document.querySelector("#btn-close-modal");
 let modal = document.querySelector("#modal");

 btnOpenModal.addEventListener("click",()=> {
    modal.showModal();
 })

 btnCloseModal.addEventListener("click",()=> {
    modal.close();
 })

