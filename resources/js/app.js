import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

//Codice per modale conferma eliminazione

const deleteButtons = document.querySelectorAll('.delete');
const modalElement = document.getElementById('modal');
const closeElements = document.querySelectorAll('.close');


for(let i = 0; i < deleteButtons.length; i++){
    const deleteButton = deleteButtons[i];

    deleteButton.addEventListener('click', function(){
        modalElement.classList.add('visible');
    });
}

for(let i = 0; i < closeElements.length; i++){

    const closeElement = closeElements[i];

    closeElement.addEventListener('click', function(){
    
        modalElement.classList.remove('visible');
    });
}