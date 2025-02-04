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
//  setTimeout(function() {
//     document.getElementById('success-alert').style.display = 'none';
// }, 4500);