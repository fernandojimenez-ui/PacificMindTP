window.addEventListener('load', function () {
    // Mobile menu toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileToggle = document.getElementById('primary-menu-toggle');

    if (mobileMenu && mobileToggle) {
        mobileToggle.addEventListener('click', function (e) {
            e.preventDefault();
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Scroll-aware transparent header
    const siteHeader = document.getElementById('site-header');
    if (siteHeader) {
        const updateHeader = () => siteHeader.classList.toggle('header-scrolled', window.scrollY > 10);
        updateHeader();
        window.addEventListener('scroll', updateHeader, { passive: true });
    }

    // Scroll animations
    const sections = document.querySelectorAll('section:not(:first-of-type)');
    sections.forEach(section => {
        section.classList.add('pmh-animate');

        // Stagger direct children of grid/flex containers inside the section
        section.querySelectorAll(':scope > * > .grid > *, :scope > * > .flex > *').forEach((child, i) => {
            child.classList.add('pmh-animate-child');
            child.style.transitionDelay = `${i * 0.08}s`;
        });
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Also reveal staggered children
                entry.target.querySelectorAll('.pmh-animate-child').forEach(child => {
                    child.classList.add('is-visible');
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    sections.forEach(section => observer.observe(section));

    // FAQ accordion
    const faqTriggers = document.querySelectorAll('.entry-content a[tabindex="0"], .wp-block-post-content a[tabindex="0"]');

    faqTriggers.forEach(function (trigger) {
        // Collect all sibling nodes until the next trigger
        const answerNodes = [];
        let sibling = trigger.nextSibling;
        while (sibling && !(sibling.nodeName === 'A' && sibling.getAttribute('tabindex') === '0')) {
            answerNodes.push(sibling);
            sibling = sibling.nextSibling;
        }

        // Wrap answer nodes in a div
        const answer = document.createElement('div');
        answer.className = 'faq-answer';
        trigger.parentNode.insertBefore(answer, trigger.nextSibling);
        answerNodes.forEach(function (node) { answer.appendChild(node); });

        // Mark trigger
        trigger.classList.add('faq-trigger');
        trigger.setAttribute('role', 'button');
        trigger.setAttribute('aria-expanded', 'false');

        trigger.addEventListener('click', function () {
            const isOpen = answer.classList.contains('faq-open');
            // Close all
            document.querySelectorAll('.faq-answer.faq-open').forEach(function (el) {
                el.classList.remove('faq-open');
                el.previousElementSibling && el.previousElementSibling.setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) {
                answer.classList.add('faq-open');
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
    });
})
