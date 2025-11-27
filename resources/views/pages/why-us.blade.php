@extends('layouts.app')

@section('title', 'عطر الندى - لماذا نحن')

@section('content')
<!-- Hero Section -->
<section class="hero-modern relative overflow-hidden bg-gradient-to-br from-primary via-primary-dark to-primary">
    <div class="absolute inset-0 libyan-pattern-modern opacity-30"></div>
    
    <div class="relative container mx-auto px-4 py-24 md:py-32 text-center">
        <div class="max-w-4xl mx-auto reveal active">
            <h1 class="text-5xl md:text-7xl font-black text-white mb-6 text-glow">لماذا تختار عطر الندى؟</h1>
            <div class="section-divider"></div>
            <p class="text-xl md:text-2xl text-white/90 leading-relaxed">
                نحن أكثر من مجرد مورد؛ نحن شريكك الاستراتيجي في النظافة. اكتشف ما يميزنا في السوق.
            </p>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-32 bg-gradient-to-b from-background-light to-white dark:from-background-dark dark:to-background-dark/50 relative overflow-hidden">
    <div class="absolute inset-0 libyan-pattern-modern opacity-40"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
            <!-- Features List -->
            <div class="space-y-8">
                <div class="card-3d glass-card-dark rounded-3xl p-8 flex gap-6 stagger-1 reveal">
                    <div class="icon-container w-20 h-20 rounded-2xl flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-accent">public</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-primary dark:text-sand mb-3">شبكة عالمية</h3>
                        <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                            علاقات قوية مع أفضل الشركات المصنعة الدولية تضمن الوصول إلى أحدث المنتجات وأكثرها فعالية.
                        </p>
                    </div>
                </div>
                
                <div class="card-3d glass-card-dark rounded-3xl p-8 flex gap-6 stagger-2 reveal">
                    <div class="icon-container w-20 h-20 rounded-2xl flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-accent">verified_user</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-primary dark:text-sand mb-3">جودة لا هوادة فيها</h3>
                        <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                            يخضع كل منتج لفحوصات جودة صارمة لضمان استيفائه لأعلى معايير السلامة والأداء.
                        </p>
                    </div>
                </div>
                
                <div class="card-3d glass-card-dark rounded-3xl p-8 flex gap-6 stagger-3 reveal">
                    <div class="icon-container w-20 h-20 rounded-2xl flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-accent">support_agent</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-primary dark:text-sand mb-3">دعم مخصص</h3>
                        <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                            فريقنا المتخصص متواجد دائمًا لمساعدتك في اختيار المنتجات والطلبات وأي استفسارات قد تكون لديك.
                        </p>
                    </div>
                </div>
                
                <div class="card-3d glass-card-dark rounded-3xl p-8 flex gap-6 stagger-4 reveal">
                    <div class="icon-container w-20 h-20 rounded-2xl flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-accent">attach_money</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-primary dark:text-sand mb-3">أسعار تنافسية</h3>
                        <p class="text-lg text-text-light/70 dark:text-text-dark/70 leading-relaxed">
                            نحن نستفيد من قوتنا الشرائية لتقديم أفضل الأسعار الممكنة لك دون المساومة على الجودة.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Image -->
            <div class="relative reveal stagger-2">
                <div class="service-card-modern rounded-3xl overflow-hidden h-[600px]">
                    <div class="image-container h-full">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Team meeting" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-32 bg-white dark:bg-background-dark/50 relative overflow-hidden">
    <div class="absolute inset-0 libyan-pattern-modern opacity-20"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-4xl mx-auto mb-20 reveal">
            <h2 class="text-5xl md:text-6xl font-black text-shine mb-6">ماذا يقول عملاؤنا</h2>
            <div class="section-divider"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
            <div class="testimonial-modern rounded-3xl p-10 stagger-1 reveal">
                <div class="flex text-accent mb-6 gap-1">
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                </div>
                <p class="text-lg italic text-text-light dark:text-text-dark mb-8 leading-relaxed">
                    "لقد أحدثت شركة عطر الندى تحولاً في معايير النظافة لدينا. منتجاتهم من الدرجة الأولى وخدمة التوصيل لديهم موثوقة دائمًا."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent/30 to-accent/10 flex items-center justify-center">
                        <span class="text-2xl font-bold text-accent">م</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-primary dark:text-sand">محمد الفيتوري</p>
                        <p class="text-sm text-text-light/70 dark:text-text-dark/70">مدير فندق</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-modern rounded-3xl p-10 stagger-2 reveal">
                <div class="flex text-accent mb-6 gap-1">
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                </div>
                <p class="text-lg italic text-text-light dark:text-text-dark mb-8 leading-relaxed">
                    "التعامل مع عطر الندى سهل للغاية. فريقهم محترف للغاية وساعدونا في العثور على الحلول المناسبة لمستشفانا."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent/30 to-accent/10 flex items-center justify-center">
                        <span class="text-2xl font-bold text-accent">س</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-primary dark:text-sand">د. سارة علي</p>
                        <p class="text-sm text-text-light/70 dark:text-text-dark/70">مديرة مشتريات</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-modern rounded-3xl p-10 stagger-3 reveal">
                <div class="flex text-accent mb-6 gap-1">
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                    <span class="material-symbols-outlined text-2xl">star</span>
                </div>
                <p class="text-lg italic text-text-light dark:text-text-dark mb-8 leading-relaxed">
                    "أفضل مورد لمواد التنظيف في ليبيا بلا منازع. أسعار ممتازة وجودة لا تضاهى."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent/30 to-accent/10 flex items-center justify-center">
                        <span class="text-2xl font-bold text-accent">أ</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-primary dark:text-sand">أحمد بن موسى</p>
                        <p class="text-sm text-text-light/70 dark:text-text-dark/70">صاحب شركة تنظيف</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 gradient-bg-2 relative overflow-hidden">
    <div class="absolute inset-0 libyan-pattern-modern opacity-20"></div>
    
    <div class="container mx-auto px-4 text-center relative">
        <div class="max-w-4xl mx-auto glass-card rounded-3xl p-12 md:p-16 reveal">
            <h2 class="text-4xl md:text-5xl font-black text-primary dark:text-white mb-6">
                انضم إلى عائلة عطر الندى
            </h2>
            <p class="text-xl text-primary-dark/80 dark:text-white/80 mb-10 leading-relaxed">
                اكتشف الفرق الذي يمكن أن تحدثه الشراكة مع أفضل مورد لمواد التنظيف
            </p>
            <a href="{{ route('contact') }}" class="btn-modern px-12 py-6 rounded-2xl text-primary text-xl font-bold inline-flex items-center gap-3">
                <span>تواصل معنا الآن</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
