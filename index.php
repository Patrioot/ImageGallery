<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <link href="css/lightgallery.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <script src="js/jquery.min.js"></script>
</head>

<body class="home">
    <div class="demo-gallery">
        <!-- Here  -->
        <div class="container">
            <!-- Click on image -->
            <div id="lightgallery" class="list-unstyled row">
                <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $num) : ?>
                    <?php $image = "https://patrioot.github.io/ImageGallery/img/AR/Step$num.png"; ?>
                    <div class="mySlides" data-src="https://patrioot.github.io/ImageGallery/img/AR/Step1.png" data-sub-html= "<h4>Step<?php echo $num?></h4>">
                        <div class="numbertext"> <?php echo $num; ?>/10</div>
                        <img src=<?php echo $image; ?> style="width: 100%" />
                    </div>
                <?php endforeach ?>
            </div>
            <!-- End of Click on image -->

            <!-- Start Buttons -->
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <!--End buttons  -->

            <!-- Caption container -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <!-- End of Caption Container -->

            <!--Image coulmns  -->
            <div class="row">
                <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $num) : ?>
                    <?php $image = "https://patrioot.github.io/ImageGallery/img/AR/Step$num.png"; ?>
                    <div class="column">
                        <img class="demo cursor" src=<?php echo $image; ?> style="width: 100%" onclick="currentSlide(<?php echo $num ?>)" alt="Step <?php echo $num?>" />
                    </div>
                <?php endforeach ?>
            </div>
            <!--End of Image coulmns  -->

        </div>
    </div>
    </div>

    <script type="text/javascript">
        // init lightgallery
        $(document).ready(function() {
            $("#lightgallery").lightGallery();
        });

        // Slide show codes
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

    <!-- Pacakges -->
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
</body>

</html> 