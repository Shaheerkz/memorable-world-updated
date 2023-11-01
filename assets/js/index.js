$(document).ready(function () {
    $("#search-btn").click(function () {
        $("#searchInput").toggle(500)
    })
})
// mobile menu 
let navs = document.querySelector('.primary-navs')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
    e.addEventListener('click', function () {
        navs.classList.toggle('active');
    });
});


// init book initilize
let buttons = document.querySelectorAll('.initBook')
// console.log(buttons) 
buttons.forEach(el => {
    el.addEventListener('click', function (e) {
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



// init book initilize end




