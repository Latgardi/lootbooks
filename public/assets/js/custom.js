jQuery(document).ready(function ($) {
    window.mobileCheck = function() {
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
    };

    $('.offers-container').show('slow')
    "use strict";


    $(function () {
        $("#tabs").tabs();
    });


    // Page loading animation

    $("#preloader").animate({
        'opacity': '0'
    }, 600, function () {
        setTimeout(function () {
            $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });


    $(window).scroll(function () {
        const scroll = $(window).scrollTop();
        const header = $('header').height();

        if (scroll >= header) {
            $(".navbar.fixed-top").addClass("background-header");
            $(".navbar-brand > h2").css('color', 'black')
        } else {
            $(".navbar.fixed-top").removeClass("background-header");
            $(".navbar-brand > h2").css('color', 'azure')
        }
    });
    if ($('.owl-banner').length) {
        $('.owl-banner').owlCarousel({
            loop: false,
            nav: false,
            dots: true,
            items: mobileCheck() ? 1 : 4,
            autoWidth: true,
            margin: 0,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 1,
                    margin: 20
                },
                992: {
                    items: 1,
                    margin: 30
                }
            }
        });
    }

    $(".Modern-Slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        // fade:true,
        draggable: false,
        prevArrow: '<button class="PrevArrow"></button>',
        nextArrow: '<button class="NextArrow"></button>',
    });

    $('.filters ul li').click(function () {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: true,
        masonry: {
            columnWidth: ".all"
        }
    })
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function (j) {
        var dropDown = $(this).closest('li').find('.content');

        $(this).closest('.accordion').find('.content').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    $('.load-more').on('click', function (e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        if (page === undefined) {
            page = 1;
        }
        page = Number(page);
        getData(page);
        $(this).attr('href', `page=${page + 1}`)
    })

    $('.load-more-search').on('click', function (e) {
        e.preventDefault();
        let page = window.location.href
        const offset = $(this).data('offset')
        $.ajax(
            {
                url: page,
                type: "post",
                datatype: "html",
                crossDomain: true,
                data: {
                    offset: offset
                }
            }
        )
            .done(function (data) {
                $(".popular-books").append($(data));
                const offset = $(data).data('offset')
                $(".load-more-search").attr(
                    'data-offset',
                    offset
                )
                litresWidget.init()
                $('.offers-container').show('slow')
                if (offset.length === 0) {
                    $('.load-more-search').fadeOut(500, function(){
                        $(this).remove()
                    });
                }
                //$('#loadingDiv').hide()
            }).fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log(thrownError)
            alert('No response from server');
        });
        $(this).attr('href', page)
    })

    function getData(page) {
        //$('#loadingDiv').show()
        $.ajax({url: '?page=' + page, type: "get", datatype: "html"}).done(function (data) {
            $(".popular-books").append($(data));
            litresWidget.init()
            $('.offers-container').show('slow')
            //$('#loadingDiv').hide()
        }).fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('No response from server');
        });
    }

    const autoCompleteJS = new autoComplete({
        selector: '#input-url',
        data: {
            src: async (query) => {
                try {
                    // Fetch Data from external Source
                    const source = await $.ajax({
                        url: "/api/suggestions",
                        type: "GET",
                        data: {
                            query: $('#input-url').val()
                        }
                    });
                    return source
                } catch (error) {
                    return error;
                }
            }
        },
        resultItem: {
            tag: "li",
            class: "autoComplete_result",
            element: (item, data) => {
                item.setAttribute("data-parent", "food-item");
            },
            highlight: "autoComplete_highlight",
            selected: "autoComplete_selected"
        },
        events: {
            input: {
                selection: (event) => {
                    autoCompleteJS.input.value = event.detail.selection.value;
                }
            }
        }
    });
});

