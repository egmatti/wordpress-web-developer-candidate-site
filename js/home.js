// ==========================================
// HOME PAGE
// ==========================================

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

var floorPlansPostHeight = $(".floor-plans-post").height();
var floorPlansTitleContainerHeight = $(".floor-plans-post__title-container").outerHeight(true);
var floorPlansDetailsContainerHeight = $(".floor-plans-post__details-container").outerHeight();
var floorPlansImageContainerHeight = floorPlansPostHeight - floorPlansTitleContainerHeight - floorPlansDetailsContainerHeight;

$(".floor-plans-post__image-container").css({"height": floorPlansImageContainerHeight});
