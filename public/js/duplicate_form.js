
const options = document.querySelector('.select-create');
let value_after = null

options.addEventListener('click', (e) => {
    if(value_after != e.target.value){
        let html =  document.getElementById('content_form')
        let html_collection = html.children
        let collection_add = new Array(4)
        for(let i = 1; i <= e.target.value; i++){
            if(document.getElementsByName(`${html_collection[0].name}_${i}`)){
                
                if(!document.querySelector(`[name = "${html_collection[0].name}_${i}"]`)){
                    let element = document.createElement('input')
                    element.setAttribute('name', `${html_collection[0].name}_${i}`)
                    element.setAttribute('type', "text")
                    element.classList.add('title-form')
                    html.appendChild(element)
                }
                if(!document.querySelector(`[name = "${html_collection[1].name}_${i}"]`)){
                    let file = document.createElement('input')
                    file.setAttribute('file', `${html_collection[1].name}_${i}`)
                    file.setAttribute('type', `file`)
                    html.appendChild(file)
                }
                if(!document.querySelector(`[name = "${html_collection[2].name}_${i}"]`)){
                    let textarea = document.createElement('textarea')
                    textarea.setAttribute('name', `${html_collection[2].name}_${i}`)
                    html.appendChild(textarea)
                }

            }
        }
        value_after = e.target.value
    }
})
