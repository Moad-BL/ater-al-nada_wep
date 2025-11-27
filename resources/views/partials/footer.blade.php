<footer class="relative bg-gradient-to-br from-[#1a2e1f] to-[#2B4B30] text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 libyan-pattern-modern opacity-10"></div>
    
    <div class="relative max-w-7xl mx-auto pt-20 pb-10 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Brand Column -->
            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-accent to-[#E8D5B5] rounded-full flex items-center justify-center shadow-lg shadow-accent/20">
                        <svg class="w-7 h-7 text-[#2B4B30]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black font-display text-transparent bg-clip-text bg-gradient-to-r from-white to-white/80">عطر الندى</h3>
                </div>
                <p class="text-white/70 leading-relaxed mb-8">
                    شريكك الاستراتيجي في حلول النظافة المتكاملة. نلتزم بتقديم أجود المنتجات العالمية لضمان بيئة صحية وآمنة.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:bg-accent hover:text-white transition-all duration-300 group">
                        <span class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform">public</span>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:bg-accent hover:text-white transition-all duration-300 group">
                        <span class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform">alternate_email</span>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:bg-accent hover:text-white transition-all duration-300 group">
                        <span class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform">call</span>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold text-accent mb-6 font-display">روابط سريعة</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('home') }}" class="text-white/70 hover:text-accent transition-colors flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent/50 group-hover:bg-accent transition-colors"></span>
                            الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-white/70 hover:text-accent transition-colors flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent/50 group-hover:bg-accent transition-colors"></span>
                            المنتجات
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-white/70 hover:text-accent transition-colors flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent/50 group-hover:bg-accent transition-colors"></span>
                            من نحن
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-white/70 hover:text-accent transition-colors flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent/50 group-hover:bg-accent transition-colors"></span>
                            اتصل بنا
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-bold text-accent mb-6 font-display">تواصل معنا</h4>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-accent">location_on</span>
                        </div>
                        <div>
                            <p class="text-white/90 font-medium mb-1">العنوان</p>
                            <p class="text-sm text-white/60">مصراتة، ليبيا</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-accent">mail</span>
                        </div>
                        <div>
                            <p class="text-white/90 font-medium mb-1">البريد الإلكتروني</p>
                            <p class="text-sm text-white/60">info@ateralnada.com</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-accent">phone_in_talk</span>
                        </div>
                        <div>
                            <p class="text-white/90 font-medium mb-1">الهاتف</p>
                            <p class="text-sm text-white/60" dir="ltr">+218 92 380 4818</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h4 class="text-lg font-bold text-accent mb-6 font-display">النشرة البريدية</h4>
                <p class="text-white/70 text-sm mb-6 leading-relaxed">
                    اشترك في نشرتنا البريدية للحصول على آخر العروض وأخبار المنتجات.
                </p>
                <form class="relative">
                    <input type="email" placeholder="بريدك الإلكتروني" class="w-full bg-white/5 border border-white/10 rounded-xl py-3 px-4 text-white placeholder-white/40 focus:outline-none focus:border-accent transition-colors">
                    <button type="submit" class="absolute left-2 top-1.5 w-9 h-9 bg-accent rounded-lg flex items-center justify-center hover:bg-[#E8D5B5] transition-colors text-[#2B4B30]">
                        <span class="material-symbols-outlined text-lg">arrow_back</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/50 text-sm text-center md:text-right">
                © {{ date('Y') }} شركة عطر الندى. جميع الحقوق محفوظة.
            </p>
            <div class="flex gap-6 text-sm text-white/50">
                <a href="#" class="hover:text-accent transition-colors">سياسة الخصوصية</a>
                <a href="#" class="hover:text-accent transition-colors">الشروط والأحكام</a>
            </div>
        </div>
    </div>
</footer>
