const signinOnglet = document.querySelector('#signinOnglet');
const signupOnglet = document.querySelector('#signupOnglet');
const signinForm = document.querySelector('#signinForm');
const signupForm = document.querySelector('#signupForm');
document.addEventListener('click', (e)=>{
    if (e.target.closest('#onglets')) {
        signinOnglet.classList.toggle('selectedOnglet');
        signupOnglet.classList.toggle('selectedOnglet');
        signinForm.classList.toggle('notSelectedForm');
        signupForm.classList.toggle('notSelectedForm');
    }
})