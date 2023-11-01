<script>
    document.title = "My Liabrary | Memorable World";
    document.querySelector('title').innerHTML = document.title;
</script>
<?php include "./includes/head.php"; ?>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <div id="canvas">
                        <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                            <div class="sj-book"></div>
                            <button class="filter-button"><i class="fa-solid fa-upload"></i></button>
                            <button class="cross-button">Return Book</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-lg-flex d-none px-5">
                        <div class="windows-left">
                            <div class="window-top-left">
                                <img src="./assets/images/window-poet-left.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="window-bottom-left">
                                <img src="./assets/images/window-bottom-left.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5  d-lg-flex d-none window-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-1.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-2.png" class="img-fluid" alt="">
                                </div>
                            </div>

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
                    <div class="col-lg-3">
                        <div class="main-left">
                            <div class="left-side-wrapper d-flex justify-content-center">
                                <div class="img-border">
                                    <img src="./assets/images/img-frame.PNG" class="img-fluid w-100" alt="">
                                    <div class="bottom-circle"></div>
                                </div>
                            </div>
                            <div class="heading-right">
                                <h1 class="poets-heading">My Liabrary</h1>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-1" src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" data-page="assets/pages/liabrary/couple-diary/upload" class=" initBook" alt=""></a>
                                    <a href="./add-book.php"><img id="book-2" src="./assets/images/Couple-Diary-book.png" alt=""></a>
                                    <a href="./add-events.php"><img id="book-3" src="./assets/images/Special-Events-book.png" alt=""></a>
                                    <a href="./in-memory.php"><img id="book-4" src="./assets/images/In-Memory-book.png" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-1" src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" class=" sm-book" alt=""></a>
                                    <a href="#"><img id="book-2" src="./assets/images/Couple-Diary-book.png" data-id="coupleDiary.jpg" class=" sm-book" alt=""></a>
                                    <a href="#"><img id="book-3" src="./assets/images/Special-Events-book.png" data-id="special-events-back.jpg" class=" sm-book" alt=""></a>
                                    <a href="#"><img id="book-4" src="./assets/images/In-Memory-book.png" data-id="front-cover.png" class=" sm-book" alt=""></a>
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