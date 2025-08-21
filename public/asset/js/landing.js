const menuToggle = document.getElementById('menuToggle');
const authMethod = document.querySelector('.auth-method');

menuToggle.addEventListener('click', () => {
    authMethod.classList.toggle('active');
});
