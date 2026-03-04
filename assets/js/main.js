const $ = jQuery
let windowWidth = $(window).width()
$(window).on('resize', function() {
    windowWidth = $(window).width()
})
gsap.config({ nullTargetWarn: false })
let textSplit, linesSplit
let transitionOffset = 600
let scroll, localhost = (window.location.host === 'boundr.io:8888')

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

        scroll = new Lenis({
            lerp: .2,
            duration: .8
        })
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
    initAccordion()
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

    $('.menu_header a,.go_to_screen').on('click', function (e) {
        e.preventDefault()
        const id = $(this).attr('href')
        scroll.scrollTo(id, {
            offset: -($('.header_top').height() + 50),
            duration: 1.3
        })
    })

    const header_top = document.querySelector('.header_top')
    if (header_top && typeof scroll !== 'undefined') {
        updateHeader(scroll.scroll);

        scroll.on('scroll', ({ scroll: scrollY }) => {
            updateHeader(scrollY);
        });

        function updateHeader(scrollY) {
            if (scrollY > 10) {
                header_top.classList.add('is_scrolled');
            } else {
                header_top.classList.remove('is_scrolled');
            }
        }
    }



    document.addEventListener('wpcf7invalid', (event) => {
        const unitTag = event.detail.unitTag;

        if (document.body.classList.contains('page-template-template-contact')) {
            setTimeout(() => {
                scroll.scrollTo('#' + unitTag, { offset: -70 });
            }, 100);
        }
    }, false);

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
}

function scrollTriggerAnimations() {

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

function initAccordion() {
    const accordion_section = document.querySelector('.accordion_section');
    if (!accordion_section) return

    const groups = gsap.utils.toArray('.js_accordion__group');
    const menus = gsap.utils.toArray('.js_accordion__menu');
    const animations = [];

    groups.forEach(group => createAnimation(group));

    menus.forEach(menu => {
        menu.addEventListener('click', () => toggleAnimation(menu));
    })

    function toggleAnimation(menu) {
        const selectedReversedState = menu.animation.reversed();
        animations.forEach(animation => animation.reverse());

        menu.animation.reversed(!selectedReversedState);
    }

    function createAnimation(element) {
        const menu = element.querySelector('.js_accordion__menu');
        const box = element.querySelector('.js_accordion__content');
        const icon_line = element.querySelector('.js_accordion__icon_line');
        const icon = element.querySelector('.js_accordion__icon');
        const content = element.querySelectorAll('.js_accordion__content p');

        gsap.set(box, {height: 'auto'})

        const tlAccordion = gsap.timeline({
            reversed: true,
            paused: !0,
            onComplete: () => {
                ScrollTrigger.refresh()
            }
        });

        tlAccordion
            .from(box, {
                height: 0,
                duration: .5,
                ease: 'power3.inOut'
            })
            .to(icon, {
                duration: .5,
                rotate: 135,
                ease: 'power3.inOut',
                autoAlpha: 1
            }, '<')

        menu.animation = tlAccordion;
        animations.push(tlAccordion);
    }
}