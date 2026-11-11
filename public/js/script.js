(function () {
    const body = document.body;
    const buka = () => body.classList.add('menu-open');
    const tutup = () => body.classList.remove('menu-open');

    document.getElementById('menuToggle')?.addEventListener('click', buka);
    document.getElementById('sidebarClose')?.addEventListener('click', tutup);
    document.getElementById('overlay')?.addEventListener('click', tutup);
    document.addEventListener('keydown', e => { if (e.key === 'Escape') tutup(); });
    document.querySelectorAll('.sidebar a.nav-link').forEach(a => a.addEventListener('click', tutup));

    function jam() {
        const el = document.getElementById('clock');
        if (!el) return;
        el.textContent = new Intl.DateTimeFormat('id-ID', {
            timeZone: 'Asia/Makassar', hour: '2-digit', minute: '2-digit', hour12: false
        }).format(new Date()).replace('.', ':') + ' WITA';
    }
    jam();
    setInterval(jam, 30000);
})();