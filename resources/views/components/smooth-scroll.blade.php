<!-- Lenis Smooth Scrolling & AOS Animation Libraries -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
<style>
    html.lenis, html.lenis body {
        height: auto;
    }
    .lenis.lenis-smooth {
        scroll-behavior: auto !important;
    }
    .lenis.lenis-smooth [data-lenis-prevent] {
        overscroll-behavior: contain;
    }
    .lenis.lenis-stopped {
        overflow: hidden;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Lenis smooth scrolling
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            touchMultiplier: 2,
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Automatically apply AOS animations to sections and cards throughout the entire website
        document.querySelectorAll('section, .max-w-7xl > div > div, .grid > div, .space-y-12 > div, .space-y-16 > div, .space-y-8 > div').forEach((elem, index) => {
            if (!elem.hasAttribute('data-aos')) {
                elem.setAttribute('data-aos', 'fade-up');
                elem.setAttribute('data-aos-duration', '800');
                elem.setAttribute('data-aos-once', 'true');
                elem.setAttribute('data-aos-delay', ((index % 4) * 100).toString());
            }
        });

        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
        });
    });
</script>
