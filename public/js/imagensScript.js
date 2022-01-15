const inputRef = document.querySelector('.input-imagens');
const listaRef = document.querySelector('.imagens-lista');

function previewImagens(){
    let listaHTML = '';
    for(let i=0; i<inputRef.files.length;i+=1 ){
        const file = inputRef.files[i];
        const tamanhoMB = file.size/1048576;

        const li =` 
            <li>
                <p>${file.name}</p>
                <span>${tamanhoMB.toFixed(2)} MB</span>
            </li>`;
        listaHTML += li; 
    }
    listaRef.innerHTML = listaHTML;

}