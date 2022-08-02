function Section(x){
    
    let Background = document.getElementById('Bg_img');

    let Subtitle = [document.getElementById("History-subtitle"), 
    document.getElementById("Mission-subtitle"), document.getElementById("Partners-subtitle"),
    document.getElementById("Founders-subtitle")];

    let Text = [document.getElementById("History"), document.getElementById("Mission"), 
    document.getElementById("Partners"), document.getElementById("Founders")];

    let Section = [document.getElementById("Section-History"), document.getElementById("Section-Mission"), 
    document.getElementById("Section-Partners"), document.getElementById("Section-Founders")];

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

        /* TAMANHO DA PÁGINA  E PLANO DE FUNDO*/
        if (x==='History'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        } else if (x==='Mission'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        } else if (x==='Partners'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        } else if (x==='Founders'){
            Background.style.background = 'url(images/Backgrounds/cover.png)';
            Background.style.backgroundSize= '100% 100%';
        }
    }
}
