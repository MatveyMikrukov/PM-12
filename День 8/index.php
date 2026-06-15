<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs Platform</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

    <div class="container">

        <!-- ГЛАВНАЯ СТРАНИЦА -->
        <div id="page-main" class="site-page active-page">
            <header class="site-header">
                <div class="header-banner-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/банер.png" alt="Баннер" class="bg-banner-img">
                </div>
                
                <div class="header-content">
                    <div class="logo-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/Логотип.png" alt="Логотип" class="header-logo-img">
                        Programs
                    </div>
                    <nav class="nav-menu">
                        <a onclick="navigateTo('page-main')" class="active-link">Главная</a>
                        <a onclick="navigateTo('page-lessons')">Видео-уроки</a>
                        <a onclick="navigateTo('page-courses')">Курсы</a>
                        <a onclick="navigateTo('page-contacts')">Контакты</a>
                    </nav>
                    <button class="btn-login" onclick="showSuccessModal()">Войти</button>
                </div>
            </header>

            <main class="hero-section-clean">
                <h1 class="hero-title">Мобильные приложения для повседневной жизни граждан</h1>
            </main>

            <!-- ПЕРЕДЕЛАHHЫЕ ПРЕИМУЩЕСТВА -->
            <section class="grid-advantages">
                <div class="advantage-card">
                    <h3>Интерактивные разборы</h3>
                    <p>Пошаговые сценарии работы с популярными приложениями прямо на экране для быстрого освоения.</p>
                </div>
                <div class="advantage-card">
                    <h3>Видео для обучения</h3>
                    <p>Наглядные видео-инструкции по настройке и использованию мобильных сервисов.</p>
                </div>
                <div class="advantage-card">
                    <h3>Удобный формат</h3>
                    <p>Проходите уроки в любое время со своего смартфона, сразу применяя знания на практике.</p>
                </div>
            </section>

            <!-- ИСПРАВЛЕННЫЙ БЛОК МЕТОДИЧКИ -->
            <section class="download-section">
                <div class="download-info">
                    <h2>Скачать методичку по мобильным приложениям</h2>
                    <p>Подробный гайд по безопасной установке софта, список полезных российских приложений и инструкции по их настройке.</p>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/methodology.pdf" class="btn-download" download>Скачать PDF</a>
                </div>
            </section>
        </div>

        <!-- ВИДЕО-УРОКИ -->
        <div id="page-lessons" class="site-page">
            <header class="site-header">
                <div class="header-banner-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/банер.png" alt="Баннер" class="bg-banner-img">
                </div>
                <div class="header-content">
                    <div class="logo-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/Логотип.png" alt="Логотип" class="header-logo-img">
                        Programs
                    </div>
                    <nav class="nav-menu">
                        <a onclick="navigateTo('page-main')">Главная</a>
                        <a onclick="navigateTo('page-lessons')" class="active-link">Видео-уроки</a>
                        <a onclick="navigateTo('page-courses')">Курсы</a>
                        <a onclick="navigateTo('page-contacts')">Контакты</a>
                    </nav>
                    <button class="btn-login" onclick="showSuccessModal()">Войти</button>
                </div>
            </header>

            <div class="video-page-layout">
                <div class="video-player-container">
                    <div id="video-title" class="video-title-top">Урок 1. Обзор полезных мобильных приложений</div>
                    <div id="video-player" class="video-player">
                        <video src="<?php echo get_stylesheet_directory_uri(); ?>/lesson1.mp4" controls width="100%" height="100%" style="border-radius: 12px; object-fit: contain; background: #000;"></video>
                    </div>
                </div>
                <aside class="sidebar-lessons">
                    <div>Список уроков:</div>
                    <div class="lessons-list">
                        <button class="lesson-btn active-lesson" onclick="switchLesson(1, this)">1. Обзор приложений</button>
                        <button class="lesson-btn" onclick="switchLesson(2, this)">2. Настройка сервисов</button>
                        <button class="lesson-btn" onclick="switchLesson(3, this)">3. Безопасность данных</button>
                        <button class="lesson-btn" onclick="switchLesson(4, this)">4. Итоги курса</button>
                    </div>
                </aside>
            </div>
        </div>

        <!-- СТРАНИЦА КУРСОВ (ПЕРЕДЕЛАHHЫЕ КАРТОЧКИ ПО ТЕМЕ) -->
        <div id="page-courses" class="site-page">
            <header class="site-header">
                <div class="header-banner-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/банер.png" alt="Баннер" class="bg-banner-img">
                </div>
                <div class="header-content">
                    <div class="logo-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/Логотип.png" alt="Логотип" class="header-logo-img">
                        Programs
                    </div>
                    <nav class="nav-menu">
                        <a onclick="navigateTo('page-main')">Главная</a>
                        <a onclick="navigateTo('page-lessons')">Видео-уроки</a>
                        <a onclick="navigateTo('page-courses')" class="active-link">Курсы</a>
                        <a onclick="navigateTo('page-contacts')">Контакты</a>
                    </nav>
                    <button class="btn-login" onclick="showSuccessModal()">Войти</button>
                </div>
            </header>

            <div class="grid-3-columns">
                <div class="course-card">
                    <h3>Государственные и бытовые сервисы</h3>
                    <p>Освойте приложения «Госуслуги», «Мой Налог», мобильный банкинг и сервисы ЖКХ для решения вопросов без очередей.</p>
                </div>
                <div class="course-card">
                    <h3>Повседневные и социальные приложения</h3>
                    <p>Научитесь уверенно пользоваться навигаторами, службами доставки, мессенджерами и приложениями для записи к врачу.</p>
                </div>
                <div class="course-card">
                    <h3>Безопасность в мобильной среде</h3>
                    <p>Разберитесь, как защитить смартфон от мошенников, настроить биометрию, управлять разрешениями и безопасно платить в сети.</p>
                </div>
            </div>
        </div>

        <!-- КОНТАКТЫ -->
        <div id="page-contacts" class="site-page">
            <header class="site-header">
                <div class="header-banner-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/банер.png" alt="Баннер" class="bg-banner-img">
                </div>
                <div class="header-content">
                    <div class="logo-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/Логотип.png" alt="Логотип" class="header-logo-img">
                        Programs
                    </div>
                    <nav class="nav-menu">
                        <a onclick="navigateTo('page-main')">Главная</a>
                        <a onclick="navigateTo('page-lessons')">Видео-уроки</a>
                        <a onclick="navigateTo('page-courses')">Курсы</a>
                        <a onclick="navigateTo('page-contacts')" class="active-link">Контакты</a>
                    </nav>
                    <button class="btn-login" onclick="showSuccessModal()">Войти</button>
                </div>
            </header>

            <div class="feedback-form-container">
                <h2 class="form-section-title">Форма обратной связи</h2>
                <form onsubmit="event.preventDefault(); showSuccessModal();">
                    <input type="text" placeholder="Ваше имя" class="form-input" required>
                    <input type="email" placeholder="Ваш Email" class="form-input" required>
                    <textarea placeholder="Ваше сообщение" class="form-input" rows="5" required style="resize: vertical;"></textarea>
                    <button type="submit" class="btn-submit-form">Отправить заявку</button>
                </form>
            </div>
        </div>

        <!-- ФУТЕР -->
        <footer class="site-footer">
    <div>© 2026 Programs Platform. Все права защищены.</div>
    <a href="/politika-obrabotki-personalnyh-dannyh/" target="_blank">Политика обработки персональных данных</a>
            <div class="footer-contacts">
                <span class="footer-phone-label">Телефон:</span>
                <a href="tel:+79531310718" class="footer-phone-link">+7 (953) 131-07-18</a>
                <span style="margin-left: 10px;">Связь:</span>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mikrukovmatvej921@gmail.com" target="_blank">Gmail</a>
                <a href="https://t.me/winirgt" target="_blank">Telegram</a>
                <a href="https://vk.com/winirgt" target="_blank">ВКонтакте</a>
            </div>
        </footer>

    </div> 

    <!-- ДОСТУПНОСТЬ -->
    <div class="acc-widget-container">
        <button class="acc-widget-toggle" onclick="toggleAccMenu()" title="Режим доступности">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
            </svg>
        </button>

        <div id="acc-widget-menu" class="acc-widget-menu">
            <div class="acc-menu-header">Доступность</div>
            
            <button id="widget-btn-font" class="accessibility-btn" onclick="toggleLargeFont()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="4 7 4 4 20 4 20 7"></polyline>
                    <line x1="9" y1="20" x2="15" y2="20"></line>
                    <line x1="12" y1="4" x2="12" y2="20"></line>
                </svg>
                <span>Увеличенный шрифт</span>
            </button>

            <button id="widget-btn-contrast" class="accessibility-btn" onclick="toggleHighContrast()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 2a10 10 0 0 0 0 20V2z"></path>
                </svg>
                <span>Высокий контраст</span>
            </button>
        </div>
    </div>

    <!-- МОДАЛКА -->
    <div id="success-modal" class="modal-overlay" onclick="closeSuccessModal(event)">
        <div class="modal-box" style="background: white; padding: 30px; border-radius: 12px; text-align: center; max-width: 400px; width: 90%; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
            <h3 style="color: #1a4499; margin-bottom: 15px; font-size: 1.4rem;">Действие выполнено!</h3>
            <p style="color: #555; margin-bottom: 20px; font-size: 0.95rem;">Операция прошла успешно. Данное окно создано для демонстрации.</p>
            <button onclick="document.getElementById('success-modal').classList.remove('active')" style="background: #1a4499; color: white; border: none; padding: 10px 25px; border-radius: 20px; font-weight:700; cursor:pointer;">Отлично</button>
        </div>
    </div>

    <!-- СКРИПТЫ -->
    <script>
        function navigateTo(pageId) {
            const pages = document.querySelectorAll('.site-page');
            pages.forEach(page => page.classList.remove('active-page'));

            const targetPage = document.getElementById(pageId);
            if (targetPage) {
                targetPage.classList.add('active-page');
            }

            const links = document.querySelectorAll('.nav-menu a');
            links.forEach(link => link.classList.remove('active-link'));

            if (event && event.currentTarget) {
                event.currentTarget.classList.add('active-link');
            }
            
            document.getElementById('acc-widget-menu').classList.remove('open');
        }

        const lessonsContent = {
            1: { title: "Урок 1. Обзор полезных мобильных приложений", video: `<video src="<?php echo get_stylesheet_directory_uri(); ?>/lesson1.mp4" controls width="100%" height="100%" style="border-radius: 12px; object-fit: contain; background: #000;"></video>` },
            2: { title: "Урок 2. Настройка сервисов и личных кабинетов", video: `<video src="<?php echo get_stylesheet_directory_uri(); ?>/lesson2.mp4" controls width="100%" height="100%" style="border-radius: 12px; object-fit: contain; background: #000;"></video>` },
            3: { title: "Урок 3. Безопасность данных и защита от спама", video: `<video src="<?php echo get_stylesheet_directory_uri(); ?>/lesson3.mp4" controls width="100%" height="100%" style="border-radius: 12px; object-fit: contain; background: #000;"></video>` },
            4: { title: "Урок 4. Итоговое тестирование по безопасности", video: `<video src="<?php echo get_stylesheet_directory_uri(); ?>/lesson4.mp4" controls width="100%" height="100%" style="border-radius: 12px; object-fit: contain; background: #000;"></video>` }
        };

        function switchLesson(lessonId, btnElement) {
            const data = lessonsContent[lessonId];
            if (data) {
                document.getElementById('video-title').innerText = data.title;
                document.getElementById('video-player').innerHTML = data.video;
            }

            const buttons = document.querySelectorAll('.lesson-btn');
            buttons.forEach(btn => btn.classList.remove('active-lesson'));
            btnElement.classList.add('active-lesson');
        }

        function toggleAccMenu() {
            document.getElementById('acc-widget-menu').classList.toggle('open');
        }

        function toggleLargeFont() {
            document.body.classList.toggle('acc-large-font');
            document.getElementById('widget-btn-font').classList.toggle('active-acc-btn');
        }

        function toggleHighContrast() {
            document.body.classList.toggle('acc-high-contrast');
            document.getElementById('widget-btn-contrast').classList.toggle('active-acc-btn');
        }

        function showSuccessModal() {
            document.getElementById('success-modal').classList.add('active');
        }

        function closeSuccessModal(event) {
            if (event.target.id === 'success-modal') {
                document.getElementById('success-modal').classList.remove('active');
            }
        }
    </script>

</body>
</html>