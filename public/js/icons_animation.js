let content_icons = document.querySelectorAll('.animation-component')

function changueColor(){
    content_icons.forEach( item => {
        randomColor(item)
    })
}

function randomNumber(){
    let matriz = []
        for(index = 0; index < 6; index++){
            let random = Math.floor(Math.random() * (10 - 0)) + 0
            matriz.push(random)
        }
    return matriz
}

function randomColor(item){
    let ran = randomNumber()
    let color = `#ff${ran[2]}${ran[3]}${ran[4]}${ran[5]}`
    item.style.color =  color
}   
