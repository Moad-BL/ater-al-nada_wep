@extends('layouts.app')

@section('title', 'عطر الندى - الرئيسية')

@section('content')
<!-- Hero Section with Modern Design -->
<section class="hero-modern relative overflow-hidden">
    <div class="absolute inset-0 parallax-bg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9S3b963T5S1DJ1xmLTY5bofJkaKfsodiPFO76XHF8GXRUo5MTe0t7A1IlRJn-Fxn09llt6u68fDmthuUxsfs8eIvbnc6KnQdGRCiIGfjyx0LjSK6mRGoQaVvcDxQjc5dgpLsxwBma2t_PpzUCfxy54vqBnLqEH082hAoElQy-27ngSZ0RBJsmUUetpDu221tRu6XPchZVXqlNUx-5c_EUppuTKeyFzub-oOdUeoLVGbkmeDNNekAxp2_sFI1jr2_gaD3DdHhedK0");'></div>
    <div class="absolute inset-0 gradient-bg-3"></div>
    <div class="absolute inset-0 libyan-pattern-modern"></div>
    
    <div class="relative container mx-auto px-4 py-32 md:py-40 text-center">
        <div class="max-w-5xl mx-auto reveal active">
            <div class="float-animation mb-8">
                <h1 class="text-6xl md:text-8xl font-black text-white mb-6 leading-tight">
                    <span class="text-glow">عطر الندى</span>
                </h1>
            </div>
            <div class="section-divider"></div>
            <h2 class="text-2xl md:text-4xl font-light text-white/90 mb-12 leading-relaxed max-w-3xl mx-auto">
                شريككم الأول في استيراد مواد التنظيف عالية الجودة
            </h2>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('services') }}" class="btn-modern px-10 py-5 rounded-2xl text-primary text-xl font-bold inline-flex items-center gap-3 group">
                    <span>اكتشف خدماتنا</span>
                    <svg class="w-6 h-6 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="glass-card px-10 py-5 rounded-2xl text-white text-xl font-bold inline-flex items-center gap-3 hover:bg-white/20 transition-all">
                    <span>اتصل بنا</span>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-background-light dark:from-background-dark to-transparent"></div>
</section>

<!-- Values Section -->
<section class="py-32 bg-gradient-to-b from-background-light via-white to-background-light dark:from-background-dark dark:via-background-dark/50 dark:to-background-dark relative overflow-hidden">
    <div class="absolute inset-0 libyan-pattern-modern opacity-50"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-4xl mx-auto mb-20 reveal">
            <h2 class="text-5xl md:text-6xl font-black text-shine mb-6">رسالتنا وقيمنا</h2>
            <div class="section-divider"></div>
            <p class="text-xl text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                نحن ملتزمون بتزويد شركائنا بأعلى جودة من مواد التنظيف، مع ضمان الموثوقية وتعزيز العلاقات الدائمة المبنية على الثقة والتميز.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-7xl mx-auto">
            <div class="card-3d glass-card-dark rounded-3xl p-10 text-center stagger-1 reveal">
                <div class="icon-container w-24 h-24 rounded-3xl mx-auto mb-6 flex items-center justify-center">
                    <span class="material-symbols-outlined text-5xl text-accent">verified</span>
                </div>
                <h3 class="text-3xl font-black text-primary dark:text-secondary mb-4">الجودة</h3>
                <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                    استيراد أفضل المنتجات فقط لتلبية المعايير الصارمة وتجاوز التوقعات.
                </p>
            </div>
            
            <div class="card-3d glass-card-dark rounded-3xl p-10 text-center stagger-2 reveal">
                <div class="icon-container w-24 h-24 rounded-3xl mx-auto mb-6 flex items-center justify-center">
                    <span class="material-symbols-outlined text-5xl text-accent">local_shipping</span>
                </div>
                <h3 class="text-3xl font-black text-primary dark:text-secondary mb-4">الموثوقية</h3>
                <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                    ضمان التسليم في الوقت المناسب والإمداد المستمر لاحتياجات عملك الأساسية.
                </p>
            </div>
            
            <div class="card-3d glass-card-dark rounded-3xl p-10 text-center stagger-3 reveal">
                <div class="icon-container w-24 h-24 rounded-3xl mx-auto mb-6 flex items-center justify-center">
                    <span class="material-symbols-outlined text-5xl text-accent">handshake</span>
                </div>
                <h3 class="text-3xl font-black text-primary dark:text-secondary mb-4">الشراكة</h3>
                <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                    العمل عن كثب معكم لفهم وتلبية متطلباتكم الفريدة.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-32 bg-white dark:bg-background-dark/50 relative overflow-hidden">
    <div class="absolute inset-0 libyan-pattern-modern opacity-30"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-4xl mx-auto mb-20 reveal">
            <h2 class="text-5xl md:text-6xl font-black text-shine mb-6">ماذا نقدم</h2>
            <div class="section-divider"></div>
            <p class="text-xl text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                من التوريد إلى التسليم، نقدم حلولاً شاملة لتبسيط سلسلة توريد مواد التنظيف الخاصة بك.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
            <div class="service-card-modern rounded-3xl overflow-hidden stagger-1 reveal">
                <div class="image-container h-72 relative">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQPaaaFmXMINJf_8nAAZLoaSHYK07eB17GlLhDh6z_5QQAvydWQh3bLi1RE_8QQE3u_jysCmPlo50TEJz29-jBt8qDJ3sxecPzCSguneoom_EaLilJgzn4hwLPFAKtmGkTjoDYsHH7A8YScY7gmBt28SodTR4OR6zEddUbTlSDNptROKhK5wvEjiWl8Uf5VIjFUrYaurlEkBr5LV6f2Qel7S3ex2KfsaE3dCk0XTVYwoDAg5-FD1pIF_XvJzsTDK1SNg81DytF61w" alt="Large cargo ship containers" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-primary dark:text-secondary mb-4">الاستيراد بالجملة</h3>
                    <p class="text-base text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                        استيراد كميات كبيرة من مواد التنظيف بكفاءة من أفضل الأسواق العالمية.
                    </p>
                </div>
            </div>
            
            <div class="service-card-modern rounded-3xl overflow-hidden stagger-2 reveal">
                <div class="image-container h-72 relative">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIrV6RtMFNP3r74AngpZ0GfGBoRlsmxzEuBbJkljryS7xx5L1Inmwn8UTbrOezEiFNpzS46Nfn-KiaqYMkxcnM7l3z9MQh9q080DlV_sP1mS0F7D7SRpWNeSKq28qg66KmjhPc5Ug1yj935zRETXU6NW4ut1SxF0rIF01jQGVoEkFK-taFiCy382tPX9e8NVKSOAFqPGH9ilEzJIycFLMeYNygcXx5DaVPkMFmOS22ZdWocGvFV-A-0eMeYHF0QZH2dshNYgWKlY0" alt="Inspecting cleaning bottles" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-primary dark:text-secondary mb-4">توفير المنتجات</h3>
                    <p class="text-base text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                        نحن نجد ونفحص أفضل المنتجات والمصنعين لتناسب احتياجاتك الخاصة.
                    </p>
                </div>
            </div>
            
            <div class="service-card-modern rounded-3xl overflow-hidden stagger-3 reveal">
                <div class="image-container h-72 relative">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa18THKPSfczi5UBcnS4GQIGwjhZdrtxlJBlDjMb2i6a8tKmkVLHjmAFa31Wp3D2wAIUUSFJHqG5GN5Wppj-K9VJzHaBeKQe1PTkTJzEsfNehjTQjDPqzP0XO24H0FWA_z1sjalPSLc_ELxHtqOsoLGK81M5vBlPCzeP4vOK3STsIKI56_7zerxxu6cxXAC8ouFWLbLnn1Xv5u5rj93Xaq9S9SgRzEA89VvGcm2kJHExONU3EoIOUxwWtIwKJommUaRMEb2cakSzM" alt="Forklift in warehouse" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-primary dark:text-secondary mb-4">الإدارة اللوجستية</h3>
                    <p class="text-base text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                        تبسيط سلسلة التوريد بأكملها من المصنع إلى عتبة داركم.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 gradient-bg-2 relative overflow-hidden">
    <div class="absolute inset-0 libyan-pattern-modern opacity-20"></div>
    
    <div class="container mx-auto px-4 text-center relative">
        <div class="max-w-4xl mx-auto glass-card rounded-3xl p-12 md:p-16">
            <h2 class="text-4xl md:text-5xl font-black text-primary dark:text-white mb-6">
                هل أنت مستعد للارتقاء بمعايير النظافة؟
            </h2>
            <p class="text-xl text-primary-dark/80 dark:text-white/80 mb-10 leading-relaxed">
                انضم إلى مئات الشركات التي تثق بنا لتوفير أفضل مواد التنظيف
            </p>
            <a href="{{ route('contact') }}" class="btn-modern px-12 py-6 rounded-2xl text-primary text-xl font-bold inline-flex items-center gap-3">
                <span>ابدأ الآن</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
