<script>
    function hideTabsBoostrap(tabs_container){
        for(var tab of tabs_container.children){
            tab.classList.remove('show');
            tab.classList.remove('active');
        }
    }

    //muestra un tab pestaña de boostrap, solo pasandole el elemento tab
    //oculta todos, luego muestra el elemento pasado
    function showTabBoostrap(elm_tab){
        hideTabsBoostrap(elm_tab.parentNode);//oculto todos los tabs del contenedor
        elm_tab.classList.add('show');//muestro el tab actual
        elm_tab.classList.add('active');
    }
    function showTabBoostrapById(elm_id){
        var elm_tab=document.querySelector('#'+elm_id);
        hideTabsBoostrap(elm_tab.parentNode);//oculto todos los tabs del contenedor
        elm_tab.classList.add('show');//muestro el tab actual
        elm_tab.classList.add('active');
    }
    function deleteElement(elm){
        elm.parentNode.remove(elm);
    }
    function formToObject(form) {
    var elements = form.elements;
    var obj ={};
    for(var i = 0 ; i < elements.length ; i++){
        var item = elements.item(i);
        obj[item.name] = item.value;
    }

    return obj;
}

//pasa un inputfile a imagen src
function inputFileToImageSrc(input_file,img_elm){

var output=img_elm;
output.src = URL.createObjectURL(input_file.files[0]);
output.onload = function() {
  URL.revokeObjectURL(output.src) // free memory
}
}
</script>
