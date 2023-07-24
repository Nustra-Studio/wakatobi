let nav = document.querySelector('nav')
    function remove() {
        nav.classList.remove('bg-dark', 'shadow')
    }
    remove()
    window.addEventListener('scroll',function () {
        nav.classList.remove('bg-dark', 'shadow')
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow')
    } else {
        nav.classList.remove('bg-dark', 'shadow')
    }
    });