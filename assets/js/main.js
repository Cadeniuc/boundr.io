const $ = jQuery
let windowWidth = $(window).width()
$(window).on('resize', function() {
    windowWidth = $(window).width()
})
gsap.config({ nullTargetWarn: false })
let textSplit, linesSplit
let transitionOffset = 600
let scroll, localhost = (window.location.host === '1rd-legal:8888')

initPageTransitions()

function initLoaderHome() {
    initSplitText()
    const tl = gsap.timeline()

    tl.call(() => scroll.stop(), null, 0);

    tl.set('.item_letter_logo', { transformOrigin: 'bottom', autoAlpha: 0, scale: 0.5 });
    tl.set('.loading-container', { y:5, x: 30, rotate:80, autoAlpha: 0, scale: 0.5 });
    tl.set('.header_top', { yPercent:-100,autoAlpha:1 });
    tl.set('.content_first', { autoAlpha:0 });

    // Анимации логотипа
    tl.to('.item_letter_logo', { scale: 1, duration: 1.3, stagger: 0.1, ease: 'power3.inOut' }, '<');
    tl.to('.item_letter_logo', { autoAlpha: 1, duration: 1.3, stagger: 0.1, ease: 'power3.inOut' }, '<');
    tl.to('.loading-container', { autoAlpha: 1, scale: 1, y:0, x: 0, rotate:0, duration: 1.3, ease: 'power4.inOut' }, '<');
    tl.set('.preloader_backdrop', { autoAlpha:0 });
    tl.set('.page_content', { autoAlpha:1 });

    // Уход логотипа
    tl.set('.item_letter_logo', { transformOrigin: 'center' });
    if(windowWidth >=1024) {
        tl.to('.lett_log_2', { x: '-2.5vw', scale: 0, duration: 0.9, ease: 'power3.inOut' }, '<');
        tl.to('.lett_log_1', { x: '-10vw',  scale: 0, duration: 1.3, ease: 'power3.inOut' }, '<');
        tl.to('.lett_log_3', { x: '16vw',   scale: 0, duration: 1.3, ease: 'power3.inOut' }, '<');
    }else {
        tl.to('.lett_log_2', { x: '-5.5vw', scale: 0, duration: 0.8, ease: 'power3.inOut' }, '<');
        tl.to('.lett_log_1', { x: '-20vw',  scale: 0, duration: 1.2, ease: 'power3.inOut' }, '<');
        tl.to('.lett_log_3', { x: '36vw',   scale: 0, duration: 1.2, ease: 'power3.inOut' }, '<');
    }

    // Анимация взрыва звезды
    tl.call(() => {
        const proxy = { progress: 0 };

        let zoomTarget = 300;
        const w = window.innerWidth;
        if (w >= 3600) {
            zoomTarget = 1000;
        } else if (w >= 2800) {
            zoomTarget = 800;
        } else if (w >= 1800) {
            zoomTarget = 500;
        } else if (w >= 1600) {
            zoomTarget = 400;
        }

        gsap.to(proxy, {
            progress: 1,
            duration: 2.5,
            ease: 'none',
            onUpdate: function () {
                const p = proxy.progress;
                const rotateEaseStart = gsap.parseEase('sine.in')(Math.min(p * 2, 1));
                const rotateEaseEnd = gsap.parseEase('power4.out')(Math.max((p - 0.5) * 2, 0));
                const slowDownFactor = gsap.utils.clamp(0.5, 1, gsap.parseEase('power4.out')((1 - p) * 3));

                let rotation;
                if (p <= 0.5) {
                    rotation = gsap.utils.interpolate(0, 145, rotateEaseStart);
                } else {
                    rotation = gsap.utils.interpolate(90, 300, rotateEaseEnd * slowDownFactor);
                }

                const zoom = gsap.utils.interpolate(1, zoomTarget, gsap.parseEase('power3.inOut')(p));

                gsap.set('.logo_star_part', {
                    rotate: rotation,
                    zoom: zoom,
                    transformOrigin: 'center center'
                });
            }
        });
    }, null, '<');


    tl.from('.image_home', { scale:1.5,rotate:-20, duration: 2, ease: 'power3.inOut' }, '<');
    tl.to('.bg-preloader', { backgroundColor: 'rgba(71, 67, 184, 0)', duration: 1.5, ease: 'power3.inOut' }, '<');

    tl.set('.page_content', { autoAlpha: 1 }, '<');
    tl.to('.content_first', { autoAlpha: 1, duration: 1.3, ease: 'power3.inOut' }, '<+=.4');
    
    tl.call(() => {
        const tl_home = gsap.timeline()
        tl_home.set('.item_inf_home', {autoAlpha:0,y:10})
        tl_home.fromTo('.title_home .line ',{x:30,autoAlpha:0},{delay:.5,x:0,autoAlpha:1,duration:1,stagger:.03,ease:'power4.out'});
        tl_home.fromTo('.title_home .line .char ',{x:30,autoAlpha:0},{x:0,autoAlpha:1,duration:1,stagger:.01,ease:'power4.out'}, '<');
        if(windowWidth >= 1024) {
            tl_home.from('.decor_heading ',{xPercent:160,scale:.3,rotation:180,duration:1.5,ease:'power4.out'}, '<+=.3');
            tl_home.to('.full_line_home', { width: '100%',duration:1.5,ease: 'power4'},'<+=.1');
            tl_home.to('.vertical_l_home', { height: '100%',duration:1.5,ease: 'power4'},'<');
            tl_home.to('.item_inf_home', { autoAlpha:1,y:0,stagger:.2,duration:1.5,ease: 'power4'},'<+=.8')
        }else {
            tl_home.to('.title-underlin-mob', { width: '100%',duration:1.5,ease: 'power4'},'<+=.1');
            tl_home.from('.decor_heading ',{scale:0,rotation:180,duration:1.5,ease:'power4.out'}, '<+=.3');
            tl_home.to('.item_inf_home', { autoAlpha:1,y:0,stagger:.2,duration:1.5,ease: 'power4'},'<+=.4')
        }
        tl_home.to('.header_top', { yPercent: 0, duration: 1, ease: 'power4' }, '<');
    }, null, '<');

    tl.set('html', { cursor: 'auto' });
    tl.set('.loading-container,.logo-preloader', { display: 'none' }, '<');
    tl.call(() => scroll.start(), null, '>');
}

function initLoader() {
    const tl = gsap.timeline()
    tl.set('html', {
        cursor: 'wait'
    }, 0)
    tl.set('.page_content', {autoAlpha:1})

    initSplitText()

    tl.to('.preloader_backdrop', {delay:.4,autoAlpha:0,duration:1})
    tl.call(function() {
        animationOnPageLoad()
    }, null, '<-=.1')

    tl.call(function() {
        scroll.start()
    }, null)
    tl.set('html', {cursor:'auto'}, '<')
}

function pageTransitionIn() {
    const tl = gsap.timeline()

    tl.set('html', {cursor:'wait'})
 
    tl.to('.preloader_backdrop', {autoAlpha:1,duration:.6,ease:'power2'})
    tl.to('.menu-follow svg', {autoAlpha:0,duration:.6}, '<')

    tl.call(function() {
        scroll.stop()
    }, null, 0)
}

function pageTransitionOut() {
    const tl = gsap.timeline()

    tl.set('.page_content', {autoAlpha:1})
    tl.set('.menu-follow svg', {autoAlpha:0,scaleY:0,transformOrigin:'center bottom'})
    gsap.to('.menu-follow svg', {delay:.2,autoAlpha:1,scaleY:1,duration:.6})

    initSplitText()

    tl.to('.preloader_backdrop', {delay:.1,autoAlpha:0,duration:.6})    
    tl.call(function() {
        animationOnPageLoad()
    }, null, '<')

    tl.call(function() {
        scroll.start()
    }, null, '>')
    tl.set('html', {cursor:'auto'})
}

function initPageTransitions()  {

    if(!localhost) {
        history.scrollRestoration = 'manual'
        window.scrollTo(0, 0)
    }

    barba.hooks.enter((e) => {
        if(!localhost) {
            window.scrollTo(0, 0)
        }
        ScrollTrigger.refresh()
    })

    barba.hooks.after(data => {
        initBarbaNavUpdate(data)
    })

    barba.init({
        sync: true,
        debug: true,
        timeout: 7000,
        transitions: [
            {
                name: 'default',
                once(data) {
                    initBarbaNavUpdate(data)
                    initSmoothScroll(data.next.container)
                    initScript()
                    initLoader()
                },
                async leave(data) {
                    pageTransitionIn(data.current)
                    await delay(transitionOffset)
                    scroll.destroy()
                    data.current.container.remove()
                },
                async enter(data) {
                    pageTransitionOut(data.next)
                },
                async beforeEnter(data) {
                    const matches = data.next.html.match(/<body.+?class="([^""]*)"/i)
                    document.body.setAttribute('class', (matches && matches.at(1)) ?? '')

                    var cf_selector = 'div.wpcf7 > form';
                    var cf_forms = jQuery(data.next.container).find(cf_selector);
                    if (cf_forms.length > 0) {
                        jQuery(cf_selector).each(function() {
                            var $form = jQuery(this);
                            wpcf7.init( $form[0] );
                        });
                    }

                    ScrollTrigger.getAll().forEach(t => t.kill())
                    initSmoothScroll(data.next.container)
                    initScript()
                },
            },
            {
                name: 'to-home',
                from: {
                },
                to: {
                    namespace: ['home']
                },
                once(data) {
                    initSmoothScroll(data.next.container)
                    initScript()
                    if(!localhost) {
                        initLoaderHome()
                    }
                }
            }
        ]
    })

    function initSmoothScroll(container) {
        setTimeout(() => {
            if(!localhost) {
                window.scrollTo(0, 0)
            }
        }, 50)

        scroll = new Lenis()
        scroll.on('scroll', ScrollTrigger.update)

        gsap.ticker.add((time)=>{
            scroll.raf(time * 1000)
        })

        gsap.ticker.lagSmoothing(0)

        ScrollTrigger.refresh()
    }
}


function initScript() {
    initOther()
    // initSplitText()
    scrollTriggerAnimations()
}

function animationOnPageLoad() {
    const tl = gsap.timeline()

    if(document.getElementById('page_about')) {
        tl.set('.about_star_decor', {rotation:-180,scale:0})
        tl.set('.image_about_top', {autoAlpha:1,rotation:5,scale:1.3})
        tl.set('.text-city', {autoAlpha:0})
        tl.set('.content_about [data-splitting-all] .char', {x:50,autoAlpha:0})

        tl.to('.image_about_top', {duration:1,rotation:0,duration:2,scale:1,autoAlpha:1,ease:'power4.out'}, '<')
        tl.to('.content_about [data-splitting-all] .char', {x:0,autoAlpha:1,duration:1.4,stagger:.02,ease:'power4.out'}, '<')
        tl.to('.about_star_decor', {rotate:0,scale:1,duration:2,ease:'power4.out'}, '<+=.2')
        tl.to('.text-city', {autoAlpha:1,duration:2,ease:'power4.out'}, '<+=.5')
    }else if(document.getElementById('page_home')) {
        tl.set('.item_inf_home', {autoAlpha:0,y:10}, '<')

        tl.from('.image_home ',{scale:1.3,rotation:5,duration:2,ease:'power4.out'}, '<');
        tl.fromTo('.title_home .line ',{x:30,autoAlpha:0},{delay:.2,x:0,autoAlpha:1,duration:1,stagger:.03,ease:'power4.out'}, '<');
        tl.fromTo('.title_home .line .char ',{x:30,autoAlpha:0},{x:0,autoAlpha:1,duration:1,stagger:.01,ease:'power4.out'}, '<');
        if(windowWidth >= 1024) {
            tl.from('.decor_heading ',{xPercent:160,scale:.3,rotation:180,duration:1.5,ease:'power4.out'}, '<+=.3');
            tl.to('.full_line_home', { width: '100%',duration:1.5,ease: 'power4'},'<+=.1');
            tl.to('.vertical_l_home', { height: '100%',duration:1.5,ease: 'power4'},'<');
            tl.to('.item_inf_home', { autoAlpha:1,y:0,stagger:.2,duration:1.5,ease: 'power4'},'<+=.8')
        }else {
            tl.to('.title-underlin-mob', { width: '100%',duration:1.5,ease: 'power4'},'<+=.1');
            tl.from('.decor_heading ',{scale:0,rotation:180,duration:1.5,ease:'power4.out'}, '<+=.3');
            tl.to('.item_inf_home', { autoAlpha:1,y:0,stagger:.2,duration:1.5,ease: 'power4'},'<+=.4')
        }
    }else {
        tl.set('[data-first-anim-star]', {xPercent:160,scale:.3,rotation:180})
        tl.set('[data-content-opacity]', {autoAlpha:0})
        tl.set('[data-heading-anim-char] .char', {x:50,autoAlpha:0})

        tl.to('[data-heading-anim-char] .char', {x:0,autoAlpha:1,duration:1.4,stagger:$('[data-heading-anim-char] .char').length < 20 ? .03 : 0.01,ease:'power4.out'}, '<')
        tl.to('[data-first-anim-star]', {rotate:0,scale:1,xPercent:0,duration:2,ease:'power4.out'}, '<+=.2')
        tl.to('[data-content-opacity]', {autoAlpha:1,y:0,duration:1.4,stagger:.1,ease:'power4.out'}, '<+=.2')

    }
}

function initSplitText() {
    headingWithText();

    if (textSplit) textSplit.revert();
    if (linesSplit) linesSplit.revert();

    textSplit = new SplitText('[data-splitting-all]', {
        type: 'words,chars,lines',
        linesClass: 'line',
        charsClass: 'char'
    });

    linesSplit = new SplitText('[data-splitting-lines-overflow]', {
        type: 'lines',
        linesClass: 'line'
    });

    $('[data-splitting-lines-overflow] .line').wrap('<div class="wrapper_line">');

    splittingLinesOverflow();
    ScrollTrigger.refresh();
}


function initBarbaNavUpdate(data) {
    const page_url = data.next.url.href
    $('.menu_global a[href="'+ page_url +'"]').addClass('atoll_current')
}

function initOther() {
    const header_top = document.querySelector('.header_top')
    
    buttonsVertical()
    initMenuFollowArrow()
    aboutSliderSticky()
    resizeVhHeight()

    $('.wrapper_heading_top').parent('').addClass('parent_heading_tp')

    document.addEventListener('wpcf7invalid', (event) => {
        const unitTag = event.detail.unitTag;

        if (document.body.classList.contains('page-template-template-contact')) {
            setTimeout(() => {
                scroll.scrollTo('#' + unitTag, { offset: -70 });
            }, 100);
        }
    }, false);

    const header_white = document.getElementById('header_white');
    if (header_white && header_top && typeof scroll !== 'undefined') {
        updateHeader(scroll.scroll);

        scroll.on('scroll', ({ scroll: scrollY }) => {
            updateHeader(scrollY);
        });

        function updateHeader(scrollY) {
            if (scrollY > 10) {
                header_top.classList.remove('header-white');
            } else {
                header_top.classList.add('header-white');
            }
        }
    }

    $('.style_content ul > li').each(function () {
        $(this).append('<span class="decor_list decor_star_global"></span>')
    })

    $('.style_content p img').each(function () {
        $(this).parent('p').addClass('article_image')
    })

    $('#menu_mobile .menu-header li').append('<span class="item_menu_line"></span>')

    $('.menu_burger').on('click', function () {
        $(this).toggleClass('opened')
        if($(this).hasClass('opened')) {
            scroll.stop()
            header_top.classList.remove('header-white');

            const tl = gsap.timeline()
            tl.to('#menu_mobile', {autoAlpha:1,duration:.5,ease:'power4'})
            tl.fromTo('#menu_mobile .menu-header li a, .menu_mob_foot > div', {scale:.95,autoAlpha:0},{scale:1,autoAlpha:1,duration:1,stagger:.05,ease:'power4',overwrite:true}, '<+.1')
            tl.fromTo('.item_menu_line', {width:0,background:"#3A35B3"},{background:"#D7D6E0",width:'100%',duration:1,stagger:.05,ease:'power4',overwrite:true}, '<+.1')
        }else {
            scroll.start()
            setTimeout(() => {
                const scrollY = scroll?.scroll ?? 0;
                if (header_white && header_top && scrollY < 10) {
                    header_top.classList.add('header-white')
                }
            }, 50)

            gsap.to('#menu_mobile', {autoAlpha:0,duration:.5,ease: 'power4'})
        }
    })

    $('[data-open-categories]').on('click', function () {
        $(this).toggleClass('active')
        $('#categories_blog').slideToggle(300)
    })

    function equalizeContentHeights() {
        if(windowWidth >= 1024) {
            const items = $('[data-wrapper-services] .content-area');
            let maxHeight = 0;

            items.css('height', 'auto');

            items.each(function () {
                const thisHeight = $(this).outerHeight();
                if (thisHeight > maxHeight) maxHeight = thisHeight;
            });
            items.css('height', maxHeight + 'px');
        }
    }
    equalizeContentHeights()
    $(window).on('resize', function () {
        setTimeout(equalizeContentHeights, 100);
    });
}

function scrollTriggerAnimations() {

    $('img, video').each(function () {
        const $media = $(this);

        if ($media.is('video')) {
            $media.on('loadedmetadata', function () {
                ScrollTrigger.refresh();
            });
        } else {
            $media.on('load', function () {
                ScrollTrigger.refresh();
            });
        }
    })

    const have_project_content = document.getElementById('have_project_content');
    if (have_project_content) {
        if(windowWidth >= 1024) {
            gsap.set('[data-proj-fullline]', {width:0})
            gsap.set('[data-proj-vertline]', {height:0})
            gsap.set('.item_proj_info', {autoAlpha:0,y:-20})
            gsap.timeline({
                scrollTrigger: {
                    trigger: have_project_content,
                    start: 'top 90%',
                    scrub: false
                }
            })
            .to('[data-proj-fullline]', { width: '100%',duration:1.5,ease: 'power4'})
            .to('[data-proj-vertline]', { height: '100%',duration:1.5,ease: 'power4'},'<+=.3')
            .to('.item_proj_info', { autoAlpha:1,y:0,stagger:.2,duration:1.5,ease: 'power4'},'<+=.3')
        }else {
            gsap.set('.proj-mob-line-1', {width:0})
            gsap.set('.proj-mob-line-2', {height:0})
            gsap.set('.item_col_mbl', {autoAlpha:0,y:-20})
            gsap.timeline({
                scrollTrigger: {
                    trigger: '[data-wrapper-mob-str]',
                    start: 'top 90%',
                    scrub: false
                }
            })
            .to('.proj-mob-line-1', { width: '100%',duration:1.5,ease: 'power4'})
            .to('.proj-mob-line-2', { height: '100%',duration:1.5,ease: 'power4'},'<+=.3')
            .to('.item_col_mbl', { autoAlpha:1,y:0,stagger:.2,duration:1.5,ease: 'power4'},'<+=.3')
        }
    }

    gsap.to('.anim_star_decor', {
        rotate: 360,
        scale:.2,
        ease: 'none',
        scrollTrigger: {
            trigger: 'body',
            start: 'top top',
            end: '+=50%',
            scrub: 1
        }
    });

    gsap.utils.toArray('.decor_star_global').forEach((item, i) => {
        gsap.fromTo(item,
            { rotate: -360 },
            {
                rotate: 0,
                ease: 'none',
                scrollTrigger: {
                    trigger: item,
                    start: 'top bottom',
                    end: '+=200%',
                    scrub: 1
                }
            }
            );
    });


    const about_animation = document.getElementById('about_animation');
    if (about_animation && windowWidth >= 1024) {
        const items = gsap.utils.toArray('.item_about_dec');
        const aboutSectionHeight = $('#about_section').height() * 1.5;

        const rotators = items.map((el, i) => {
            return gsap.quickTo(el, "rotation", {
                duration: .2 + i * 0.15,
                ease: "power3.out"
            });
        });

        ScrollTrigger.create({
            trigger: about_animation,
            start: 'top 100%',
            end: `+=${aboutSectionHeight}`,
            scrub: true,
            onUpdate: self => {
                const rotation = -720 * self.progress;
                rotators.forEach(to => to(rotation));
            }
        });
    }

    const wrapper_projects = document.getElementById('wrapper_projects')
    const projects = document.querySelectorAll('.item__project')
    if(projects.length && windowWidth >= 1024) {
        projects.forEach((item, index) => {
            gsap.set(item, {zIndex:index,ease:'none'})

            if(index === projects.length - 1) return
                gsap.timeline({
                    scrollTrigger: {
                        trigger: item,
                        scrub: true,
                        start: `top top+=${$('.header_top').height() + 40}px`,
                        end: `+=${$(item).height() * 1.5}px`
                    }
                }).to(item, {autoAlpha:0,ease:'none'})
        })
    }


    const services = document.getElementById('services');
    if (services) {
      const wrapper = $(services).find('[data-wrapper-services]');
      const wrapperW = $(wrapper).width();
      const wrapperOffset = $(wrapper).offset();
      const headerHeight = $('.header_top').height();

      const icon_part_1 = [...services.querySelectorAll('.icon_serv_1')];
      const icon_part_2 = [...services.querySelectorAll('.icon_serv_2')];
      const icon_part_3 = [...services.querySelectorAll('.icon_serv_3')];

      const allIcons = [...icon_part_1, ...icon_part_2, ...icon_part_3];

      const rotators = allIcons.map((el, i) => {
          return gsap.quickTo(el, "rotation", {
            duration: 0.2 + i * 0.15,
            ease: "power3.out"
        });
      });

      if(windowWidth >= 1024) {
          gsap.set(services, {height: ($('.item_service').length + 0.5) * $(window).height()});
      }

      ScrollTrigger.create({
          trigger: services,
          start: 'top center',
          end: 'bottom bottom',
          scrub: true,
          onUpdate: self => {
            const rotation = -720 * self.progress;
            rotators.forEach(to => to(rotation));
        }
    });

      if(windowWidth >= 1024) {
          const tl_services = gsap.timeline({
            scrollTrigger: {
              trigger: services,
              start: `top top+=${headerHeight}px`,
              end: 'bottom bottom',
              scrub: true
          }
      }).to('[data-wrapper-services]', { x: -(wrapperW - ($(window).width() - wrapperOffset.left)), ease: 'none' });

          gsap.utils.toArray('.item_service').forEach((item, i) => {
            const imageWrapper = item.querySelector('.service_image');
            const gradient = item.querySelector('.service_gradient');
            const description = item.querySelector('.service_description');
            const iconService = item.querySelectorAll('.icon_service');
            const buttonService = item.querySelector('.button_service');

            gsap.set(item, { yPercent: i * 5 });
            gsap.set(item, { maxHeight: `${Math.max(70, 100 - i * 30)}%` });
            gsap.set([iconService, buttonService], { yPercent: 30, autoAlpha: 0.2 });

            gsap.timeline({
              scrollTrigger: {
                containerAnimation: tl_services,
                trigger: item,
                start: i === 1 ? 'left right-=20%' : 'left right',
                end: 'left 40%',
                scrub: true
            }
        })
            .to(item, { maxHeight: '100%', ease: 'none' })
            .to(item, { yPercent: 0, ease: 'none' }, 0)
            .to(gradient, { autoAlpha: 0, ease: 'none' }, 0)
            .to(description, { autoAlpha: 1, ease: 'none' }, 0)
            .to([iconService, buttonService], { yPercent: 0, autoAlpha: 1, ease: 'none', stagger: 0.2 }, 0);
        });
      }
    }

    if(windowWidth >= 1024) {
        const parallax_wrapper_text_image = document.querySelectorAll('[data-parallax-wrapper-text-image]')
        if(parallax_wrapper_text_image.length) {
            parallax_wrapper_text_image.forEach(wrapper => {
                const img = wrapper.querySelector('[data-parallax-target]')
                if(img) {
                    if (img.complete) {
                        imageResOnScr(img, wrapper)
                    } else {
                        img.addEventListener('load', imgLoaded => {
                            imageResOnScr(img, wrapper)
                        })
                    }
                }
            })
        }

        function imageResOnScr(img, wrapper) {
            gsap.set(img, {transformOrigin:'center center'})
            wrapper.style.height = img.height + 'px'
            gsap.set(img, {height:img.height + 100,y:-100})

            const tlGo = gsap.timeline({
                scrollTrigger: {
                    trigger: wrapper,
                    scrub: true
                }
            })
            tlGo.to(img, {
                y: 0,
                overwrite: true,
                ease: 'none'
            })
            tlGo.scrollTrigger.refresh()
        }
    }

    if(windowWidth >= 1024) {
        gsap.utils.toArray('[data-parallax-wrapper]').forEach(container => {
            if(windowWidth >= 1024) {
                const img = container.querySelector('[data-parallax-target]')

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: container,
                        scrub: true
                    }
                })

                tl.fromTo(img, {
                    yPercent: -10,
                    ease: 'none'
                }, {
                    yPercent: 10,
                    ease: 'none'
                })
            }
        })
    }

    if(windowWidth >= 1024) {
        gsap.utils.toArray('[data-parallax-dynamic]').forEach(container => {
            const img = container.querySelector('[data-parallax-target]')

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    scrub: true
                }
            })

            tl.fromTo(img, {
                top: '-20%',
                ease: 'none'
            }, {
                top: '0%',
                ease: 'none'
            })
        })
    }

    gsap.utils.toArray('[data-slide-down]').forEach(item => {
        const count = item.getAttribute('data-slide-down')
        const delay = item.getAttribute('data-delay')
        gsap.from(item, {
            y:count ? count : 20,
            delay: delay ? delay : 0,
            duration:1.4,
            autoAlpha:0,
            ease: "power3.out",
            scrollTrigger: {
                trigger: item,
                start: 'top 90%',
                scrub: false
            },
        })
    })

    if(windowWidth < 768) {
        gsap.utils.toArray('.wrapper_head_star').forEach(item => {
            const line = item.querySelectorAll('.hdl-line')
            gsap.set(line, {width:0})

            gsap.to(line, {
                width:'100%',
                duration:1.5,
                ease:'power3.inOut',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 95%',
                    scrub: false
                },
            })
        })

        gsap.utils.toArray('.anim-simple-line').forEach(item => {
            gsap.set(item, {width:0})
            gsap.to(item, {
                width:'100%',
                duration:1.5,
                ease:'power3.inOut',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 95%',
                    scrub: false
                },
            })
        })
    }
}

function splittingLinesOverflow() {

    gsap.utils.toArray('[data-anim-splitting-scroll]').forEach(item => {
        const lines = item.querySelectorAll('.line')
        gsap.set(lines, {yPercent:160,rotate:2})
        gsap.to(lines, {
            yPercent:0,
            rotate:0,
            duration:1.5,
            stagger:windowWidth >=1024 ? .06 : .1,
            ease: 'power4',
            scrollTrigger: {
                trigger: item,
                start: 'top 90%',
                scrub: false
            },
        })
    })

    gsap.utils.toArray('[data-anim-chars-line]').forEach(item => {
        const chars = item.querySelectorAll('.char')
        const line = item.querySelectorAll('.line_chars')

        gsap.set(item, {autoAlpha:1})
        gsap.set(chars, {x:10,autoAlpha:0})
        gsap.set(line, {width:0})

        gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: 'top 85%',
                scrub: false
            }
        })
        .to(line, {width:'100%',duration:1,ease:'power4'})
        .to(chars, {x:0,autoAlpha:1,duration:1,stagger:.03,ease:'power4'}, '<+.3')
    })
}

function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
        setTimeout(() => {
            done()
        }, n)
    })
}

function resizeVhHeight() {
    $('.one-height-screen').css('height', $(window).height())
    document.documentElement.style.setProperty('--window-height', $(window).height() + 'px');
    $(window).on('resize', function() {
        // $('.one-height-screen').css('height', $(window).height())
    })
}

function headingWithText() {
    function res_g() {
        $('.wrapper_headl').each(function() {
            const wrapperWThird = $(this).width() / 3
            const heading_indent = $(this).find('.heading_indent');
            const headl_text = $(this).find('.headl_text');
            const indent_wrapper = $(this).find('.indent_wrapper');

            heading_indent.css('width', '');
            indent_wrapper.css('width', 100);

            const indentWidth = heading_indent.width();

            if(windowWidth >= 1024) {
                heading_indent.css('width', indentWidth * (indentWidth > wrapperWThird ? 1 : 2));
                indent_wrapper.css('width', indentWidth * (indentWidth > wrapperWThird ? 1.2 : 2.5));
            }else {
                heading_indent.css('width', indentWidth * (indentWidth > wrapperWThird ? 1 : 1.5));
                indent_wrapper.css('width', indentWidth * (indentWidth > wrapperWThird ? 1 : 1.7));
            }
        });
    }
    res_g()

    $(window).on('resize', function() {
        setTimeout(() => res_g(), 100)
    })
}


function buttonsVertical() {
    const buttons = document.querySelectorAll(".btn-vertical");
    if (!buttons.length) return;
    // if (!buttons.length || windowWidth < 1024) return;

    const DURATION = 0.5;
    const EASE = "power3";

    buttons.forEach(button => {
        const mainBg = button.querySelector(".main-bg");
        const labelIn = button.querySelector(".label-wrap span:first-of-type");
        const labelOut = button.querySelector(".label-wrap span:nth-of-type(2)");
        const arr1 = button.querySelector(".arrow-icon:nth-child(1)");
        const arr2 = button.querySelector(".arrow-icon:nth-child(2)");

        gsap.set(arr1, { xPercent: -150, scale: 0.2, opacity: 0 });
        gsap.set(labelIn, { opacity: 0, y: "100%" });
        gsap.set(mainBg, { scaleY: 0, transformOrigin: "bottom center" });

        button.addEventListener("mouseenter", () => {
          const tl = gsap.timeline();
          tl.to(labelIn, { y: "0%", opacity: 1, duration: DURATION, ease: EASE }, 0)
          .to(labelOut, { y: "-100%", opacity: 0, duration: DURATION, ease: EASE }, 0)
          .to(arr2, { xPercent: 150, scale: 0.2, opacity: 0, duration: DURATION, ease: EASE }, 0)
          .to(arr1, { xPercent: 0, scale: 1, opacity: 1, duration: DURATION, ease: EASE }, 0)
          .to(mainBg, { scaleY: 1, duration: DURATION, ease: EASE }, 0);
      });

        button.addEventListener("mouseleave", () => {
          const tl = gsap.timeline();
          tl.to(labelIn, { y: "100%", opacity: 0, duration: DURATION, ease: EASE }, 0)
          .to(labelOut, { y: "0%", opacity: 1, duration: DURATION, ease: EASE }, 0)
          .to(arr2, { xPercent: 0, scale: 1, opacity: 1, duration: DURATION, ease: EASE }, 0)
          .to(arr1, { xPercent: -150, scale: 0.2, opacity: 0, duration: DURATION, ease: EASE }, 0)
          .to(mainBg, { scaleY: 0, duration: DURATION, ease: EASE }, 0);
      });
    });
}

function initMenuFollowArrow() {
    const menu = document.querySelector(".menu-header");
    const underline = document.querySelector("#menu-follow");
    if (!menu || !underline) return;

    const items = menu.querySelectorAll("li");
    const DURATION = 0.4;
    const EASE = "power3.out";

    function getOffsetX(link) {
        const linkRect = link.getBoundingClientRect();
        const menuRect = menu.getBoundingClientRect();
        const arrowWidth = underline.offsetWidth;
        return linkRect.left - menuRect.left + linkRect.width / 2 - arrowWidth / 2;
    }

    function moveUnderlineTo(link, animate = true) {
        const offsetX = getOffsetX(link);
        const props = { x: offsetX, scaleY: 1, scaleX: 1 };
        if (animate) {
            gsap.to(underline, { ...props, duration: DURATION, ease: EASE });
        } else {
            gsap.set(underline, props);
        }
    }

    function hideUnderline() {
        gsap.to(underline, { scaleY: 0, duration: DURATION, ease: EASE });
    }

    function getActiveLink() {
        return (
            menu.querySelector("li.current-menu-item a") ||
            menu.querySelector("li.current_page_parent1 a")
            );
    }

    function setInitialUnderline() {
        const activeItem = getActiveLink();
        const firstItem = menu.querySelector("li a");

        if (activeItem) {
            requestAnimationFrame(() => moveUnderlineTo(activeItem, false));
        } else if (firstItem) {
            const offsetX = getOffsetX(firstItem);
            gsap.set(underline, { x: offsetX, scaleY: 0, scaleX: 1 });
        } else {
            hideUnderline();
        }
    }

    setInitialUnderline();

    items.forEach((item) => {
        const link = item.querySelector("a");
        if (!link) return;
        item.addEventListener("mouseenter", () => moveUnderlineTo(link));
    });

    menu.addEventListener("mouseleave", () => {
        const activeLink = getActiveLink();
        if (activeLink) {
            moveUnderlineTo(activeLink);
        } else {
            hideUnderline();
        }
    });

    window.addEventListener("resize", () => {
        const activeLink = getActiveLink();
        if (activeLink) {
            moveUnderlineTo(activeLink, false);
        }
    });
}


function aboutSliderSticky() {
    const team_slider = document.getElementById('slider_testimonial')
    let isAnimating = false;
    if(!team_slider) return

        const nextBtn = document.querySelector('#next_testimonial');
    const prevBtn = document.querySelector('#prev_testimonial');

    const swiper = new Swiper(team_slider, {
        speed: windowWidth >= 1024 ? 800 : 600,
        touchRatio: windowWidth >= 1024 ? 0 : 1,
        spaceBetween: 0,
        slidesPerView: 'auto',
        on: {
            slideChangeTransitionStart() {
                if(window.innerWidth >= 1024) {
                    isAnimating = true;
                }
            },
            slideChangeTransitionEnd() {
                isAnimating = false;
                updateNavButtons();
            }
        }
    });

    updateNavButtons();

    function updateNavButtons() {
        if (swiper.isBeginning) {
            prevBtn.classList.add('swiper-button-disabled');
        } else {
            prevBtn.classList.remove('swiper-button-disabled');
        }

        if (swiper.isEnd) {
            nextBtn.classList.add('swiper-button-disabled');
        } else {
            nextBtn.classList.remove('swiper-button-disabled');
        }
    }

    nextBtn.addEventListener('click', (e) => {
        if (isAnimating || swiper.isEnd) {
            e.preventDefault();
            return;
        }
        swiper.slideNext();
    });

    prevBtn.addEventListener('click', (e) => {
        if (isAnimating || swiper.isBeginning) {
            e.preventDefault();
            return;
        }
        swiper.slidePrev();
    });
}