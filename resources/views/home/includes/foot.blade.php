<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/placeholders.min.js"></script>
<script src="/assets/js/lightbox.js"></script>
<script src="/assets/js/jquery.viewportchecker.min.js"></script>
    <script>
        $(document).ready(function () {

//NAVIGATION

            var trigger = $('.hamburger'),
                overlay = $('.overlay'),
                isClosed = false;

            trigger.click(function () {
                hamburger_cross();
            });

            function hamburger_cross() {

                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }

            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });

//SLIDE

            $('.carousel').carousel({
                pause: null,
                interval: 6000
            })

            $('#home_car').on('slid.bs.carousel', function () {

                document.getElementById('video_03').pause();
                document.getElementById('video_03').currentTime = 0;
                if ($('#item_03').hasClass('active')){
                    document.getElementById('video_03').play();
                }

                document.getElementById('video_05').pause();
                document.getElementById('video_05').currentTime = 0;
                if ($('#item_05').hasClass('active')){
                    document.getElementById('video_05').play();
                }

            });

// VIEWPORT CHECKER FOR VIDEO

            $('#video').viewportChecker({
                callbackFunction: function(){
                    $('#video')[0].play();
                }
            });

// PHOTOGALLERY
            //
        });
    </script>
</body>
</html>
