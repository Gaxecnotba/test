let user = document.querySelector("#user");
let login = document.querySelector(".login");
user.addEventListener('click', ()=>{
    user.classList.toggle('fa-times');
    login.classList.toggle('active');
})
