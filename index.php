<script>
    document.title = "Memorable World | Home";
    document.querySelector('title').innerHTML = document.title;
</script>
<?php include "./includes/head.php"; ?>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    
                    <!-- <div id="canvas">
                        <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                            <div class="sj-book"></div>
                            <button class="cross-button">Return Book</button>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-xl-4 col-xxl-4">
                        <div class="frame-area">
                            <div class="frame-text">
                                <h1 class="frame-head">SAINT OF THE DAY</h1>
                                <i class="fa-solid fa-quote-right frame-icon"></i>
                                <p class="frame-content">We can't help everyone, but everyone can help someone</p>
                                <h3 class="frame-bottom">AESOP</h3>
                                <a href="#" class="frame-btn">Read More</a>
                            </div>
                            <div class="frame-text frame-bottom-space mb-60">
                                <h1 class="frame-head">POEM OF THE WEEK</h1>
                                <h3 class="head-bottom">THE POINT NO RETURN</h3>
                                <p class="frame-content">It is a long established fact that a reader will be distracted by the readable content</p>
                                <a href="#" class="frame-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-5 col-xl-5 d-lg-flex d-none window-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/top-window.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/top-window-right.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>

                            <div class="col-3 pt-30">
                                <div class="window-bottom">
                                    <img src="./assets/images/img-1.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-3 pt-30">
                                <div class="window-bottom">
                                    <img src="./assets/images/img-3.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-3 pt-30">
                                <div class="window-bottom">
                                    <img src="./assets/images/img-3.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-3 pt-30">
                                <div class="window-bottom">
                                    <img src="./assets/images/img-4.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-xxl-3">
                        <div class="main-left">
                            <div class="left-side-wrapper d-flex justify-content-center">
                                <div class="img-border">
                                    <img src="./assets/images/img-frame.PNG" class="img-fluid w-100" alt="">
                                    <div class="bottom-circle"></div>
                                </div>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="./poets.php?book=11"><img src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" class=" sm-book" alt=""></a>
                                    <a href="./poets.php?book=12"><img src="./assets/images/Couple-Diary-book.png" data-id="coupleDiary.jpg" class=" sm-book" alt=""></a>
                                    <a href="./poets.php?book=13"><img src="./assets/images/Special-Events-book.png" data-id="special-events-back.jpg" class=" sm-book" alt=""></a>
                                    <a href="./poets.php?book=14"><img src="./assets/images/In-Memory-book.png" data-id="front-cover.png" class=" sm-book" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-4">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="./liabrary.php?book=5"><img src="./assets/images/Poems-Collection.png" data-id="poems_front.jpg" class=" sm-book" alt=""></a>
                                    <a href="./liabrary.php?book=6"><img src="./assets/images/poem-one-love.png" data-id="40-poems_front.jpg" class=" sm-book" alt=""></a>
                                    <a href="./liabrary.php?book=7"><img src="./assets/images/Quotes-Collection.png" data-id="quotes_front.jpg" class=" sm-book" alt=""></a>
                                    <a href="./liabrary.php?book=8"><img src="./assets/images/Daily-Quotes-Weekly-Poems.png" data-id="daily-quotes_front.jpg" class=" sm-book" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-4">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="./new-page.php?book=9"><img src="./assets/images/My-life-in-pictures.png" class="img-fluid" alt=""></a>
                                    <a href="./new-page.php?book=10"><img src="./assets/images/The-Story-Of-My-Life.png" class="img-fluid" alt=""></a>
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
    <!-- <script>
        let buttons = document.querySelectorAll('.initBook')
        // console.log(buttons) 
        buttons.forEach(el => {
            el.addEventListener('click', function(e) {
                let page = e.target.dataset.page
                changeMetaContent(page, 'filename')
                let pageNumber = e.target.dataset.pagenumber
                // console.log(pageNumber);
                changeMetaContent(pageNumber, 'pageNumber')
                // $('.sm-book').trigger('click')
                initBook(e.target)
            })
        })

        function changeMetaContent(value, metaTagName) {
            let tag = document.querySelector('meta[name="' + metaTagName + '"]')
            tag.content = value
        }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- custom javascript -->
    <script src="./assets/js/index.js"></script>
    <?php include "./includes/scripts.php"; ?>
</body>

</html>