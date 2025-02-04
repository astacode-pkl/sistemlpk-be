
const textarea = document.querySelectorAll('#floatingTextarea');

    $(document).ready(function () {
       

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
      

        
    
      
     