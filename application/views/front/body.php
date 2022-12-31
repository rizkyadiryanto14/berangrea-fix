<!-- isi -->
<?php if ($isi) {
    $this->load->view($isi);
} ?>

<?php if ($subscribe) { ?>
<section class="newsletter-area section-padding"
    style="<?php echo "background-image: url('" . base_url('back_assets/img/' . $site["background"]) . "');" ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top text-center">
                    <h2>Dapatkan Informasi Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="#">
                    <input type="email" placeholder="Email anda" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Email anda'" required>
                    <button onclick="showSwal('success-message')" type="submit" class="template-btn">Langganan</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<!-- Footer Area Starts -->
<footer class="text-center text-white">
    <!-- Grid container -->
    <div class="container p-4"></div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Javascript -->
<script src="<?php echo base_url('front_assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/vendor/bootstrap-4.1.3.min.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/vendor/wow.min.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/vendor/owl-carousel.min.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/vendor/jquery.nice-select.min.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/vendor/ion.rangeSlider.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/main.js') ?>"></script>
<script src="<?php echo base_url('front_assets/js/scroll.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<!-- Footer Area End -->
<script>
// add padding top to show content behind navbar
$('body').css('padding-top', $('.navbar').outerHeight() + 'px')

// detect scroll top or down
if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        last_scroll_top = scroll_top;
    });
}
</script>

<script>
$(function() {
    $('body').removeClass('fade-out');
});
</script>
</body>

</html>