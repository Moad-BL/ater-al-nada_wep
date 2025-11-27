@extends('layouts.app')

@section('title', 'عطر الندى - خدماتنا')

@section('content')
<!-- Hero Section -->
<section class="hero-modern relative overflow-hidden bg-gradient-to-br from-primary via-primary-dark to-primary">
    <div class="absolute inset-0 libyan-pattern-modern opacity-30"></div>
    
    <div class="relative container mx-auto px-4 py-24 md:py-32 text-center">
        <div class="max-w-4xl mx-auto reveal active">
            <h1 class="text-5xl md:text-7xl font-black text-white mb-6 text-glow">خدماتنا الشاملة</h1>
            <div class="section-divider"></div>
            <p class="text-xl md:text-2xl text-white/90 leading-relaxed">
                تلتزم شركة عطر الندى بتقديم حلول مواد تنظيف عالية الجودة وموثوقة ومصممة خصيصًا للشركات من جميع الأحجام.
            </p>
        </div>
    </div>
</section>

<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Intro -->
    <section class="text-center mb-20 reveal">
        <p class="text-xl leading-loose text-text-light dark:text-text-dark max-w-4xl mx-auto">
            في عطر الندى، لا نقوم فقط بتوريد المنتجات؛ بل نقدم حلولاً. تغطي خدماتنا كل جانب من جوانب عملية استيراد وتوزيع مواد التنظيف، مما يضمن حصولك على ما تحتاجه بالضبط، في الوقت الذي تحتاجه.
        </p>
    </section>

    <!-- Services Grid -->
    <section class="mb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Service 1 -->
            <div class="service-card-modern rounded-3xl overflow-hidden reveal stagger-1 group">
                <div class="image-container h-64 relative">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Import" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 right-0 bg-white/90 dark:bg-background-dark/90 p-4 rounded-tl-2xl backdrop-blur-sm">
                        <span class="material-symbols-outlined text-4xl text-primary">public</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-primary dark:text-secondary mb-4 group-hover:text-accent transition-colors">الاستيراد بالجملة</h3>
                    <p class="text-base text-text-light/70 dark:text-text-dark/70 leading-relaxed mb-6">
                        نستفيد من شبكتنا العالمية لاستيراد مواد تنظيف عالية الجودة بكميات كبيرة، مما يضمن أسعارًا تنافسية وتوافرًا ثابتًا.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-sm text-text-light/80">
                            <span class="material-symbols-outlined text-accent text-lg">check_circle</span>
                            <span>مصادر عالمية موثوقة</span>
                        </li>
                        <li class="flex items-center gap-2 text-sm text-text-light/80">
                            <span class="material-symbols-outlined text-accent text-lg">check_circle</span>
                            <span>أسعار تنافسية</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card-modern rounded-3xl overflow-hidden reveal stagger-2 group">
                <div class="image-container h-64 relative">
                    <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sourcing" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 right-0 bg-white/90 dark:bg-background-dark/90 p-4 rounded-tl-2xl backdrop-blur-sm">
                        <span class="material-symbols-outlined text-4xl text-primary">search</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-primary dark:text-secondary mb-4 group-hover:text-accent transition-colors">توفير المنتجات المخصصة</h3>
                    <p class="text-base text-text-light/70 dark:text-text-dark/70 leading-relaxed mb-6">
                        هل تحتاج إلى منتج معين؟ سيقوم فريقنا بالبحث عن الحل الدقيق الذي يلبي متطلباتك وميزانيتك وتأمينه.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-sm text-text-light/80">
                            <span class="material-symbols-outlined text-accent text-lg">check_circle</span>
                            <span>حلول مخصصة</span>
                        </li>
                        <li class="flex items-center gap-2 text-sm text-text-light/80">
                            <span class="material-symbols-outlined text-accent text-lg">check_circle</span>
                            <span>فحص الجودة</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card-modern rounded-3xl overflow-hidden reveal stagger-3 group">
                <div class="image-container h-64 relative">
                    <img src="https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Logistics" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 right-0 bg-white/90 dark:bg-background-dark/90 p-4 rounded-tl-2xl backdrop-blur-sm">
                        <span class="material-symbols-outlined text-4xl text-primary">local_shipping</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-primary dark:text-secondary mb-4 group-hover:text-accent transition-colors">الإدارة اللوجستية</h3>
                    <p class="text-base text-text-light/70 dark:text-text-dark/70 leading-relaxed mb-6">
                        نتعامل مع تعقيدات الشحن والتخليص الجمركي والتسليم، حتى تتمكن من التركيز على عملك الأساسي.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-sm text-text-light/80">
                            <span class="material-symbols-outlined text-accent text-lg">check_circle</span>
                            <span>تخليص جمركي</span>
                        </li>
                        <li class="flex items-center gap-2 text-sm text-text-light/80">
                            <span class="material-symbols-outlined text-accent text-lg">check_circle</span>
                            <span>توصيل سريع</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="mb-24 bg-primary/5 dark:bg-accent/5 rounded-3xl p-10 md:p-16 relative overflow-hidden reveal">
        <div class="absolute top-0 left-0 w-full h-full libyan-pattern-modern opacity-10"></div>
        <div class="relative z-10">
            <h2 class="text-3xl md:text-4xl font-black text-center mb-12 text-primary dark:text-white">لماذا تختار خدماتنا؟</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4 items-start">
                    <div class="w-12 h-12 bg-white dark:bg-background-dark rounded-full flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-accent">inventory_2</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 text-primary dark:text-white">مخزون واسع</h4>
                        <p class="text-text-light/70 dark:text-text-dark/70">نحافظ على مخزون كبير لضمان تلبية طلباتك بسرعة وكفاءة.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-12 h-12 bg-white dark:bg-background-dark rounded-full flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-accent">support_agent</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 text-primary dark:text-white">دعم مخصص</h4>
                        <p class="text-text-light/70 dark:text-text-dark/70">فريقنا متاح دائمًا للإجابة على استفساراتك وتقديم المشورة.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-12 h-12 bg-white dark:bg-background-dark rounded-full flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-accent">price_check</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 text-primary dark:text-white">قيمة مقابل المال</h4>
                        <p class="text-text-light/70 dark:text-text-dark/70">نقدم منتجات عالية الجودة بأسعار تنافسية تناسب ميزانيتك.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-12 h-12 bg-white dark:bg-background-dark rounded-full flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-accent">eco</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 text-primary dark:text-white">خيارات صديقة للبيئة</h4>
                        <p class="text-text-light/70 dark:text-text-dark/70">نوفر مجموعة من المنتجات المستدامة والصديقة للبيئة.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="text-center reveal">
        <h2 class="text-3xl font-bold text-text-light dark:text-white mb-6">هل لديك متطلبات خاصة؟</h2>
        <p class="text-lg text-text-light/80 dark:text-text-dark/80 mb-8">
            نحن هنا للمساعدة في تلبية جميع احتياجات التنظيف الخاصة بك.
        </p>
        <a href="{{ route('contact') }}" class="btn-modern px-12 py-5 rounded-xl text-primary font-bold inline-flex items-center gap-2">
            <span>تحدث إلى خبير</span>
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </section>
</div>

<script>
    const reveals = document.querySelectorAll('.reveal');
    const revealOnScroll = () => {
        reveals.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('active');
            }
        });
    };
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
</script>
@endsection
