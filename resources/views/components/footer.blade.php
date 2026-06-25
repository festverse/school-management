<footer class="bg-gray-950 py-16 border-t border-gray-800 text-gray-300 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <!-- Address Column -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6 tracking-wide">Address</h4>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    Academic Office,<br>
                    2nd floor,<br>
                    Nandan Nilekani Main Building<br>
                    Lumina University
                </p>
            </div>

            <!-- Important Links Column -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6 tracking-wide">Important Links</h4>
                <ul class="space-y-3 text-sm font-light">
                    <li><a href="{{ route('gymkhana') }}" class="text-gray-300 hover:text-white transition-colors">Gymkhana</a></li>
                    <li><a href="{{ route('wellness') }}" class="text-gray-300 hover:text-white transition-colors">Student Wellness Center</a></li>
                    <li><a href="{{ route('gender-cell') }}" class="text-gray-300 hover:text-white transition-colors">Gender Cell</a></li>
                    <li><a href="{{ route('sc-st-cell') }}" class="text-gray-300 hover:text-white transition-colors">SC/ST Cell</a></li>
                </ul>
            </div>

            <!-- Portals & Resources Column -->
            <div class="pt-1 lg:pt-12">
                <ul class="space-y-3 text-sm font-light">
                    <li><a href="{{ route('irbs') }}" class="text-gray-300 hover:text-white transition-colors">IRBS</a></li>
                    <li><a href="{{ route('asc') }}" class="text-gray-300 hover:text-white transition-colors">ASC</a></li>
                    <li><a href="{{ route('moodle') }}" class="text-gray-300 hover:text-white transition-colors">Moodle</a></li>
                    <li><a href="{{ route('library') }}" class="text-gray-300 hover:text-white transition-colors">Library</a></li>
                    <li><a href="{{ route('feedback') }}" class="text-gray-300 hover:text-white transition-colors">Feedback form</a></li>
                </ul>
            </div>

            <!-- Quick Actions / Login Column -->
            <div class="pt-1 lg:pt-12">
                <ul class="space-y-3 text-sm font-medium">
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="text-primary-400 hover:text-primary-300 transition-colors inline-flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary-500"></span> Enter Portal
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors inline-flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-gray-500"></span> Log in
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>

        <!-- Bottom Bar (Social Icons, Copyright & Back to Top) -->
        <div class="mt-16 pt-8 border-t border-gray-800 flex flex-col sm:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-6 text-xl text-gray-400">
                <a href="https://facebook.com" target="_blank" class="hover:text-white transition-colors font-bold">f</a>
                <a href="https://twitter.com" target="_blank" class="hover:text-white transition-colors">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="https://linkedin.com" target="_blank" class="hover:text-white transition-colors font-bold">in</a>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-gray-500 font-light">
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact Support</a>
                <span>© 2026 Lumina University. All rights reserved.</span>
            </div>
            <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" title="Back to top" class="w-12 h-12 bg-gray-800 hover:bg-gray-700 text-white rounded-lg flex items-center justify-center transition-all shadow-lg hover:-translate-y-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
            </button>
        </div>
    </div>
</footer>
