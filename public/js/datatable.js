$(document).ready(function () {
    $("#datatable").DataTable({
        // Konfigurasi tambahan (opsional)
        paging: true, // Menampilkan paginasi
        searching: true, // Menampilkan kolom pencarian
        ordering: true, // Menampilkan sorting kolom
        info: true, // Menampilkan informasi jumlah data
    });
});
