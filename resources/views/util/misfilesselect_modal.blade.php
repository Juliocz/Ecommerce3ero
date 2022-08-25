<div class="modal" id="modalfilesselect" tabindex="-1">
    <style>
        .ItemImg{


            overflow: hidden;
            margin: auto;
            display:grid;
            background-color: #EEEEEE;
            border-radius: 10px;
            padding: 10px;
        }
        .ItemImg:hover{
            transform: scale(1.1);
            cursor: pointer;
        }
        .ItemImg img{
            width: 70px;
            height: 70px;
            object-fit: cover;
        }
        .ItemImg label{
            max-width: 70px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
    </style>
    <div class="modal-dialog">
        <div class="modal-content" style="color:black">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Mis archivos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- ocultobackup --}}
                <div style="display: none;" id="back">
                    <div class="ItemImg" id="ItemImg">
                        <img src="" alt="none" id="imagen">
                        <label for="" id="name"></label>
                    </div>
                </div>
                {{-- ocultobackup --}}
                <div class="spinner-border text-success" role="status" id='loaderfilesselect' style="display:none;">
                    <span class="sr-only"></span>
                </div>
                <h4>Elije un archivo:</h4>
                <div style="display: flex;flex-wrap: wrap;" id="contenedor_files">
                </div>
            </div>
            <div class="modal-footer">
                <button id="si" type="button" class="btn btn-danger" data-bs-dismiss="modal">Si</button>
                <button id="no" type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


<script>

    //ejemplo de uso
    //var m=new ModalFilesSelect();m.show();m.chargeModalFilesSelect(function(){alert(this.something.name);});
    class ModalFilesSelect {

        static getElement(){return document.querySelector('#modalfilesselect');}
        static getLoaderFiles(){return ModalFilesSelect.getElement().querySelector('#loaderfilesselect');}
        static showLoaderFIles(){ModalFilesSelect.getLoaderFiles().style.display='block';}
        static hideLoaderFIles(){ModalFilesSelect.getLoaderFiles().style.display='none';}
        static getElementFileCopy(){return ModalFilesSelect.getElement().querySelector('#back').querySelector('#ItemImg').cloneNode(true);}
        static getContenedorFilesElm(){return ModalFilesSelect.getElement().querySelector('#contenedor_files');}
        static clearFilesList(){ModalFilesSelect.getContenedorFilesElm().innerHTML='';}
        static show(){$(ModalFilesSelect.getElement()).modal('show');}
        static hide(){$(ModalFilesSelect.getElement()).modal('hide');}
        show(){ModalFilesSelect.show();}
        hide(){ModalFilesSelect.hide();}

        constructor(){
            this.onclickItem=null;
        }

        //carga array de api name y url
        loadFilesToList(items){
            ModalFilesSelect.clearFilesList();
            for(var i of items){
                var el=ModalFilesSelect.getElementFileCopy();
                el.querySelector('#name').innerHTML=i.name;
                el.querySelector('#imagen').src=i.url;
                el.something=i;
                el.onclick=this.onclickItem;
                ModalFilesSelect.getContenedorFilesElm().appendChild(el);
            }
        }

        //carga archivos y se le pasa la funcion onclick de cada item
        chargeModalFilesSelect(oncallclickItem=function(){}) {
            this.onclickItem=oncallclickItem;
            ModalFilesSelect.showLoaderFIles();
            var thiss=this;
            var settings = {
                "url": "{{route('get_files_user')}}",
                xhrFields: { //para enviar credenciales coockies
                    withCredentials: true
                },
                crossDomain: true,
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": "",
            };
            $.ajax(settings).done(function(response) {
                console.log(response);
                showToastMsgSuccess("Archivos cargados");
                ModalFilesSelect.hideLoaderFIles();
                thiss.loadFilesToList(response);
            }).fail(function(jqXHR, textStatus) {
                console.log(jqXHR.responseText);
                ModalFilesSelect.hideLoaderFIles();
                showToastMsgError("Ocurrio un error al cargar archivos");
            });
        }


    }
</script>
