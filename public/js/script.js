
const fileInput = document.getElementById('fileInput'); 
const preview = document.getElementById('preview');
const display = document.getElementById('display');   
const textarea = document.querySelectorAll('#floatingTextarea');

    $(document).ready(function () {
        $('#datatable').DataTable({
            // Konfigurasi tambahan (opsional)
            paging: true, // Menampilkan paginasi 
            searching: true, // Menampilkan kolom pencarian
            ordering: true, // Menampilkan sorting kolom
            info: true // Menampilkan informasi jumlah data
        });

        search('#search_contacts','#container_contacts li');
        search('#search_pages','#container_pages li');
        function search(inputElement,container) {
            $(inputElement).keyup(function(){
                let value = $(this).val().toLowerCase();
                $(container).filter(function(){
                    $(this).toggle(
                        $(this).text().toLowerCase().indexOf(value) > -1
                    );
                })
                
            });
        }

    
      });  

       
      for (let i = 0; i < textarea.length; i++) {
          textarea[i].addEventListener('input' , function(){
              textarea[i].style.height = '';
              textarea[i].style.height = textarea[i].scrollHeight + 'px'
          });
        
      }
      
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

        //sweat alert
        function deleteItem(event) {
            event.preventDefault();
            Swal.fire({
              title: 'Are you sure to Delete it?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Delete it!',
              cancelButtonText: 'Cancel'
          }).then((result) => {
                if (result.isConfirmed) {
                    event.target.closest('form').submit();
              }
        });
      }

      function Decision(event) {
            event.preventDefault();
            Swal.fire({
              title: 'Are you sure to Save it?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Save it!',
              cancelButtonText: 'Cancel'
          }).then((result) => {
                if (result.isConfirmed) {
                    event.target.closest('form').submit();
              }
        });
      }

      
      //5 detik notifikasi hilang
      setTimeout(function() {
          document.getElementById('success-alert').style.display = 'none';
      }, 4500);