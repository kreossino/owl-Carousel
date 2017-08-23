if ($.fn.owlCarousel) {

            e('.itemBg').css("display", "none");


            var slider = e(".item");
            slider.on('initialized.owl.carousel', function (x) {
                idx = x.item.index;
                e('.owl-item').eq(idx).addClass('middle');
                e('.owl-item').eq(idx + 1).addClass('next');
                e('.owl-item').eq(idx - 1).addClass('prev');
                imgChange();
            });

            slider.owlCarousel({
                items: 1,
                lazyLoad:true,
                loop: true,
                nav: true,
                autoplayTimeout: 8000,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                autoplay: true,
                smartSpeed: 1000,
                autoplayHoverPause: false,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut'
            });
            var idx;
            slider.on('translated.owl.carousel', function (x) {
                idx = x.item.index;
                e('.owl-item.middle').removeClass('left');
                e('.owl-item').eq(idx).addClass('left');

                e('.owl-item.next').removeClass('next');
                e('.owl-item').eq(idx + 1).addClass('next');

                e('.owl-item.prev').removeClass('prev');
                e('.owl-item').eq(idx - 1).addClass('prev');
                imgChange();
            });

            slider.on('translated.owl.carousel', function () {
                e(this).find('.owl-item.active .slider-home  .slideContent> *').addClass('fadeInUp animated').show();
            });
            slider.on('translate.owl.carousel', function () {
                e(this).find('.owl-item .slider-home .slideContent> *').removeClass('fadeInUp animated').hide();
            });
            imgChange();
       }

       function imgChange() {
           var activeImg = e('.header.initiate .owl-item.middle img.itemBg').attr('src');
           var nextImg = e('.header.initiate .owl-item.next img.itemBg').attr('src');
           var prevImg = e('.header.initiate .owl-item.prev img.itemBg').attr('src');
           var owlPrev = e('.header.initiate .owl-nav div.owl-prev');
           var owlNext = e('.header.initiate .owl-nav div.owl-next');
           var itemBg = e('.header.initiate .item .middle .slider-home');
           var itemPrevBg = e('.header.initiate .item .prev .slider-home');
           var itemNextBg = e('.header.initiate .item .next .slider-home');

           owlNext.css({
               backgroundImage: 'url(' + nextImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'left center'
           });
           owlPrev.css({
               backgroundImage: 'url(' + prevImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'left center'
           });
           itemBg.css({
               backgroundImage: 'url(' + activeImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'center'
           });
           itemPrevBg.css({
               backgroundImage: 'url(' + prevImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'center'
           });
           itemNextBg.css({
               backgroundImage: 'url(' + nextImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'center'
           });

       }