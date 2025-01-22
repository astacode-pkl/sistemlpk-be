
    const fileInput = document.getElementById('fileInput'); 
     const preview = document.getElementById('preview');
     const display = document.getElementById('display');


     fileInput.addEventListener('change', (event) => {
         const file = event.target.files[0];
         if (file) {
             const reader = new FileReader();

             reader.onload = (e) => {
                 preview.src = e.target.result;
                 preview.style.display = 'block';
                 display.classList.remove('d-none') = 'block';

             };

             reader.readAsDataURL(file);
         } else {
             display.style.display = 'none';
             preview.src = '';
         }
     });
