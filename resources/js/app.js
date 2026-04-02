import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobil Ana Menüyü (Hamburger) Aç/Kapat
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Tıklanan eleman bir akordeon butonu DEĞİLSE menüyü kapat
        const links = menu.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });
    }

    // 2. Fonksiyon: Akordeon (Açılır/Kapanır) Menüleri Çalıştır
    function setupAccordion(btnId, menuId, iconId) {
        const toggleBtn = document.getElementById(btnId);
        const toggleMenu = document.getElementById(menuId);
        const toggleIcon = document.getElementById(iconId);

        if (toggleBtn && toggleMenu && toggleIcon) {
            toggleBtn.addEventListener('click', (e) => {
                e.preventDefault();
                toggleMenu.classList.toggle('hidden');
                toggleMenu.classList.toggle('flex');
                toggleIcon.classList.toggle('rotate-180');
                toggleIcon.classList.toggle('text-yellow-500');
            });
        }
    }

    // Ana Akordeonları Başlat
    setupAccordion('mobile-regions-btn', 'mobile-regions-menu', 'mobile-regions-icon');
    setupAccordion('mobile-services-btn', 'mobile-services-menu', 'mobile-services-icon');

    // 3. Mobil İç İçe Hizmetler (Sub-Services) Akordeonları
    const subServicesBtns = document.querySelectorAll('.mobile-sub-services-btn');
    subServicesBtns.forEach(subBtn => {
        subBtn.addEventListener('click', (e) => {
            e.preventDefault();
            // Tıklanan butonun hemen altındaki menüyü (kardeş div) bul
            const subMenu = subBtn.nextElementSibling;
            // Tıklanan butonun içindeki en sağdaki oku bul
            const icon = subBtn.querySelector('svg:last-child');

            if(subMenu) {
                subMenu.classList.toggle('hidden');
                subMenu.classList.toggle('flex');
            }
            if(icon) {
                icon.classList.toggle('rotate-180');
                icon.classList.toggle('text-yellow-500');
            }
        });
    });
});
