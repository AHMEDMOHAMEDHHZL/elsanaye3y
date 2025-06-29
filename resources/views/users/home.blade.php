<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>صنايعي دوت كوم</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Tajawal', sans-serif; background: #f8f9fa; }
        .navbar { background: #fff; box-shadow: 0 2px 8px #eee; }
        .navbar-brand { font-weight: bold; color: #ff6600 !important; }
        .btn-main { background: #ff6600; color: #fff; border-radius: 25px; padding: 8px 28px; }
        .btn-main:hover { background: #e65c00; color: #fff; }
        .btn-outline-main { border: 1px solid #ff6600; color: #ff6600; border-radius: 25px; }
        .btn-outline-main:hover { background: #ff6600; color: #fff; }
        .hero-section { background: linear-gradient(90deg, #1a2236 60%, #ff6600 100%); color: #fff; padding: 60px 0 40px 0; position: relative; }
        .hero-section .hero-img { max-width: 420px; border-radius: 20px; box-shadow: 0 8px 32px #0002; }
        .feature-card { background: #fff; border-radius: 16px; box-shadow: 0 2px 8px #eee; padding: 24px 18px; margin-bottom: 20px; }
        .feature-icon { font-size: 2.2rem; color: #ff6600; margin-bottom: 10px; }
        .about-section { background: #fff; border-radius: 18px; box-shadow: 0 2px 8px #eee; padding: 40px 24px; margin: 40px 0; }
        .about-img { border-radius: 16px; max-width: 100%; box-shadow: 0 2px 8px #eee; }
        .service-card { background: #fff; border-radius: 14px; box-shadow: 0 2px 8px #eee; padding: 22px 10px; margin-bottom: 18px; transition: 0.2s; }
        .service-card:hover { box-shadow: 0 4px 16px #ff660033; transform: translateY(-4px); }
        .service-icon { font-size: 2rem; color: #1a2236; margin-bottom: 8px; }
        .order-form-section { background: #fff; border-radius: 18px; box-shadow: 0 2px 8px #eee; padding: 36px 24px; margin: 40px 0; }
        .order-form-title { color: #ff6600; font-weight: bold; margin-bottom: 18px; }
        footer { background: #1a2236; color: #fff; padding: 40px 0 20px 0; }
        .footer-link { color: #fff; text-decoration: none; margin: 0 8px; }
        .footer-link:hover { color: #ff6600; }
        .footer-icon { font-size: 1.3rem; margin: 0 6px; color: #ff6600; }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand" href="#">صنايعي دوت كوم</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item"><a class="nav-link active" href="#">الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link" href="#">سجل الطلبات</a></li>
            <li class="nav-item"><a class="nav-link" href="#">طلب خدمة</a></li>
            <li class="nav-item"><a class="nav-link" href="#">اختر صنايعي</a></li>
            <li class="nav-item"><a class="nav-link" href="#">الإعدادات</a></li>
        </ul>
        <a href="#" class="btn btn-main ms-2">اطلب الآن</a>
        <a href="#" class="btn btn-outline-main">سجل الآن</a>
    </div>
</nav>

<section class="hero-section d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="mb-3">اطلب صنايعك... وخلي الشغل علينا!</h1>
                <p class="lead mb-4">مع صنايعي، كل خدمات الصيانة والديكور في مكان واحد - صنايعية خبرة وأسعار واضحة وشغل مضمون يوصل لحد بابك.</p>
                <a href="#" class="btn btn-main btn-lg me-2">اطلب الآن</a>
                <a href="#" class="btn btn-outline-main btn-lg">دخول</a>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=500&q=80" alt="صنايعي" class="hero-img">
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row text-center mb-4">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-person-check"></i></div>
                <h5>صنايعية موثوقين</h5>
                <p>كل الصنايعية متحقق من بياناتهم وتقييماتهم علنية.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-clock-history"></i></div>
                <h5>حجز سهل وسريع</h5>
                <p>احجز الخدمة في خطوات بسيطة، من غير مكالمات أو تعقيد.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-cash-coin"></i></div>
                <h5>أسعار مناسبة</h5>
                <p>شاهد الأسعار قبل الطلب، بدون مفاجآت.</p>
            </div>
        </div>
    </div>
</div>

<div class="container about-section">
    <div class="row align-items-center">
        <div class="col-md-5 mb-3 mb-md-0">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=500&q=80" class="about-img" alt="عن صنايعي">
        </div>
        <div class="col-md-7">
            <h4 class="mb-3" style="color:#ff6600;">اعرف عنا</h4>
            <h2 class="mb-3">صنايعي، شريكك الموثوق في كل إصلاح</h2>
            <p>نؤمن أن كل بيت أو مشروع يستحق خدمة ممتازة وسريعة. عشان كده جمعنالك أفضل الصنايعية المعتمدين، في منصة ذكية واحدة. سواء سباكة، نجارة، كهرباء، أو دهانات، هتلاقي التخصص المناسب بسهولة. احجز صنايعيك في خطوات بسيطة، وابدأ الشغل وانت مطمن.</p>
            <ul class="list-unstyled mt-3">
                <li><i class="bi bi-eye-fill" style="color:#ff6600;"></i> رؤيتنا: الريادة في خدمات الصيانة المنزلية في الوطن العربي.</li>
                <li><i class="bi bi-award-fill" style="color:#ff6600;"></i> مهمتنا: تقديم خدمة عالية الجودة بأمان وراحة للعميل.</li>
            </ul>
            <a href="#" class="btn btn-main mt-3">اطلب الآن</a>
        </div>
    </div>
</div>

<div class="container services text-center">
    <h2 class="mb-4">اختر الخدمة اللي تناسبك</h2>
    <div class="row justify-content-center">
        <div class="col-md-3 col-6 mb-3">
            <div class="service-card">
                <div class="service-icon"><i class="bi bi-wrench-adjustable"></i></div>
                <h5>السباكة</h5>
                <p>تركيب وصيانة المواسير والحنفيات</p>
                <a href="#" class="btn btn-sm btn-outline-main">طلب الخدمة</a>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="service-card">
                <div class="service-icon"><i class="bi bi-hammer"></i></div>
                <h5>النجارة</h5>
                <p>تفصيل أبواب وأثاث خشبي</p>
                <a href="#" class="btn btn-sm btn-outline-main">طلب الخدمة</a>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="service-card">
                <div class="service-icon"><i class="bi bi-lightning-charge"></i></div>
                <h5>كهرباء</h5>
                <p>تركيب لمبات وتمديدات كهربائية</p>
                <a href="#" class="btn btn-sm btn-outline-main">طلب الخدمة</a>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="service-card">
                <div class="service-icon"><i class="bi bi-brush"></i></div>
                <h5>دهانات</h5>
                <p>تشطيب داخلي وخارجي</p>
                <a href="#" class="btn btn-sm btn-outline-main">طلب الخدمة</a>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-main mt-3">عرض كل الخدمات</a>
</div>

<div class="container order-form-section">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h3 class="order-form-title">اطلب خدمتك الآن</h3>
            <form>
                <div class="row mb-2">
                    <div class="col-md-6 mb-2"><input type="text" class="form-control" placeholder="الاسم رباعي"></div>
                    <div class="col-md-6 mb-2"><input type="email" class="form-control" placeholder="البريد الإلكتروني"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 mb-2"><select class="form-select"><option>اختر خدمتك</option></select></div>
                    <div class="col-md-6 mb-2"><input type="text" class="form-control" placeholder="العنوان بالتفصيل"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 mb-2"><select class="form-select"><option>المحافظة</option></select></div>
                    <div class="col-md-6 mb-2"><input type="date" class="form-control" placeholder="حدد اليوم المناسب"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 mb-2"><input type="time" class="form-control" placeholder="حدد الوقت المناسب"></div>
                    <div class="col-md-6 mb-2"><select class="form-select"><option>اختر الصنايعي</option></select></div>
                </div>
                <button type="submit" class="btn btn-main w-100 mt-2">تأكيد الحجز</button>
            </form>
        </div>
        <div class="col-md-5 text-center mt-4 mt-md-0">
            <h4 class="mb-3" style="color:#ff6600;">اطلب خدمتك الآن</h4>
            <p>املأ البيانات المطلوبة، واحنا هنتواصل معاك في أقرب وقت عشان نحدد الميعاد ونبدأ الشغل.</p>
        </div>
    </div>
</div>

<footer class="text-center mt-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4 mb-2">
                <h5>عن الموقع</h5>
                <a href="#" class="footer-link">من نحن</a>
            </div>
            <div class="col-md-4 mb-2">
                <h5>مسارات التعلم</h5>
                <a href="#" class="footer-link">سجل الطلبات</a>
                <a href="#" class="footer-link">اطلب خدمة</a>
                <a href="#" class="footer-link">اختر صنايعي</a>
                <a href="#" class="footer-link">الإعدادات</a>
            </div>
            <div class="col-md-4 mb-2">
                <h5>تواصل معنا</h5>
                <div>+201020298765<br>+20543294567<br>+212345678</div>
                <div class="mt-2">
                    <a href="#" class="footer-icon"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="footer-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-icon"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-3">Made by Sanayee &copy; 2024</div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
