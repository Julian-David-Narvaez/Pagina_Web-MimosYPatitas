function mostrarTexto(tipo) {
    var parrafo = document.getElementById('texto-parrafo');
    var botonRegresar = document.querySelector('.btn-regresar');

    if (tipo === 'nosotros') {
        parrafo.innerHTML = "Somos una empresa dedicada al cuidado y belleza estética de su mascota,<br />  contamos con un equipo tanto humano como técnico especializado con el fin <br />  de satisfacer las necesidades de cada uno de nuestros clientes, generándoles<br />  bienestar, calidad y respeto.";
    } 

    botonRegresar.style.display = 'inline'; 
}

function regresar() {
    var parrafo = document.getElementById('texto-parrafo');
    var botonRegresar = document.querySelector('.btn-regresar');

    
    parrafo.innerHTML = "Mimos y patitas contamos con el servicio de baño, grooming y peluqueria<br /> canina y felina siempre enfocado a realzar la belleza de la mascota,<br /> guiándonos por los estándares mundiales de cada una de las razas,<br /> implementando técnicas de vanguardia y utilizando materiales e insumos<br /> de primera calidad, siempre dirigidos a disminuir el estrés durante el<br /> servicio para obtener una experiencia agradable y de máximo bienestar<br /> para la mascota logrando el mejor resultado, así como la tranquilidad y<br /> seguridad de nuestros clientes.";
    botonRegresar.style.display = 'none'; 
}
