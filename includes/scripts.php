<script src="./assets/book/lib/turn.min.js"></script>
<script type="text/javascript">
    function loadApp(pagenumber = undefined) {
        var flipbook = $('.sj-book');
        // Check if the CSS was already loaded
        if (flipbook.width() == 0 || flipbook.height() == 0) {
            setTimeout(loadApp, 10);
            return;
        }
        // console.log(flipbook);
        Hash.on('^page\/([0-9]*)$', {
            yep: function(path, parts) {

                var page = parts[1];
                // alert(page)
                if (page !== undefined) {
                    if ($('.sj-book').turn('is')) {
                        setTimeout(function() {
                            $('.sj-book').turn('page', 2);
                        }, 500);
                    }
                }
            },
            nop: function(path) {
                if ($('.sj-book').turn('is'))
                    $('.sj-book').turn('page', pagenumber === undefined ? 1 : pagenumber);
            }
        });

        // Arrows

        $(document).keydown(function(e) {

            var previous = 37,
                next = 39;

            switch (e.keyCode) {
                case previous:

                    $('.sj-book').turn('previous');

                    break;
                case next:

                    $('.sj-book').turn('next');

                    break;
            }

        });


        // Flipbook

        flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);
        flipbook.turn({
            elevation: 50,
            acceleration: !isChrome(),
            autoCenter: true,
            gradients: true,
            duration: 1000,
            pages: 112,
            when: {
                turning: function(e, page, view) {

                    var book = $(this),
                        currentPage = book.turn('page'),
                        pages = book.turn('pages');

                    if (currentPage > 3 && currentPage < pages - 3) {

                        if (page == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (page == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    } else if (page > 3 && page < pages - 3) {
                        if (currentPage == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (currentPage == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    }

                    updateDepth(book, page);

                    if (page >= 2)
                        $('.sj-book .p2').addClass('fixed');
                    else
                        $('.sj-book .p2').removeClass('fixed');

                    if (page < book.turn('pages'))
                        $('.sj-book .p111').addClass('fixed');
                    else
                        $('.sj-book .p111').removeClass('fixed');

                    Hash.go('page/' + page).update();

                },

                turned: function(e, page, view) {

                    var book = $(this);

                    if (page == 2 || page == 3) {
                        book.turn('peel', 'br');
                    }

                    updateDepth(book);

                    $('#slider').slider('value', getViewNumber(book, page));

                    book.turn('center');

                },

                start: function(e, pageObj) {

                    moveBar(true);

                },

                end: function(e, pageObj) {

                    var book = $(this);

                    updateDepth(book);

                    setTimeout(function() {

                        $('#slider').slider('value', getViewNumber(book));

                    }, 1);

                    moveBar(false);

                },

                missing: function(e, pages) {

                    for (var i = 0; i < pages.length; i++) {
                        addPage(pages[i], $(this));
                    }

                }
            }
        });

        function updateFlipbookDimensions() {
            var flipbook = $('.sj-book');
            var windowWidth = $(window).width();

            if (windowWidth <= 991) {
                // Set the width and height for smaller screens
                flipbook.turn('size', 650, 500);
            }
            if (windowWidth <= 480) {
                // Set the width and height for smaller screens
                flipbook.turn('size', 350, 210);
            }
            // if (windowWidth <= 648) {
            //     flipbook.turn('size', 450, 300)
            // }
        }

        // Initial call to set dimensions based on window width
        updateFlipbookDimensions();

        // Listen for window resize events
        $(window).resize(function() {
            updateFlipbookDimensions();
        });

        $('#slider').slider('option', 'max', numberOfViews(flipbook));

        flipbook.addClass('animated');

        // Show canvas

        $('#canvas').css({
            visibility: ''
        });
    }

    // Hide canvas

    // $('#canvas').css({visibility: 'hidden'});

    // Load turn.js

    $(document).ready(function() {
        // yepnope({
        // 	test: Modernizr.csstransforms,
        // 	yep: ['../../assests/book/lib/turn.min.js'],
        // 	nope: ['../../assests/book/lib/turn.html4.min.js', 'css/jquery.ui.html4.css', 'css/steve-jobs-html4.css'],
        // 	both: ['js/steve-jobs.js', 'css/jquery.ui.css', 'css/steve-jobs.css'],
        // 	complete: loadApp
        // });

    });



    // $('#album').turn({ gradients: true, acceleration: true });
</script>
<script>
    (function($) {
        $.getStylesheet = function(href) {
            var $d = $.Deferred();
            var $link = $('<link/>', {
                rel: 'stylesheet',
                type: 'text/css',
                href: href
            }).appendTo('head');
            $d.resolve($link);
            return $d.promise();
        };
    })(jQuery);

    var smBooks = document.querySelectorAll(".sm-book");

    var album = document.querySelector(".sj-book");
    var crossButton = document.querySelector(".cross-button");
    var filterButton = document.querySelectorAll(".filter-button");
    crossButton.style.visibility = "hidden";
    let filterCloseButton = document.querySelectorAll('.filter-cross-button')
    console.log(filterCloseButton, 'filter btn close');
    filterCloseButton.forEach(btn => {
        btn.style.visibility = 'hidden'
        console.log(btn);
    })
    var btn = document.querySelector(".btn");
    let mainBody = document.querySelector('main');
    let mainOverlay = document.querySelector('.body-overlay')
    let overlay = document.createElement('div')
    // let filterPage = document.querySelector('#filter-page')
    // filterPage.style.display = 'none'
    // let loader = document.querySelector('.loader')
    // loader.style.display = 'none';
    album.style.visibility = "hidden";
    Modernizr.csstransforms;
    $(document).on("click", "[class*='sm-book']", function(e) {
        e.preventDefault();
        initBook(e.target)
    })
    filterButton.forEach(btn => {
        btn.style.visibility = "hidden";
    })
    var uploadBtn = document.getElementById("upload")
    // upload book covers
    function readURL(uploadBtn) {
        if (uploadBtn.files && uploadBtn.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(imageUrl).css('--bg-image', 'url(' + e.target.result + ')');
                $(imageUrl).hide();
                $(imageUrl).fadeIn(650);
            }
            reader.readAsDataURL(uploadBtn.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    // //End here uploading code




    function initBook(el) {
        // loader.style.display = 'block';
        thumbnail = $(el);
        console.log(el.id);
        const dataId = el.getAttribute('data-id');
        // const dataPages = getAttribute('data-pages');
        const hasExtension = dataId.includes('.');
        const imageUrl = hasExtension ? dataId : `${dataId}.jpg`;
        let bookElem = $(".sj-book").html(`<div depth="5" style="--bg-image: url(../../../assets/images/book-covers/${imageUrl}); " class="hard" data-id="${dataId}">
        <div class="side"></div>
        </div>
        <div depth="5" class="hard front-side">
            <div class="depth"></div>
        </div>
        <div class="own-size"></div>
        <div class="own-size even"></div>
        <div class="hard fixed back-side p111">
            <div class="depth"></div>
        </div>
        <div class="hard p112"></div>`);
        // let bookElem = document.querySelectorAll('.sj-book')
        console.log(bookElem[0]);
        let canvas = document.querySelectorAll('#canvas');
        canvas.forEach(btn => {
            btn.style.display = 'none'
        })
        let styleSheet = $(el).data('styles');
        if (styleSheet == undefined) {
            styleSheet = ['./assets/book/css/steve-jobs-html4.css', './assets/book/css/steve-jobs-1.css'];
        } else {
            styleSheet = styleSheet.split(',');
        }
        let styles = ""
        styleSheet.forEach((el, index) => {
            if (index > 0) {

                styles += `, $.getStylesheet(styleSheet[${index}])`
            } else {
                styles += `$.getStylesheet(styleSheet[${index}])`
            }
        })
        let bookScript = './assets/book/js/steve-jobs.js'
        $.when(eval(styles), $.getScript(bookScript)).then(function() {
            let pagenumber = el.dataset.pagenumber
            loadApp(pagenumber);
            mainBody.classList.add('body-overlay-wrap')
            overlay.classList.add('body-overlay')
            mainBody.append(overlay)
            let pageWrappers = document.querySelectorAll('#book-zoom');
            pageWrappers.forEach(pageWrapper => {
                pageWrapper.style.transform = 'scale(0.5)';
            })
            canvas.forEach(btn => {
                btn.style.display = 'block'
            })
            // },1000)
        }).then(function() {
            scaleFrom = thumbnail.height() * 1.1 / $('#book-zoom').height(),
                setTimeout(function() {
                    $('#book-zoom').transform('scale(0.9)');
                    console.log('scale(1)');
                    $('.sj-book').turn('page', 0);
                }, 500);
        });
        var newBook = $(el);
        if (album.style.visibility === "hidden") {
            album.style.visibility = "visible";
            newBook.css('visibility', 'hidden');
            $('#canvas').zIndex('11');
            crossButton.style.visibility = "visible";

        }
        let newBook2 = $("[class*='initBook']");
        // filterButton.forEach(btn => {
        //         btn.style.visibility = "visible";
        // })
        if (typeof newBook2 !== 'undefined') {
            filterButton.forEach(btn => {
                btn.style.visibility = "visible";
            });
        } else {
            filterButton.forEach(btn => {
                btn.style.visibility = "hidden";
            });
        }

    }
    // Add a click event listener to the cross button
    crossButton.addEventListener("click", function(e) {
        e.preventDefault();
        $('.sj-book').turn('page', 1);
        $('#book-zoom').transform('scale(0.2)').css("visibility", "hidden");
        $('#canvas').zIndex('10');
        overlay.classList.remove('body-overlay')
        setTimeout(function() {
            $(".sj-book").css("visibility", "hidden");
        }, 500);
        let newBook = $("[class*='sm-book']");
        let newBook2 = $("[class*='initBook']");
        crossButton.style.visibility = "hidden";
        filterButton.forEach(btn => {
            btn.style.visibility = "hidden";
        })
        filterCloseButton.forEach(btn => {
            btn.style.visibility = 'hidden'
            console.log(btn);
        })
        setTimeout(function() {
            if ($('.sj-book').turn('is')) {
                $('.sj-book').turn('destroy');
                $(window).unbind('keydown');
                newBook.css('visibility', 'visible');
                newBook2.css('visibility', 'visible');
            }
        }, 500);
        visiblefunc('.login-btn')
        visiblefunc('.register-btn')
        // btnVisiblefunc('.register-btn')
    });
    $('#filter-page').css('display', 'none');
    filterButton.forEach(btn => {
        btn.addEventListener('click', () => {
            $('.sj-book').turn('page', 2);
            $('#filter-page').css('display', 'block')
            filterCloseButton.forEach(btn => {
                btn.style.visibility = 'visible'
                console.log(btn);
            });
        });
    });
    filterCloseButton.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.style.visibility = 'hidden'
            $('.sj-book').turn('page', 2);
            $('#filter-page').css('display', 'none');
        })
    });

    function visiblefunc(element) {
        let btn = document.querySelector(element)
        if (btn.style.visibility = 'hidden') {
            btn.style.visibility = 'visible'
        }
    }



    






    // setTimeout(function() {
    //     let totalTargets = 1; // Define the total number of targets
    //     let delay = 1000; // Delay between switching

    //     for (let i = 1; i <= totalTargets; i++) {
    //         let targetClass = `.target${i}`;
    //         let pClass = `.p${i + 1}`; // p3 for target1, p4 for target2, and so on
    //         let viewContent = $(targetClass).html();
    //         $(`.sj-book ${pClass}`).html(viewContent);

    //         // Add a delay before switching to the next target
    //         setTimeout(function() {
    //             $(targetClass).hide();
    //         }, i * delay);
    //     }
    // }, 1000);

    // var filterPage = document.getElementById('filter-page');
</script>