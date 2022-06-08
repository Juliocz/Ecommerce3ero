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
</script>
