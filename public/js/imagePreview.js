
const fileInput = document.querySelectorAll('#fileInput'); 
const preview = document.querySelectorAll('#preview');
const display = document.querySelectorAll('#display');
for (let i = 0; i < fileInput.length; i++) {
fileInput[i].addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = (e) => {
            preview[i].src = e.target.result;
            preview[i].style.display = 'block';
            display[i].classList.remove('d-none') = 'block';

        };

        reader.readAsDataURL(file);
    } else {
        display[i].style.display = 'none';
        preview[i].src = '';
    }
});
}
