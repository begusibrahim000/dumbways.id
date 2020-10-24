let list = ['php','javascript','koklin','python']
let data = 'php'

function logicArray(list, data) {
    list.forEach(element => {
        if(element == data) {
            document.write(`${element} => true <br/>`)
        }else {
            document.write(`${element} => false <br/>`)
        }
    })
}

logicArray(list,data)