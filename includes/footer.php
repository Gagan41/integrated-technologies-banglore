    </main>
    <!-- MAIN CONTENT END -->

    <!-- FOOTER -->
    <footer class="relative bg-background pt-16 md:pt-24 pb-8 border-t border-gray-200 overflow-hidden">
        <!-- Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[420px] h-[260px] md:w-[700px] md:h-[400px] bg-gradient-to-r from-primary/20 via-accent/10 to-secondary/20 blur-[90px] md:blur-[120px] opacity-40 pointer-events-none"></div>

        <div class="container mx-auto px-5 sm:px-6 relative z-10">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12 mb-12 md:mb-16">
                
                <!-- Brand -->
                <div class="flex flex-col items-start">
                    <a href="index.php" class="mb-6 inline-block">
                        <div class="flex flex-col items-end leading-none select-none">
                            <div class="flex items-center">
                                <span class="font-sans text-2xl md:text-3xl font-normal tracking-tight text-gray-600">INTEGRA</span>
                                <span class="font-sans text-2xl md:text-3xl font-bold tracking-tight text-blue-900">TED</span>
                            </div>
                            <div class="w-full h-[2px] bg-blue-900 mt-1 mb-1"></div>
                            <span class="font-sans text-[10px] md:text-xs font-bold tracking-wide text-gray-600 group-hover:text-primary transition-colors">Technologies</span>
                        </div>
                    </a>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Delivering innovative IT solutions, reliable technology services,
                        and expert support to empower your digital journey.
                    </p>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4 text-sm uppercase tracking-wide">Services</h3>
                    <ul class="space-y-2 text-sm">
                        <?php
                            $services = ["IT Product Sales", "Networking Solutions", "AMC Contracts", "Expert Repair", "Software Solutions"];
                            foreach ($services as $svc) {
                                echo "<li><a href='services.php' class='text-gray-600 hover:text-primary transition'>$svc</a></li>";
                            }
                        ?>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4 text-sm uppercase tracking-wide">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="index.php" class="text-gray-600 hover:text-primary transition">Home</a></li>
                        <li><a href="services.php" class="text-gray-600 hover:text-primary transition">Services</a></li>
                        <li><a href="about.php" class="text-gray-600 hover:text-primary transition">About Us</a></li>
                        <li><a href="contact.php" class="text-gray-600 hover:text-primary transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4 text-sm uppercase tracking-wide">Contact</h3>
                    <div class="space-y-3 text-sm text-gray-600">
                        <div class="flex gap-3">
                            <i data-lucide="map-pin" class="text-accent mt-1 shrink-0 w-4 h-4"></i>
                            <a href="https://maps.app.goo.gl/pMncUKVnUiTzceBx6" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors text-left">
                                Shankarnag Circle, 2nd Block, Ashok Nagar, Banashankari 1st Stage, Bengaluru, Karnataka 560050
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="phone" class="text-accent shrink-0 w-4 h-4"></i>
                            <a href="tel:+919845125274" class="hover:text-accent transition-colors">+91 98451 25274</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="mail" class="text-accent shrink-0 w-4 h-4"></i>
                            <a href="mailto:dinesh@integratedtech.co.in" class="hover:text-accent transition-colors text-left">dinesh@integratedtech.co.in</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-200 pt-5 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs sm:text-sm text-gray-500">
                <p>&copy; <?php echo date("Y"); ?> Integrated Technologies. All rights reserved.</p>
                <span class="text-gray-500">
                    Developed By <a href="https://cortinex-webstudio.vercel.app/" target="_blank" rel="noopener noreferrer" class="text-gray-900 font-bold hover:text-primary transition">.CXW Devs</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Init Icons
        lucide.createIcons();

        // Init Animations
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });

        // Mobile Menu Logic
        const menuBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu-overlay');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            const isOpen = !mobileMenu.classList.contains('translate-x-full');
            if (isOpen) {
                mobileMenu.classList.add('translate-x-full'); // Hide
                document.body.style.overflow = 'auto';
            } else {
                mobileMenu.classList.remove('translate-x-full'); // Show
                document.body.style.overflow = 'hidden';
            }
        }

        menuBtn.addEventListener('click', toggleMenu);
        closeBtn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // Header Scroll Effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('bg-background/80', 'backdrop-blur-md', 'border-b', 'border-gray-200');
                header.classList.remove('bg-transparent');
            } else {
                header.classList.remove('bg-background/80', 'backdrop-blur-md', 'border-b', 'border-gray-200');
                header.classList.add('bg-transparent');
            }
        });
    </script>
</body>
</html>
