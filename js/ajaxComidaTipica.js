var id = $_GET("id");

var btnNextComidaTipica = document.getElementById('btnNextComidaTipica'),
    btnPreviousComidaTipica = document.getElementById('btnPreviousComidaTipica'),
    errorBoxComidaTipica = document.getElementById('errorBoxComidaTipica'),
    divComidaTipica = document.getElementById('divComidaTipica'),
    loaderComidaTipica = document.getElementById('loaderComidaTipica');

var inicioComidaTipica=0, finComidaTipica=3;

function cargarComidaTipica(){
    divComidaTipica.innerHTML = '';

    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'leerComidaTipica.php?id='+id);

    loaderComidaTipica.classList.add('active');

    peticion.onload = function(){
        var datos = JSON.parse(peticion.responseText);

        if(datos.error){
            errorBoxComidaTipica.classList.add('active');
        }else{


            if(finComidaTipica<=3){
                btnPreviousComidaTipica.style.display ="none";
                btnPreviousComidaTipica.style.background ="none";
            }else{
                btnPreviousComidaTipica.style.display ="block";
                btnPreviousComidaTipica.style.background ="#1b1b1f";
            }

            if(finComidaTipica>=datos.length){
                btnNextComidaTipica.style.display ="none";
                btnNextComidaTipica.style.background ="none";
            }else{
                btnNextComidaTipica.style.display ="block";
                btnNextComidaTipica.style.background ="#1b1b1f";
            }

            for(let index = inicioComidaTipica; index<finComidaTipica; index++){
                const comidaTipica = datos[index];

                var card = document.createElement('div');
                card.className='card bg-dark text-white sliderLugar';

                card.innerHTML += "<img src='img/municipios/cardMunicipioTorreon.jpg' class='card-img imgsliderLugar'>";

                    var cardHijo=document.createElement('div');
                    cardHijo.className='card-img-overlay';

                    cardHijo.innerHTML += "<h5 class='card-title'>"+comidaTipica.nombre+"</h5>";
                    cardHijo.innerHTML += "<p class='card-text' style='text-align: justify;'>"+comidaTipica.historia+"</p>";

                card.appendChild(cardHijo);

                divComidaTipica.appendChild(card);
            }

        }
    };
    peticion.onreadystatechange = function(){
        if(peticion.readyState == 4 && peticion.status == 200){
            loaderComidaTipica.classList.remove('active');
        }
    };
    peticion.send();
}

window.onload = function(){
    this.cargarComidaTipica();
}

btnNextComidaTipica.addEventListener('click', function(){
    inicioComidaTipica+=1;
    finComidaTipica+=1;
    cargarComidaTipica();
});

btnPreviousComidaTipica.addEventListener('click', function(){
    inicioComidaTipica = inicioComidaTipica-1;
    finComidaTipica = finComidaTipica-1;
    cargarComidaTipica();
});
