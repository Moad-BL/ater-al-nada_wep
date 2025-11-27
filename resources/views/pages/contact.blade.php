@extends('layouts.app')

@section('title', 'عطر الندى - اتصل بنا')

@section('content')
<!-- Hero Section -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 parallax-bg" style='background-image: url("https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80");'></div>
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="absolute inset-0 gradient-bg-3 opacity-60"></div>
    
    <div class="relative container mx-auto px-4 text-center z-10 animate-slide-up">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 text-glow">اتصل بنا</h1>
        <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
            نحن هنا للإجابة على استفساراتك ومساعدتك في العثور على حلول التنظيف المثالية.
        </p>
    </div>
</section>

<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Info -->
        <div class="flex flex-col gap-8 reveal stagger-1">
            <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                <h2 class="text-3xl font-black text-primary dark:text-white mb-8">معلومات التواصل</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start gap-6 group">
                        <div class="w-14 h-14 bg-primary/10 dark:bg-accent/10 rounded-2xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-accent">location_on</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-text-light dark:text-white mb-2">العنوان</h3>
                            <p class="text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                مصراتة، ليبيا<br>
                                المنطقة الصناعية
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-6 group">
                        <div class="w-14 h-14 bg-primary/10 dark:bg-accent/10 rounded-2xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-accent">phone_in_talk</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-text-light dark:text-white mb-2">الهاتف</h3>
                            <p class="text-text-light/80 dark:text-text-dark/80 leading-relaxed dir-ltr text-right">
                                <a href="tel:+218912345678" class="hover:text-primary transition-colors">+218 91 234 5678</a><br>
                                <a href="tel:+218923456789" class="hover:text-primary transition-colors">+218 92 345 6789</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-6 group">
                        <div class="w-14 h-14 bg-primary/10 dark:bg-accent/10 rounded-2xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-accent">mail</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-text-light dark:text-white mb-2">البريد الإلكتروني</h3>
                            <p class="text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                <a href="mailto:info@ateralnada.com" class="hover:text-primary transition-colors">info@ateralnada.com</a><br>
                                <a href="mailto:sales@ateralnada.com" class="hover:text-primary transition-colors">sales@ateralnada.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="glass-card rounded-3xl p-2 h-80 relative overflow-hidden reveal stagger-2">
                <iframe 
                    src="https://maps.google.com/maps?q=32.3667816,15.1487661&hl=ar&z=14&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0; border-radius: 1rem;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="reveal stagger-3">
            <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary via-accent to-primary"></div>
                <h2 class="text-3xl font-black text-primary dark:text-white mb-2">أرسل لنا رسالة</h2>
                <p class="text-text-light/70 dark:text-text-dark/70 mb-8">املأ النموذج أدناه وسنقوم بالرد عليك في أقرب وقت ممكن.</p>
                
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="relative">
                            <input type="text" id="name" name="name" required class="peer w-full h-14 px-4 rounded-xl bg-white/50 dark:bg-black/20 border border-gray-200 dark:border-gray-700 focus:border-primary focus:ring-0 transition-all outline-none pt-4" placeholder=" ">
                            <label for="name" class="absolute right-4 top-4 text-gray-500 transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:bg-white peer-focus:px-1 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base cursor-text">الاسم الكامل</label>
                        </div>
                        <div class="relative">
                            <input type="email" id="email" name="email" required class="peer w-full h-14 px-4 rounded-xl bg-white/50 dark:bg-black/20 border border-gray-200 dark:border-gray-700 focus:border-primary focus:ring-0 transition-all outline-none pt-4" placeholder=" ">
                            <label for="email" class="absolute right-4 top-4 text-gray-500 transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:bg-white peer-focus:px-1 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base cursor-text">البريد الإلكتروني</label>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <input type="text" id="subject" name="subject" required class="peer w-full h-14 px-4 rounded-xl bg-white/50 dark:bg-black/20 border border-gray-200 dark:border-gray-700 focus:border-primary focus:ring-0 transition-all outline-none pt-4" placeholder=" ">
                        <label for="subject" class="absolute right-4 top-4 text-gray-500 transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:bg-white peer-focus:px-1 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base cursor-text">الموضوع</label>
                    </div>
                    
                    <div class="relative">
                        <textarea id="message" name="message" rows="5" required class="peer w-full px-4 rounded-xl bg-white/50 dark:bg-black/20 border border-gray-200 dark:border-gray-700 focus:border-primary focus:ring-0 transition-all outline-none pt-6" placeholder=" "></textarea>
                        <label for="message" class="absolute right-4 top-4 text-gray-500 transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:bg-white peer-focus:px-1 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base cursor-text">الرسالة</label>
                    </div>
                    
                    <button type="submit" class="btn-modern w-full h-14 rounded-xl text-primary font-bold text-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2 group">
                        <span>إرسال الرسالة</span>
                        <span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">send</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
