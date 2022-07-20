function MenuMobile(){
    var menu = document.getElementById("Menu-Mobile");
    var nav = document.getElementById("Nav");
    menu.classList.toggle('active');
    nav.classList.toggle('active');
}

document.addEventListener('mousemove', function(e){
    let eye = document.getElementById('Eye');
    var x = e.clientX;
    var y = e.clientY;
    eye.style.left = (x * 0.015) + 'px';
    eye.style.top = (y * 0.0145) + 'px';
})