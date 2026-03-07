const $ = jQuery
let windowWidth = $(window).width()
$(window).on('resize', function() {
    windowWidth = $(window).width()
})
gsap.config({ nullTargetWarn: false })
CustomEase.create("osmo","0.625, 0.05, 0, 1")
let textSplit, linesSplit
let transitionOffset = 600
let scroll, localhost = (window.location.host === 'boundr.io:8888')

function getHeaderScrollOffsetPx() {
    const header = document.querySelector('.header_top');
    return (header?.offsetHeight || 0) + 50;
}

initPageTransitions()

function initLoader() {
    const tl = gsap.timeline()
    tl.set('html', {
        cursor: 'wait'
    }, 0)
    // initSplitText()
    tl.set('.home_title p', {rotate:6,yPercent:150,filter:'blur(2px)'})


    tl.to('.preloader_backdrop', {delay:.4,autoAlpha:0,duration: 0.5,ease: "power1.inOut"})

    tl.to('.home_title p', {yPercent:0,rotate:0,filter:'blur(0px)',stagger:.1,duration:1.4,ease: "expo.out",}, '<+=.2')
    tl.from('.content_top > div', {autoAlpha:0,y:10,filter:'blur(10px)',stagger:.2,duration:1.4,ease: "expo.out",}, '<+=.4')

	    tl.call(function() {
	        animateSliderTopHome()
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

    barba.init({
        sync: true,
        // debug: true,
        timeout: 7000,
        transitions: [
            {
                name: 'default',
                once(data) {
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
    initAccordionFeature()
}

function animationOnPageLoad() {
    const tl = gsap.timeline()

    // if(document.getElementById('page_about')) {
    //     tl.set('.about_star_decor', {rotation:-180,scale:0})
    //     tl.set('.image_about_top', {autoAlpha:1,rotation:5,scale:1.3})
    //     tl.set('.text-city', {autoAlpha:0})
    //     tl.set('.content_about [data-splitting-all] .char', {x:50,autoAlpha:0})

    //     tl.to('.image_about_top', {duration:1,rotation:0,duration:2,scale:1,autoAlpha:1,ease:'power4.out'}, '<')
    //     tl.to('.content_about [data-splitting-all] .char', {x:0,autoAlpha:1,duration:1.4,stagger:.02,ease:'power4.out'}, '<')
    //     tl.to('.about_star_decor', {rotate:0,scale:1,duration:2,ease:'power4.out'}, '<+=.2')
    //     tl.to('.text-city', {autoAlpha:1,duration:2,ease:'power4.out'}, '<+=.5')
    // }
}

function initSplitText() {
    // headingWithText();

    // if (textSplit) textSplit.revert();
    // if (linesSplit) linesSplit.revert();

    // textSplit = new SplitText('[data-splitting-all]', {
    //     type: 'words,chars,lines',
    //     linesClass: 'line',
    //     charsClass: 'char'
    // });

    // linesSplit = new SplitText('[data-splitting-lines-overflow]', {
    //     type: 'lines',
    //     linesClass: 'line'
    // });

    // $('[data-splitting-lines-overflow] .line').wrap('<div class="wrapper_line">');

    // splittingLinesOverflow();
    // ScrollTrigger.refresh();
}


function initOther() {

    cardsActiveSolution()
    headerMenuActive()
    initRotateButtonsCalc()
    initRotateButtonsAnim()
    initFeaturePhotoswipeSingle();
    initCf7BodySubmittingClass();

    $('.home_title p').wrap('<div class="overflow-hidden"></div>');
    $('.menu_underline a').attr('data-underline-link', '')

    $('.site_menu a,.go_to_screen')
    .off('click.boundrScroll')
    .on('click.boundrScroll', function (e) {
       e.preventDefault()
       const id = $(this).attr('href')
       scroll.scrollTo(id, {
           offset: -getHeaderScrollOffsetPx(),
           duration: 1.3
       })
   })

    const header_top = document.querySelector('.header_top')
    if (header_top && typeof scroll !== 'undefined' && windowWidth >= 1024) {
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

    const wrapper_problem = document.getElementById('wrapper_problem');
    if (wrapper_problem) {
        gsap.set(wrapper_problem, {
            perspective: 1200,
            transformStyle: "preserve-3d"
        });

        const items = gsap.utils.toArray(wrapper_problem.querySelectorAll(".item_problem"));

        items.forEach((item) => {
            item.querySelectorAll('.js-problem-blur').forEach((el) => el.remove());
        });

        gsap.set(items, {
            transformOrigin: "top left",
            transformStyle: "preserve-3d",
            willChange: "transform, filter, opacity"
        });

        const PROBLEM_RAND_VERSION = '2';
        function getRand(item, i) {
            if (item.dataset.problemRand && item.dataset.problemRandV === PROBLEM_RAND_VERSION) {
                try {
                    return JSON.parse(item.dataset.problemRand);
                } catch {

                }
            }
            const r = {
                x: gsap.utils.random(-9.4, 9.4, 0.1),
                y: gsap.utils.random(-18.7, 34.3, 0.1),
                rx: gsap.utils.random(-3.1, 6.2, 0.1),
                ry: gsap.utils.random(-1.9, 1.9, 0.1),
                rz: gsap.utils.random(-8.6, 8.6, 0.1),
                skx: gsap.utils.random(-7.0, 7.0, 0.1),
                sky: gsap.utils.random(-3.1, 3.1, 0.1),
                blur: gsap.utils.random(-2.3, 5.5, 0.1),
                s: gsap.utils.random(-0.046, 0.046, 0.001),
            };
            item.dataset.problemRand = JSON.stringify(r);
            item.dataset.problemRandV = PROBLEM_RAND_VERSION;
            return r;
        }

        items.forEach((item, i) => {
            const t = (i + 1) / Math.max(1, items.length);
            const rand = getRand(item, i);
            const blurPx = Math.max(2, Math.round(t * 28.1 + rand.blur));

            gsap.set(item, {
                transformOrigin: "0% 50%",
                opacity: 1 - t * 0.702,
                scale: 1.031 - t * 0.343 + rand.s,
                x: -t * 15.6 + rand.x,
                y: 50 + t * 134.2 + rand.y,
                z: -(124.8 + t * 405.6),
                rotationX: 20 + t * 21.8 + rand.rx,
                rotationY: -20 - t * 6.2 + rand.ry,
                rotationZ: -t * 24.0 + rand.rz,
                skewX: -t * 35.0 + rand.skx,
                skewY: t * 10 + rand.sky,
                filter: `blur(${blurPx}px)`,
            });
        });

        // if (windowWidth >= 1024) {
            const tl_services = gsap.timeline({
                scrollTrigger: {
                    trigger: wrapper_problem,
                    start: "top bottom",
                    end: "bottom bottom-=15%",
                    scrub: true
                }
            });

            tl_services.to(
                wrapper_problem,
                { rotationX: 2, rotationY: -2, ease: "none" },
                0
                );

            items.forEach((item, i) => {
                const introHold = 0.12;
                tl_services.to(
                    item,
                    {
                        transformOrigin: "0% 50%",
                        opacity: 1,
                        scale: 1,
                        x: 0,
                        y: 0,
                        z: 0,
                        rotationX: 0,
                        rotationY: 0,
                        rotationZ: 0,
                        skewX: 0,
                        skewY: 0,
                        filter: "blur(0px)",
                        duration: 1,
                        ease: "none"
                    },
                    introHold + i * 0.22
                    );
            });
        // }
    }
	
        gsap.to('.anim_star_decor', {
            rotate: 500,
            ease: 'none',
            scrollTrigger: {
                trigger: '.anim_star_decor',
                start: 'top bottom+=5%',
                end: '+=300%',
                scrub: 1
            }
        });

    gsap.utils.toArray('.group_line_item').forEach(item => {

        const line = item.querySelector('.line_item_group')

        gsap.fromTo(line,
          { width: "0%" },
          {
            width: "100%",
            duration: 1,
            ease: "osmo",
            scrollTrigger: {
              trigger: item,
              start: "bottom bottom",
          }
      }
      )

    })

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

function initFeaturePhotoswipeSingle() {
  const root = document.querySelector('#gallery--zoom-transition');
  if (!root) return;
  if (root.dataset.pswpBound === '1') return;
  root.dataset.pswpBound = '1';

  const lightbox = new PhotoSwipeLightbox({
    pswpModule: PhotoSwipe,
    history: false,
    showHideAnimationType: 'zoom',
    paddingFn: (viewportSize) => {
      const padY = viewportSize.x < 768 ? 16 : 24;
      const padX = viewportSize.x < 768 ? 12 : 24;
      return { top: padY, bottom: padY, left: padX, right: padX };
    }
  });

  lightbox.addFilter('thumbEl', (thumbnail, itemData) => {
    return itemData?.thumbEl || thumbnail;
  });
  lightbox.addFilter('placeholderSrc', (placeholderSrc, content) => {
    return content?.data?.msrc || placeholderSrc;
  });

  lightbox.on('openingAnimationStart', () => {
    scroll.stop();
  });
  lightbox.on('closingAnimationStart', () => {
    scroll.start();
  });

  lightbox.init();

  root.addEventListener(
    'click',
    (ev) => {
      const a = ev.target.closest('a[href]');
      if (!a) return;

      const img = a.querySelector('img');
      if (!img) return;

      ev.preventDefault();

      const w = img.naturalWidth || img.width || 1600;
      const h = img.naturalHeight || img.height || 900;

      const items = [
        {
          src: a.href,
          width: w,
          height: h,
          msrc: img.currentSrc || img.src,
          thumbEl: img,
        },
      ];

      lightbox.loadAndOpen(0, items, { x: ev.clientX, y: ev.clientY });
    },
    true
  );
}

function initRotateButtonsCalc() {
    const buttons = document.querySelectorAll("[data-button-rotate]");

    function calculate(button) {
        const labels = button.querySelectorAll(".button_label");
        if (!labels.length) return;

        const maxLength = Math.max(
            ...[...labels].map(l => (l.textContent || "").trim().length || 0)
            );

        let value = Math.round(100 + 30 * (12 + 6 * maxLength));

        if (button.dataset.size === "full") {
            value *= 3;
        }

        value = Math.max(100, Math.min(value, 10000));
        button.style.setProperty("--y", value + "%");
    }

    buttons.forEach(button => {
        calculate(button);

        const observer = new MutationObserver(() => calculate(button));
        button.querySelectorAll(".button_label").forEach(label => {
            observer.observe(label, {
                characterData: true,
                subtree: true,
                childList: true
            });
        });
    });

    window.addEventListener("resize", () => {
        buttons.forEach(calculate);
    });
}

function initRotateButtonsAnim() {
    const triggers = document.querySelectorAll("[data-button-rotate-hover]");

    triggers.forEach(trigger => {
        const button = trigger.closest("[data-button-rotate]") || trigger;
        let lastTime = 0;
        let tween = null;
        let isHovering = false;
        let pending = false;

        function canAnimate() {
            const now = performance.now();
            if (now - lastTime < 100) return false;
            lastTime = now;
            return true;
        }

        function getElements() {
            return button.querySelectorAll(".button_label");
        }

        function cleanup(elements) {
            gsap.set(elements, { clearProps: "rotation" });
            tween = null;
        }

        function startRotate() {
            const elements = getElements();
            if (!elements.length) return;

            const rotationValue =
            parseFloat(getComputedStyle(button).getPropertyValue("--r")) || 120;

            gsap.killTweensOf(elements);
            tween = gsap.to(elements, {
                rotation: "+=" + rotationValue,
                duration: 0.5,
                ease: "osmo",
                stagger: 0.075,
                overwrite: "auto",
                onComplete: () => {
                    cleanup(elements);
                    if (pending && isHovering) {
                        pending = false;
                        startRotate();
                    } else {
                        pending = false;
                    }
                },
                onInterrupt: () => {
                    cleanup(elements);
                    pending = false;
                },
            });
        }

        function onEnter() {
            isHovering = true;
            if (!canAnimate()) return;

            if (tween && tween.isActive()) {
                pending = true;
                return;
            }

            startRotate();
        }

        function onLeave() {
            isHovering = false;
            pending = false;
        }

        trigger.addEventListener("pointerenter", onEnter);
        trigger.addEventListener("pointerleave", onLeave);
    });
}

function headerMenuActive() {
    const wrapper = document.querySelector('.wrap_menu_head');
    if (!wrapper) return;

    const follow = wrapper.querySelector('.follow_menu_active');
    const menu = wrapper.querySelector('.menu_header');
    if (!follow || !menu) return;

    const links = gsap.utils.toArray(menu.querySelectorAll('a'));
    if (!links.length) return;

	    if (!wrapper.__followMenuState) {
	        wrapper.__followMenuState = {
	            isHovering: false,
	            hoverLink: null,
	            currentLink: null,
	            scrollInstance: null,
	            scrollHandler: null,
	            resizeHandler: null,
	            resizeObserver: null,
	            mutationObserver: null,
	            pendingSyncRaf: 0,
	            hashHandler: null,
	            linksBound: false,
	            didInitStyles: false,
	        };
	    }

    const state = wrapper.__followMenuState;

    const topThreshold = 10;

	    gsap.set(follow, {
	        willChange: 'transform,width,height,top',
	        transformOrigin: 'center center',
	        top: 0,
	        bottom: 'auto',
	    });
	
	    if (!state.didInitStyles) {
	        state.didInitStyles = true;
	        gsap.set(follow, {
	            autoAlpha: 0,
	            width: 0,
	            height: 0,
	            scaleY: 0,
	        });
	    }
	
	    function isFollowHidden() {
	        return (
	            (gsap.getProperty(follow, 'autoAlpha') || 0) < 0.01 ||
	            (gsap.getProperty(follow, 'scaleY') || 0) < 0.01
	        );
	    }

	    function hideFollow(immediate = false) {
	        gsap.killTweensOf(follow, 'autoAlpha,scaleY');
	        if (immediate) {
	            gsap.set(follow, { autoAlpha: 0, scaleY: 0 });
	            return;
	        }
	        gsap.to(follow, {
	            autoAlpha: 0,
	            scaleY: 0,
	            duration: 0.2,
	            ease: 'power2.out',
	            overwrite: 'auto',
	        });
	    }

	    function showFollow(immediate = false) {
	        gsap.killTweensOf(follow, 'autoAlpha,scaleY');
	        if (immediate) {
	            gsap.set(follow, { autoAlpha: 1, scaleY: 1 });
	            return;
	        }
	        if (isFollowHidden()) {
	            gsap.fromTo(
	                follow,
	                { autoAlpha: 0, scaleY: 0.2 },
	                {
	                    autoAlpha: 1,
	                    scaleY: 1,
	                    duration: 0.24,
	                    ease: 'power3.out',
	                    overwrite: 'auto',
	                }
	            );
	            return;
	        }

	        const currentScaleY = parseFloat(gsap.getProperty(follow, 'scaleY')) || 1;
	        if (currentScaleY < 0.999) {
	            gsap.to(follow, {
	                autoAlpha: 1,
	                scaleY: 1,
	                duration: 0.22,
	                ease: 'power3.out',
	                overwrite: 'auto',
	            });
	            return;
	        }

	        gsap.to(follow, {
	            autoAlpha: 1,
	            duration: 0.18,
	            ease: 'power2.out',
	            overwrite: 'auto',
	        });
	    }

	    function moveFollowTo(link, immediate = false) {
	        if (!link) return;
	        const linkRect = link.getBoundingClientRect();
	        const wrapRect = wrapper.getBoundingClientRect();

	        const x = linkRect.left - wrapRect.left;
	        const top = linkRect.top - wrapRect.top;
	        const w = linkRect.width;
	        const h = linkRect.height;

	        if (immediate) {
	            gsap.killTweensOf(follow);
	            if (isFollowHidden()) {
	                gsap.fromTo(
	                    follow,
	                    { autoAlpha: 0, scaleY: 0.6, x, top, width: 0, height: 0 },
	                    {
	                        autoAlpha: 1,
	                        scaleY: 1,
	                        x,
	                        top,
	                        width: w,
	                        height: h,
	                        duration: 0.28,
	                        ease: 'power3.out',
	                        overwrite: 'auto',
	                    }
	                );
	                return;
	            }
	            gsap.set(follow, { x, top, width: w, height: h });
	            showFollow(true);
	            return;
	        }
	
	        if (isFollowHidden()) {
	            gsap.killTweensOf(follow);
	            gsap.fromTo(
	                follow,
	                { autoAlpha: 0, scaleY: 0.6, x, top, width: 0, height: 0 },
	                {
	                    autoAlpha: 1,
	                    scaleY: 1,
	                    x,
	                    top,
	                    width: w,
	                    height: h,
	                    duration: 0.32,
	                    ease: 'power3.out',
	                    overwrite: 'auto',
	                }
	            );
	            return;
	        }
	
	        showFollow(false);

	        gsap.to(follow, {
	            x,
	            top,
	            width: w,
	            height: h,
	            duration: 0.35,
	            ease: 'power3.out',
	            overwrite: 'auto',
	        });
	    }

	    function scheduleSyncFollow() {
	        if (state.pendingSyncRaf) return;
	        state.pendingSyncRaf = requestAnimationFrame(() => {
	            state.pendingSyncRaf = 0;
	            const targetLink = state.hoverLink || state.currentLink;
	            if (targetLink) {
	                moveFollowTo(targetLink, false);
	                return;
	            }
	            if (!state.isHovering) hideFollow(true);
	        });
	    }

    function setActiveLink(link, { immediateFollow = false } = {}) {
        if (state.currentLink === link) return;
        state.currentLink = link;

        links.forEach((a) => {
            const isActive = link && a === link;
            a.classList.toggle('is-active', isActive);
            if (isActive) a.setAttribute('aria-current', 'true');
            else a.removeAttribute('aria-current');
        });

        if (!link) {
            if (!state.isHovering) hideFollow(immediateFollow);
            return;
        }

        if (!state.isHovering) moveFollowTo(link, immediateFollow);
    }

    function buildSections() {
        return links
            .map((a) => {
                const href = a.getAttribute('href') || '';
                if (!href.startsWith('#')) return null;
                const section = document.querySelector(href);
                if (!section) return null;
                return { link: a, section };
            })
            .filter(Boolean);
    }

    let sections = buildSections();

	    function recomputeSections() {
	        sections = buildSections();
	    }

	    function updateActiveFromScroll(scrollY, { immediateFollow = false } = {}) {
	        // Use real scroll position for DOM measurements. Lenis' reported value can be slightly ahead/behind.
	        scrollY = window.scrollY;
	        if (!sections.length) return;
	        if (scrollY <= topThreshold) {
	            setActiveLink(null, { immediateFollow });
	            return;
	        }

	        const headerOffset = getHeaderScrollOffsetPx();
	        const probe = scrollY + headerOffset;
	        const epsilon = 2;

	        let active = null;
	        let bestTop = -Infinity;
	        for (const item of sections) {
	            const top = item.section.getBoundingClientRect().top + scrollY;
	            if (top <= probe + epsilon && top > bestTop) {
	                bestTop = top;
	                active = item.link;
	            }
	        }

	        setActiveLink(active, { immediateFollow });
	    }

    function bindToLenisScroll() {
        if (!scroll || typeof scroll.on !== 'function') return;
        if (state.scrollInstance === scroll && state.scrollHandler) return;

        if (state.scrollInstance && typeof state.scrollInstance.off === 'function' && state.scrollHandler) {
            state.scrollInstance.off('scroll', state.scrollHandler);
        }

	        state.scrollInstance = scroll;
	        state.scrollHandler = ({ scroll: scrollY }) => updateActiveFromScroll(scrollY, { immediateFollow: false });
	        scroll.on('scroll', state.scrollHandler);

	        updateActiveFromScroll(scroll.scroll || window.scrollY, { immediateFollow: true });
	    }

    if (!state.linksBound) {
        state.linksBound = true;

        wrapper.addEventListener('pointerenter', () => {
            state.isHovering = true;
        });
        wrapper.addEventListener('pointerleave', () => {
            state.isHovering = false;
            state.hoverLink = null;
            const scrollY = scroll?.scroll ?? window.scrollY;
            if (scrollY <= topThreshold) {
                hideFollow(false);
                return;
            }
            if (state.currentLink) moveFollowTo(state.currentLink, false);
        });

        links.forEach((link) => {
            link.addEventListener('pointerenter', () => {
                state.hoverLink = link;
                moveFollowTo(link, false);
            });
            link.addEventListener('pointerleave', () => {
                if (state.hoverLink === link) state.hoverLink = null;
            });
            link.addEventListener('focus', () => {
                state.hoverLink = link;
                moveFollowTo(link, false);
            });

            link.addEventListener('click', () => {
                setActiveLink(link, { immediateFollow: false });
            });
        });

        state.hashHandler = () => {
            if (window.location.hash === '#top' || window.location.hash === '') {
                setActiveLink(null, { immediateFollow: true });
                return;
            }
            const next = links.find((a) => a.getAttribute('href') === window.location.hash);
            if (next) setActiveLink(next, { immediateFollow: false });
        };
        window.addEventListener('hashchange', state.hashHandler);

	        state.resizeHandler = () => {
	            recomputeSections();
	            scheduleSyncFollow();
	            updateActiveFromScroll(scroll?.scroll ?? window.scrollY, { immediateFollow: true });
	        };
	        window.addEventListener('resize', state.resizeHandler);

	        if ('ResizeObserver' in window && !state.resizeObserver) {
	            state.resizeObserver = new ResizeObserver(() => {
	                scheduleSyncFollow();
	            });
	            state.resizeObserver.observe(wrapper);
	            state.resizeObserver.observe(menu);
	        }

	        const headerTop = document.querySelector('.header_top');
	        if ('MutationObserver' in window && headerTop && !state.mutationObserver) {
	            state.mutationObserver = new MutationObserver(() => {
	                scheduleSyncFollow();
	            });
	            state.mutationObserver.observe(headerTop, { attributes: true, attributeFilter: ['class'] });
	        }
	    }

	    // initial active
	    const initialScrollY = window.scrollY;
	    if (window.location.hash === '#top' || window.location.hash === '' || initialScrollY <= topThreshold) {
	        setActiveLink(null, { immediateFollow: true });
	        hideFollow(true);
	    } else {
	        const initial = links.find((a) => a.getAttribute('href') === window.location.hash);
	        if (initial) {
	            setActiveLink(initial, { immediateFollow: true });
	            moveFollowTo(state.currentLink, true);
	        } else {
	            updateActiveFromScroll(initialScrollY, { immediateFollow: true });
	            if (!state.currentLink) hideFollow(true);
	        }
	    }

    bindToLenisScroll();
}

function cardsActiveSolution() {
    const items = gsap.utils.toArray(document.querySelectorAll('.item_solution'));
    if (!items.length) return;

    if (window.matchMedia && !window.matchMedia('(hover: hover)').matches) return;

    function sideFromPoint(clientX, clientY, rect) {
        if (clientY < rect.top) return 'top';
        if (clientY > rect.bottom) return 'bottom';
        if (clientX < rect.left) return 'left';
        if (clientX > rect.right) return 'right';

        const x = clientX - rect.left;
        const y = clientY - rect.top;
        const top = y;
        const bottom = rect.height - y;
        const left = x;
        const right = rect.width - x;

        const min = Math.min(top, bottom, left, right);
        if (min === top) return 'top';
        if (min === right) return 'right';
        if (min === bottom) return 'bottom';
        return 'left';
    }

    function collapsedBox(side, rect) {
        switch (side) {
            case 'right':
                return { x: rect.width, y: 0, width: 0, height: rect.height };
            case 'bottom':
                return { x: 0, y: rect.height, width: rect.width, height: 0 };
            case 'left':
                return { x: 0, y: 0, width: 0, height: rect.height };
            case 'top':
            default:
                return { x: 0, y: 0, width: rect.width, height: 0 };
        }
    }

    items.forEach((item) => {
        const follow = item.querySelector('.follow_active_cars');
        if (!follow) return;

        if (item.dataset.solutionFollowBound === '1') return;
        item.dataset.solutionFollowBound = '1';

        // Ensure the negative z-index stays behind the card content (stacking context).
        gsap.set(item, { position: 'relative', zIndex: 0, overflow: 'hidden' });

        gsap.set(follow, {
            pointerEvents: 'none',
            position: 'absolute',
            top: 0,
            left: 0,
            width: 0,
            height: 0,
            x: 0,
            y: 0,
            willChange: 'transform,width,height',
        });

        function enterFrom(side) {
            const rect = item.getBoundingClientRect();
            const from = collapsedBox(side, rect);
            const to = { x: 0, y: 0, width: rect.width, height: rect.height };
            gsap.killTweensOf(follow);
            gsap.set(follow, from);
            gsap.to(follow, {
                ...to,
                duration: 0.45,
                ease: 'osmo',
                overwrite: 'auto',
            });
        }

        function leaveTo(side) {
            const rect = item.getBoundingClientRect();
            const to = collapsedBox(side, rect);
            gsap.killTweensOf(follow);
            gsap.to(follow, {
                duration: 0.32,
                ease: 'osmo',
                overwrite: 'auto',
                ...to,
            });
        }

        item.addEventListener('pointerenter', (ev) => {
            const rect = item.getBoundingClientRect();
            const side = sideFromPoint(ev.clientX, ev.clientY, rect);
            enterFrom(side);
        });

        item.addEventListener('pointerleave', (ev) => {
            const rect = item.getBoundingClientRect();
            const side = sideFromPoint(ev.clientX, ev.clientY, rect);
            leaveTo(side);
        });

        item.addEventListener('focusin', () => enterFrom('bottom'));
        item.addEventListener('focusout', () => leaveTo('bottom'));
    });
}

function initAccordion() {
  const sections = gsap.utils.toArray('.accordion_section');
  if (!sections.length) return;

  sections.forEach((section) => {
    const groups = gsap.utils.toArray(section.querySelectorAll('.js_accordion__group'));
    const menus  = gsap.utils.toArray(section.querySelectorAll('.js_accordion__menu'));
    const animations = [];

    groups.forEach((group) => createAnimation(group));

    menus.forEach((menu) => {
      menu.addEventListener('click', () => toggleAnimation(menu));
    });

    function toggleAnimation(menu) {
        const selectedReversedState = menu.animation.reversed();
        const currentGroup = menu.closest('.js_accordion__group');

        animations.forEach((anim) => anim.reverse());
        groups.forEach((group) => group.classList.remove('active'));

        if (selectedReversedState) {
            menu.animation.play();
            currentGroup.classList.add('active');
        } else {
            menu.animation.reverse();
            currentGroup.classList.remove('active');
        }
    }

    function createAnimation(groupEl) {
      const menu = groupEl.querySelector('.js_accordion__menu');
      const box  = groupEl.querySelector('.js_accordion__content');
      const icon = groupEl.querySelector('.js_accordion__icon');

      if (!menu || !box) return;

      gsap.set(box, { height: 'auto' });

      const tlAccordion = gsap.timeline({
        reversed: true,
        paused: true,
        onComplete: () => ScrollTrigger.refresh(),
      });

      tlAccordion
        .from(box, {
          height: 0,
          duration: 0.5,
          ease: 'power3.inOut',
        })
        .to(
          icon,
          {
            duration: 0.5,
            rotate: 135,
            ease: 'power3.inOut',
            autoAlpha: 1,
          },
          '<'
        );

      menu.animation = tlAccordion;
      animations.push(tlAccordion);
    }
  });
}

function initAccordionFeature() {
  const section = document.querySelector('.accordion_feature');
  if (!section) return;

  const groups = gsap.utils.toArray(section.querySelectorAll('.js_accordion__group'));
  const menus = gsap.utils.toArray(section.querySelectorAll('.js_accordion__menu'));
  const images = gsap.utils.toArray(document.querySelectorAll('.item_img_feature'));
  const animations = [];

  groups.forEach(group => createAccordionAnimation(group));

  menus.forEach(menu => {
    menu.addEventListener('click', () => toggle(menu));
  });

  if (menus[0]?.animation) {
    animations.forEach(a => a.progress(0).pause().reversed(true));
    menus.forEach(m => m.closest('.js_accordion__group')?.classList.remove('active'));
    menus[0].animation.progress(1).pause().reversed(false);
    menus[0].closest('.js_accordion__group')?.classList.add('active');

    showImageByMenu(menus[0], true);
    ScrollTrigger.refresh();
  }

  function toggle(menu) {
    const wasClosed = menu.animation.reversed();

    animations.forEach(a => a.reverse());
    menus.forEach(m => m.closest('.js_accordion__group')?.classList.remove('active'));

    menu.animation.reversed(!wasClosed);

    if (wasClosed) {
      menu.closest('.js_accordion__group')?.classList.add('active');
      showImageByMenu(menu, false);
    }
  }

  function showImageByMenu(menu, immediate = false) {
    let id = menu.dataset.id;
    if (!id) id = String(menus.indexOf(menu) + 1);

    const delay = immediate ? 0 : 0.12;
    const showDuration = immediate ? 0 : 0.95;
    const hideDuration = immediate ? 0 : 0.22;

    const activeImg = images.find(img => img.dataset.id === id);
    const inactiveImgs = images.filter(img => img.dataset.id !== id);

    gsap.killTweensOf(images);

    inactiveImgs.forEach(img => {
      gsap.set(img, { zIndex: 1 });
      gsap.to(img, {
        autoAlpha: 0,
        scale: 0.985,
        duration: hideDuration,
        ease: 'power2.in',
        overwrite: true
      });
    });

    if (!activeImg) return;

    gsap.set(activeImg, { zIndex: 2 });

    if (immediate) {
      gsap.set(activeImg, { autoAlpha: 1, scale: 1, filter: 'blur(0px)' });
      return;
    }

    gsap.fromTo(
      activeImg,
      { autoAlpha: 0, scale: 1.06, filter: 'blur(14px)' },
      {
        autoAlpha: 1,
        scale: 1,
        filter: 'blur(0px)',
        duration: showDuration,
        delay,
        ease: 'power3.out',
        overwrite: true
      }
    );
  }

  function createAccordionAnimation(group) {
    const menu = group.querySelector('.js_accordion__menu');
    const box = group.querySelector('.js_accordion__content');
    if (!menu || !box) return;

    gsap.set(box, { height: 'auto' });

    const tl = gsap.timeline({
      reversed: true,
      paused: true,
      onComplete: () => ScrollTrigger.refresh()
    });

    tl.from(box, { height: 0, duration: 0.5, ease: 'power3.inOut' });

    menu.animation = tl;
    animations.push(tl);
  }
}

function initCf7BodySubmittingClass() {
    if (document.body?.dataset?.cf7SubmittingBound === '1') return;
    if (document.body?.dataset) document.body.dataset.cf7SubmittingBound = '1';

    let safetyTimer = 0;
    let removeTimer = 0;
    const add = () => {
        window.clearTimeout(safetyTimer);
        window.clearTimeout(removeTimer);
        document.body.classList.add('form_submitting');
        safetyTimer = window.setTimeout(() => {
            document.body.classList.remove('form_submitting');
        }, 30000);
    };
    const remove = () => {
        window.clearTimeout(safetyTimer);
        window.clearTimeout(removeTimer);
        removeTimer = window.setTimeout(() => {
            document.body.classList.remove('form_submitting');
        }, 200);
    };

    document.addEventListener('wpcf7beforesubmit', add, true);
    document.addEventListener('wpcf7submit', remove, true);
    document.addEventListener('wpcf7mailsent', remove, true);
    document.addEventListener('wpcf7invalid', remove, true);
    document.addEventListener('wpcf7mailfailed', remove, true);
    document.addEventListener('wpcf7spam', remove, true);
    document.addEventListener('wpcf7statuschanged', (ev) => {
        const status = ev?.detail?.status;
        if (!status) return;
        if (status === 'submitting') add();
        else remove();
    }, true);

    document.addEventListener(
        'submit',
        (ev) => {
            const form = ev.target;
            if (form && form.closest && form.closest('.wpcf7')) add();
        },
        true
    );
}

function animateSliderTopHome() {
    const root = document.getElementById('slider_emails');
    if (!root) return;

    const slides = gsap.utils.toArray(root.querySelectorAll('.item_email_anim'));
    if (slides.length < 2) return;

    if (root.__emailTl) {
        root.__emailTl.kill();
        root.__emailTl = null;
    }

    gsap.set(root, { perspective: 500 });

    const inDur = 0.95;
    const hold = 2.5;
    const outDur = 0.7;
    const yFrom = 120;
    const yTo = -120;

    const fromState = {
        autoAlpha: 0,
        y: yFrom,
        scale: 0.985,
        rotateY: 40,
        skewY: 18,
        filter: 'blur(10px)',
    };

    const activeState = {
        autoAlpha: 1,
        y: 0,
        scale: 1,
        rotateY: 0,
        skewY: 0,
        filter: 'blur(0px)',
    };

    slides.forEach((slide) => {
        gsap.set(slide, {
            zIndex: 1,
            ...fromState,
            transformOrigin: 'top left',
            transformStyle: 'preserve-3d',
            force3D: true,
            willChange: 'transform, opacity, filter',
        });
    });

    const tl = gsap.timeline({ repeat: -1 });

    gsap.set(slides[0], { ...activeState, zIndex: 3 });

    slides.forEach((current, i) => {
        const next = slides[(i + 1) % slides.length];
        const swapDur = Math.max(inDur, outDur);
        const extraDelay = (i === slides.length - 1) ? 2.5 : 0;

        tl.to({}, { duration: hold + extraDelay });
        
        const start = tl.duration();
        tl.set(next, { ...fromState, zIndex: 4 }, start);

        tl.to(
            current,
            {
                autoAlpha: 0,
                y: yTo,
                scale: 0.985,
                rotateY: 40,
                skewY: 18,
                filter: 'blur(10px)',
                duration: outDur,
                ease: 'power2.inOut',
                overwrite: 'auto',
            },
            start
            );

        tl.to(
            next,
            {
                ...activeState,
                duration: inDur,
                ease: 'osmo',
                overwrite: 'auto',
            },
            start
            );

        tl.set(current, { ...fromState, zIndex: 1 }, start + swapDur);
        tl.set(next, { zIndex: 3 }, start + swapDur);
    });

    root.__emailTl = tl;
}
