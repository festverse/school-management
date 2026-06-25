<footer class="bg-[#002855] py-20 border-t-8 border-[#E51937] text-slate-200 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <!-- Address Column -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <svg class="w-10 h-10 text-white hover:text-[#FFB81C] transition-all duration-300 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                        <path d="M21 12.27L12 17.18 3 12.27v4.18c0 2.22 4.03 4.05 9 4.05s9-1.83 9-4.05v-4.18z" />
                    </svg>
                    <span class="text-2xl font-serif font-bold text-white tracking-tight">Lumina University</span>
                </div>
                <h4 class="text-white font-serif font-bold text-lg mb-4 tracking-wide text-[#E51937]">The Mecca of Excellence</h4>
                <p class="text-slate-300 text-sm leading-relaxed font-normal">
                    Office of the Provost,<br>
                    Suite 100, Hall of Fame Building<br>
                    Lumina University Campus<br>
                    Excellence in Truth and Service
                </p>
            </div>

            <!-- Important Links Column -->
            <div>
                <h4 class="text-white font-serif font-bold text-lg mb-6 tracking-wide border-b-2 border-[#E51937] pb-2 inline-block">Campus Resources</h4>
                <ul class="space-y-3 text-sm font-medium">
                    <li><a href="{{ route('gymkhana') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Gymkhana Student Council</a></li>
                    <li><a href="{{ route('wellness') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Student Wellness Center</a></li>
                    <li><a href="{{ route('gender-cell') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Gender Equity Cell</a></li>
                    <li><a href="{{ route('sc-st-cell') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Equal Opportunity Cell</a></li>
                    <li><a href="{{ route('placement-cell') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Placement & Training Cell</a></li>
                    <li><a href="{{ route('incubation') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Innovation & Incubation</a></li>
                </ul>
            </div>

            <!-- Portals & Academic Services Column -->
            <div>
                <h4 class="text-white font-serif font-bold text-lg mb-6 tracking-wide border-b-2 border-[#E51937] pb-2 inline-block">Research & Academics</h4>
                <ul class="space-y-3 text-sm font-medium">
                    <li><a href="{{ route('irbs') }}" class="text-slate-300 hover:text-white hover:underline transition-all">IRBS Research System</a></li>
                    <li><a href="{{ route('asc') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Academic Service Center (ASC)</a></li>
                    <li><a href="{{ route('moodle') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Moodle Digital Classroom</a></li>
                    <li><a href="{{ route('library') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Central Informatics Library</a></li>
                    <li><a href="{{ route('tenders') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Institutional Bulletin & Tenders</a></li>
                    <li><a href="{{ route('careers') }}" class="text-slate-300 hover:text-white hover:underline transition-all">Careers & Faculty Hiring</a></li>
                </ul>
            </div>

            <!-- Quick Actions / Login Column -->
            <div>
                <h4 class="text-white font-serif font-bold text-lg mb-6 tracking-wide border-b-2 border-[#E51937] pb-2 inline-block">Secure Institutional Portals</h4>
                <p class="text-slate-300 text-sm mb-6 leading-relaxed">Log in to manage course schedules, research grants, and student analytics.</p>
                <div class="space-y-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full inline-flex items-center justify-center px-6 py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow-lg transition-all gap-2">
                            Enter Secured Portal
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="w-full inline-flex items-center justify-center px-6 py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow-lg transition-all gap-2">
                            Institutional Log in
                        </a>
                        <a href="{{ route('register') }}" class="w-full inline-flex items-center justify-center px-6 py-3 bg-[#003366] hover:bg-[#004080] border border-slate-300 text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow-md transition-all gap-2">
                            New Student Intake
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Bottom Bar (Social Icons, Copyright & Back to Top) -->
        <div class="mt-16 pt-8 border-t border-[#001a38] flex flex-col sm:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-6 text-xl text-slate-300">
                <a href="https://facebook.com" target="_blank" class="hover:text-white transition-colors font-bold">f</a>
                <a href="https://twitter.com" target="_blank" class="hover:text-white transition-colors">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="https://linkedin.com" target="_blank" class="hover:text-white transition-colors font-bold">in</a>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-slate-300 font-medium">
                <a href="{{ route('privacy') }}" class="hover:text-white hover:underline transition-colors">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="hover:text-white hover:underline transition-colors">Terms of Service</a>
                <a href="{{ route('contact') }}" class="hover:text-white hover:underline transition-colors">Contact Support</a>
                <a href="{{ route('feedback') }}" class="hover:text-white hover:underline transition-colors">Institutional Feedback</a>
                <span>© 2026 Lumina University. All rights reserved.</span>
            </div>
            <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" title="Back to top" class="w-12 h-12 bg-[#E51937] hover:bg-[#B21B2A] text-white rounded-lg flex items-center justify-center transition-all shadow-lg hover:-translate-y-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
            </button>
        </div>
    </div>
</footer>
