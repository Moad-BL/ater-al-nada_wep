@extends('layouts.app')

@section('title', 'عطر الندى - من نحن')

@section('content')
<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 parallax-bg" style='background-image: url("https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80");'></div>
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="absolute inset-0 gradient-bg-3 opacity-60"></div>
    
    <div class="relative container mx-auto px-4 text-center z-10 reveal active">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 text-glow">عن عطر الندى</h1>
        <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
            إرث من النظافة والجودة، نقدم حلولاً لا مثيل لها مع التزام بالتميز.
        </p>
    </div>
</section>

<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Intro Section -->
    <section class="text-center mb-24 reveal">
        <div class="glass-card rounded-3xl p-10 md:p-16 relative overflow-hidden">
            <div class="absolute inset-0 libyan-pattern-modern opacity-10"></div>
            <p class="text-xl md:text-2xl leading-loose text-text-light dark:text-text-dark max-w-4xl mx-auto relative z-10">
                تتخصص شركة <span class="text-primary dark:text-accent font-bold">عطر الندى</span> في استيراد وتوزيع أجود لوازم التنظيف. نحن ملتزمون بتزويد عملائنا بمنتجات تضمن بيئة آمنة وصحية. إن التزامنا بالجودة والخدمة جعلنا شريكًا موثوقًا للشركات في مختلف القطاعات.
            </p>
        </div>
    </section>

    <!-- Our Story Timeline -->
    <section class="mb-24 relative">
        <h2 class="text-4xl md:text-5xl font-black text-center mb-16 text-shine">قصتنا</h2>
        
        <div class="relative max-w-4xl mx-auto">
            <!-- Vertical Line -->
            <div class="absolute right-1/2 transform translate-x-1/2 h-full w-1 bg-gradient-to-b from-transparent via-primary/30 to-transparent"></div>
            
            <!-- Timeline Item 1 -->
            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 items-center reveal">
                <div class="md:text-left order-2 md:order-1">
                    <div class="glass-card-dark p-8 rounded-2xl card-3d">
                        <h3 class="text-2xl font-bold text-primary dark:text-accent mb-3">التأسيس</h3>
                        <p class="text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                            بدأت رحلتنا بمهمة بسيطة: توفير أفضل لوازم التنظيف ووضع معايير جديدة للنظافة في المنطقة.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center order-1 md:order-2 relative">
                    <div class="w-16 h-16 bg-white dark:bg-background-dark rounded-full border-4 border-accent flex items-center justify-center z-10 shadow-lg shadow-accent/20">
                        <span class="material-symbols-outlined text-3xl text-primary">flag</span>
                    </div>
                </div>
            </div>
            
            <!-- Timeline Item 2 -->
            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 items-center reveal">
                <div class="md:text-left order-2 md:order-1 md:col-start-2">
                    <div class="glass-card-dark p-8 rounded-2xl card-3d">
                        <h3 class="text-2xl font-bold text-primary dark:text-accent mb-3">التوسع</h3>
                        <p class="text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                            قمنا بتوسيع عملياتنا، وقدمنا خطوط إنتاج جديدة ومبتكرة، ووصلنا إلى أسواق أوسع في جميع أنحاء البلاد.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center order-1 md:order-2 md:col-start-1 relative">
                    <div class="w-16 h-16 bg-white dark:bg-background-dark rounded-full border-4 border-accent flex items-center justify-center z-10 shadow-lg shadow-accent/20">
                        <span class="material-symbols-outlined text-3xl text-primary">trending_up</span>
                    </div>
                </div>
            </div>
            
            <!-- Timeline Item 3 -->
            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center reveal">
                <div class="md:text-left order-2 md:order-1">
                    <div class="glass-card-dark p-8 rounded-2xl card-3d">
                        <h3 class="text-2xl font-bold text-primary dark:text-accent mb-3">ريادة السوق</h3>
                        <p class="text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                            اليوم، نحن اسم موثوق به في هذا المجال، ومعروفون بالتزامنا الراسخ بالجودة والموثوقية ورضا العملاء.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center order-1 md:order-2 relative">
                    <div class="w-16 h-16 bg-white dark:bg-background-dark rounded-full border-4 border-accent flex items-center justify-center z-10 shadow-lg shadow-accent/20">
                        <span class="material-symbols-outlined text-3xl text-primary">trophy</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mb-24">
        <div class="grid md:grid-cols-2 gap-10">
            <div class="glass-card p-10 rounded-3xl card-3d reveal stagger-1">
                <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <span class="material-symbols-outlined text-5xl text-primary">rocket_launch</span>
                </div>
                <h3 class="text-3xl font-black text-center text-primary dark:text-white mb-6">مهمتنا</h3>
                <p class="text-lg text-center text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                    تمكين عملائنا بحلول تنظيف فائقة تعزز الصحة والسلامة والرفاهية في كل بيئة، مدعومة بخدمة وخبرة استثنائية.
                </p>
            </div>
            
            <div class="glass-card p-10 rounded-3xl card-3d reveal stagger-2">
                <div class="w-20 h-20 bg-accent/10 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <span class="material-symbols-outlined text-5xl text-accent">visibility</span>
                </div>
                <h3 class="text-3xl font-black text-center text-primary dark:text-white mb-6">رؤيتنا</h3>
                <p class="text-lg text-center text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                    أن نكون المزود الرائد والأكثر ابتكارًا لمستلزمات التنظيف في المنطقة، ونضع معيارًا للجودة والاستدامة والتركيز على العملاء.
                </p>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="mb-24">
        <h2 class="text-4xl md:text-5xl font-black text-center mb-16 text-shine">قيمنا الأساسية</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="service-card-modern p-8 rounded-2xl text-center reveal stagger-1">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-symbols-outlined text-3xl text-primary">verified</span>
                </div>
                <h4 class="text-xl font-bold mb-3">الجودة</h4>
                <p class="text-sm text-text-light/70">نلتزم بتقديم الأفضل فقط.</p>
            </div>
            
            <div class="service-card-modern p-8 rounded-2xl text-center reveal stagger-2">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-symbols-outlined text-3xl text-primary">shield</span>
                </div>
                <h4 class="text-xl font-bold mb-3">النزاهة</h4>
                <p class="text-sm text-text-light/70">نعمل بشفافية وأمانة تامة.</p>
            </div>
            
            <div class="service-card-modern p-8 rounded-2xl text-center reveal stagger-3">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-symbols-outlined text-3xl text-primary">groups</span>
                </div>
                <h4 class="text-xl font-bold mb-3">العميل أولاً</h4>
                <p class="text-sm text-text-light/70">نجاحكم هو مقياس نجاحنا.</p>
            </div>
            
            <div class="service-card-modern p-8 rounded-2xl text-center reveal stagger-4">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-symbols-outlined text-3xl text-primary">lightbulb</span>
                </div>
                <h4 class="text-xl font-bold mb-3">الابتكار</h4>
                <p class="text-sm text-text-light/70">نسعى دائماً للتطوير والتحسين.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="text-center gradient-bg-2 p-12 md:p-20 rounded-3xl relative overflow-hidden reveal">
        <div class="absolute inset-0 libyan-pattern-modern opacity-20"></div>
        <div class="relative z-10">
            <h2 class="text-3xl md:text-4xl font-black text-primary-dark dark:text-white mb-6">
                هل أنت مستعد لرفع معايير النظافة لديك؟
            </h2>
            <p class="text-xl text-text-light dark:text-text-dark/90 max-w-2xl mx-auto mb-10 leading-relaxed">
                اكتشف مجموعتنا الواسعة من منتجات التنظيف عالية الجودة أو تواصل مع فريق الخبراء لدينا.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('services') }}" class="btn-modern px-10 py-4 rounded-xl text-primary font-bold">
                    تصفح منتجاتنا
                </a>
                <a href="{{ route('contact') }}" class="glass-card px-10 py-4 rounded-xl text-primary-dark font-bold border border-primary/20 hover:bg-primary/10 transition-colors">
                    اتصل بنا
                </a>
            </div>
        </div>
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
