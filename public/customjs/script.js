let nav = document.querySelector('nav')

window.addEventListener('scroll',function () {
if (window.pageYOffset > 100) {
    nav.classList.add('bg-dark', 'shadow')
} else {
    nav.classList.remove('bg-dark', 'shadow')
}
});
    if(window.location.pathname === '/'){
        nav.classList.add('bg-dark', 'shadow')
    }
    else{
        let nav = document.querySelector('nav')
        window.addEventListener('scroll',function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow')
        } else {
            nav.classList.remove('bg-dark', 'shadow')
        }
        });
    }