document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#logo-link').addEventListener('click', function(event) {
        event.preventDefault(); // Предотвращаем стандартное поведение ссылки
        document.querySelector('#top').scrollIntoView({ behavior: 'smooth' }); // Плавный скролл
    });
});

