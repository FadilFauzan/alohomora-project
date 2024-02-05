@section('js')

{{-- bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

{{-- font awesome --}}
<script src="https://kit.fontawesome.com/48b0279278.js" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Dapatkan semua tautan navigasi
    var navLinks = document.querySelectorAll('header ul li a');

    // Tambahkan pendengar acara klik ke setiap tautan
    navLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            // Hapus kelas nav-active dari semua tautan
            navLinks.forEach(function (link) {
                link.classList.remove('nav-active');
            });

            // Tambahkan kelas nav-active ke tautan yang diklik
            link.classList.add('nav-active');
        });
    });
});
</script>

<!-- Typed JS -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="/js/typed.js"></script>

{{-- ion icons --}}
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

{{-- another --}}
<script src="/js/script.js"></script>
@show