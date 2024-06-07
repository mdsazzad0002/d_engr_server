<!-- =======================================
Scroll to Top Button
========================-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- ========================================
js common file
========================================== -->
<!-- Bootstrap core JavaScript-->
<script src="<?= APP_URL;?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= APP_URL;?>assets/vendor/bootstrap4.6/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= APP_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- BEAUTI ALERT -->
<script src="<?= APP_URL;?>assets/vendor/sweetalert/sweetalert.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= APP_URL;?>assets/vendor/sb-admin/js/sb-admin-2.min.js"></script>

<!-- google translate -->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }

    setInterval(function() {
        document.querySelector('body').style.top = '0';
    }, 3000)
</script>

<script>
    function copy(txt) {
        console.log('detect click' + txt.src);


        var input = document.createElement('input');
        input.value = txt.src;
        document.body.append(input);
        input.select();
        document.execCommand('copy');
        input.remove();
        swal(
            'Coppied!',
            txt.src,
            'success'
        )

    }

    function copy_a_link(txt) {
        // thi.preventDefault();

        console.log('detect click' + txt.getAttribute("data-herf"));


        var input = document.createElement('input');
        input.value = txt.getAttribute("data-href");

        document.body.append(input);
        input.select();
        document.execCommand('copy');
        input.remove();
        swal(
            'Coppied!',
            txt.getAttribute("data-href"),
            'success'
        )

    }
</script>