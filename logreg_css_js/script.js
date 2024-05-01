const container = document.getElementById('container');
const registerBtn = document.getElementById('registerb');
const loginBtn = document.getElementById('loginb');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});