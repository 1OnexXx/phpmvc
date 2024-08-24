<!-- Hanya gunakan bootstrap.bundle.min.js untuk meminimalkan konflik -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script lokal -->
<script src="<?= BASEURL; ?>/js/script.js"></script>

<script>
// SweetAlert delete confirmation
document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari <a>
        const mahasiswaId = this.getAttribute('data-id'); // Ambil ID mahasiswa dari atribut data-id

        // Tampilkan SweetAlert konfirmasi
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, arahkan ke halaman hapus
                window.location.href = '<?= BASEURL; ?>/mahasiswa/hapus/' + mahasiswaId;
            }
        });
    });
});
</script>

</body>
</html>
