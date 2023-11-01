<script>
    document.title = "Poets Corner | Memorable World";
    document.querySelector('title').innerHTML = document.title;
</script>

<?php include "./includes/head.php"; ?>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <!--  -->
                    <!-- <div class="target1 bp" data-get="2" style="display: none;">
                        <div class="script-area">
                            <h2 class="pageTitle">Zig Ziglar</h2>
                            <h4 class="secondaryTitle">No encuentras fuerza de voluntad, la creas.</h4>
                            <h4 class="secondaryTitle">No encuentras fuerza de voluntad, la creas.</h4>
                            <h4 class="secondaryTitle">No encuentras fuerza de voluntad, la creas.</h4>
                            <h4 class="secondaryTitle">No encuentras fuerza de voluntad, la creas.</h4>
                        </div>
                        <input type="hidden" class="quote-id-6176" value="6176">
                    </div>
                    <div class="target2 bp" data-get="3" style="display: none;">
                        <div class="script-area">
                            <h2 class="pageTitle">Zig Ziglar</h2>
                        </div>
                    </div>
                    <div class="target3 bp" data-get="4" style="display: none;">
                        <div class="script-area">
                            <h2 class="pageTitle">Zig Ziglar</h2>
                            <h2 class="pageTitle">Zig Ziglar</h2>
                            <h2 class="pageTitle">Zig Ziglar</h2>
                        </div>
                    </div> -->
                    <!--  -->
                    <div id="canvas">
                        <div id="book-zoom" style="visibility: hidden; height: 600px; transform: scale(0.2);">
                            <div class="sj-book">
                            </div>
                            <button class="filter-cross-button"><i class="fa-solid fa-xmark"></i></button>
                            <button class="filter-button"><img src="./assets/images/options-2.png" alt=""></button>
                            <button class="cross-button">Return Book</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xl-4  d-lg-flex d-none justify-content-center px-5">
                        <div class="windows-left">
                            <div class="window-top-left">
                                <img src="./assets/images/window-poet-left.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="window-bottom-left">
                                <img src="./assets/images/window-bottom-left.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-5 col-xl-5   d-lg-flex d-none window-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-1.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-2.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row images-bg-light">
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-1.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-2.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-3.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-4.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 ">
                        <div class="main-left">
                            <div class="left-side-wrapper d-flex justify-content-center">
                                <div class="img-border">
                                    <img src="./assets/images/img-frame.PNG" class="img-fluid w-100" alt="">
                                    <div class="bottom-circle"></div>
                                </div>
                            </div>
                            <div class="heading-right">
                                <h1 class="poets-heading">Poets Corner</h1>
                            </div>
                            <div class="book-area mt-5">
                            <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-15" src="./assets/images/Poems-Collection.png" data-id="poems_front.jpg" data-page="assets/pages/filter" class=" initBook" alt=""></a>
                                    <a href="#"><img id="book-16" src="./assets/images/poem-one-love.png" data-id="40-poems_front.jpg" data-page="assets/pages/40-poem" class=" initBook" alt=""></a>
                                    <a href="#"><img id="book-17" src="./assets/images/Quotes-Collection.png" data-id="quotes_front.jpg" data-page="assets/pages/quotes" class=" initBook" alt=""></a>
                                    <a href="#"><img id="book-18" src="./assets/images/Daily-Quotes-Weekly-Poems.png" data-id="daily-quotes_front.jpg" data-page="assets/pages/daily-quote" class=" initBook" alt="" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-15" src="./assets/images/Poems-Collection.png" data-id="poems_front.jpg" data-page="assets/pages/filter" class=" initBook" alt=""></a>
                                    <a href="#"><img id="book-16" src="./assets/images/poem-one-love.png" data-id="40-poems_front.jpg" data-page="assets/pages/40-poem" class=" initBook" alt=""></a>
                                    <a href="#"><img id="book-17" src="./assets/images/Quotes-Collection.png" data-id="quotes_front.jpg" data-page="assets/pages/quotes" class=" initBook" alt=""></a>
                                    <a href="#"><img id="book-18" src="./assets/images/Daily-Quotes-Weekly-Poems.png" data-id="daily-quotes_front.jpg" data-page="assets/pages/daily-quote" class=" initBook" alt="" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include "includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- custom javascript -->
    <script src="./assets/js/index.js"></script>
    <?php include "includes/scripts.php"; ?>
</body>

</html>