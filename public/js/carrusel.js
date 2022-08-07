const grande = document.querySelector('.grande')  ? document.querySelector('.grande') : false
const punto = document.querySelectorAll('.punto') ? document.querySelector('.punto') : false

const carrusel = (punto, grande) => {
    punto.forEach( ( cadaPunto , i )=> {
        punto[i].addEventListener('click',()=>{
            let posicion  = i
            let operacion = posicion * -50
            grande.style.transform = `translateX(${ operacion }%)`
            punto.forEach( ( cadaPunto , i )=>{
                punto[i].classList.remove('activo')
            })
            punto[i].classList.add('activo')
        })
    })
}

if(punto && grande){
    carrusel(punto, grande)
}