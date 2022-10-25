// $(document).ready(function(){

//     $('.navbar').hide();

//     $(function () {
//       $(window).scroll(function () {
//         if ($(this).scrollTop() > 934.9) {
//           $('.navbar').fadeIn();
//         } else {
//           $('.navbar').fadeOut();
//         }
//       });
//     });
// });
var nav = $("nav");
var navPlaceholder = $("#navPlaceholder");
var navBaseOffset = nav.offset().top;

$(window).on("scroll", function() {

    var scrollTop = $(this).scrollTop();

    if (scrollTop >= navBaseOffset) {
        nav.addClass("fixed");
        navPlaceholder.addClass("active");
    } else {
        nav.removeClass("fixed");
        navPlaceholder.removeClass("active");
    }
});