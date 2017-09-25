jQuery(document).ready(function($) {

// SMOOTHING SCROLL ON ARROW CLICK

function scrollToAnchor(menuname){
    var link = $("[name='"+ menuname +"']");
    $('html,body').animate({scrollTop: link.offset().top},'slow');
}

$(".hero-section .arrows-container").click(function() {
   scrollToAnchor('floor-plans-section');
});

$("footer .arrows-container").click(function() {
   scrollToAnchor('hero-section');
});


// FLOOR PLANS SLIDER

$(".floor-plans-slider--desktop").slick({
 arrows: true,
 dots: true,
 infinite: true,
 slidesToScroll: 1,
 slidesToShow: 4,
 vertical: false
});

$(".floor-plans-slider--tablet").slick({
 arrows: true,
 dots: true,
 infinite: true,
 slidesToScroll: 1,
 slidesToShow: 2,
 vertical: false
});

$(".floor-plans-slider--mobile").slick({
 arrows: true,
 dots: true,
 infinite: true,
 slidesToScroll: 1,
 slidesToShow: 1,
 vertical: false
});


// FLOOR PLANS IMAGE CONTAINER HEIGHT

var floorPlansPostHeightDesktop = $(".floor-plans-slider--desktop .floor-plans-post").height();
var floorPlansTitleContainerHeightDesktop = $(".floor-plans-slider--desktop .floor-plans-post__title-container").outerHeight(true);
var floorPlansDetailsContainerHeightDesktop = $(".floor-plans-slider--desktop .floor-plans-post__details-container").outerHeight();
var floorPlansImageContainerHeightDesktop = floorPlansPostHeightDesktop - floorPlansTitleContainerHeightDesktop - floorPlansDetailsContainerHeightDesktop;

$(".floor-plans-slider--desktop .floor-plans-post__image-container").css({"height": floorPlansImageContainerHeightDesktop});


var floorPlansPostHeightTablet = $(".floor-plans-slider--tablet .floor-plans-post").height();
var floorPlansTitleContainerHeightTablet = $(".floor-plans-slider--tablet .floor-plans-post__title-container").outerHeight(true);
var floorPlansDetailsContainerHeightTablet = $(".floor-plans-slider--tablet .floor-plans-post__details-container").outerHeight();
var floorPlansImageContainerHeightTablet = floorPlansPostHeightTablet - floorPlansTitleContainerHeightTablet - floorPlansDetailsContainerHeightTablet;

$(".floor-plans-slider--tablet .floor-plans-post__image-container").css({"height": floorPlansImageContainerHeightTablet});


var floorPlansPostHeightMobile = $(".floor-plans-slider--mobile .floor-plans-post").height();
var floorPlansTitleContainerHeightMobile = $(".floor-plans-slider--mobile .floor-plans-post__title-container").outerHeight(true);
var floorPlansDetailsContainerHeightMobile = $(".floor-plans-slider--mobile .floor-plans-post__details-container").outerHeight();
var floorPlansImageContainerHeightMobile = floorPlansPostHeightMobile - floorPlansTitleContainerHeightMobile - floorPlansDetailsContainerHeightMobile;

$(".floor-plans-slider--mobile .floor-plans-post__image-container").css({"height": floorPlansImageContainerHeightMobile});

});
