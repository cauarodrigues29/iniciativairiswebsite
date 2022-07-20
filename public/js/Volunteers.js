function Steps(x){
    
    let Background = document.getElementById('Bg_img');

    let Subtitle = [document.getElementById("Steps-subtitle"), 
    document.getElementById("Requirements-subtitle"), document.getElementById("Schedule-subtitle"),
    document.getElementById("Questions-subtitle")];

    let Text = [document.getElementById("Steps"), document.getElementById("Requirements"), 
    document.getElementById("Schedule"), document.getElementById("Questions")];

    let Section = [document.getElementById("Section-Steps"), document.getElementById("Section-Requirements"), 
    document.getElementById("Section-Schedule"), document.getElementById("Section-Questions")];

    for (let i = 0; i < Subtitle.length; i++){

        /* SUBTÍTULO */
        if (Subtitle[i]===document.getElementById(x+"-subtitle")){
            Subtitle[i].classList.add("Active");
        }else {
            Subtitle[i].classList.remove("Active");
        }

        /* TEXTO */
        if (Text[i]===document.getElementById(x)){
            Text[i].classList.add("Active");
        }else {
            Text[i].classList.remove("Active");
        }

        /* SEÇÃO */
        if (Section[i]===document.getElementById("Section-"+x)){
            Section[i].classList.add("On-section");
        }else {
            Section[i].classList.remove("On-section");
        }

        /* TAMANHO DA PÁGINA */
        if (x==='Steps'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        } else if (x==='Requirements'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        } else if (x==='Schedule'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        } else if (x==='Questions'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        }
    }
}

function Show_informations(x,y,z){
    x.classList.toggle("Show");
    y.classList.toggle("Show");

    var height = (z.offsetHeight/10);
    if (x.classList.contains('Expanded')){
        z.style.height = (height - 30) + 'rem';
        x.classList.remove('Expanded');
    }else {
        z.style.height = (height + 30) + 'rem';
        x.classList.add('Expanded');
    }
    z.style.transition = '.5s';
}

function Section(a,b,c,d, e){
    a.classList.toggle("Show-btn");
    b.classList.toggle("Show-btn");
    c.classList.toggle("Show-questions");
    d.classList.toggle("Show-questions");
    e.classList.toggle("Show-btn");
}