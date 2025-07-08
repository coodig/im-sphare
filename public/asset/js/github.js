 document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.readme-box a').forEach(link => {
            link.setAttribute('target', '_blank');
        });
    });
