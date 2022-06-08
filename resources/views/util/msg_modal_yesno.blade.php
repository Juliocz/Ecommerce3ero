<div class="modal" id="modalSelectYesNo" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content" style="color:black">
        <div class="modal-header">
          <h5 class="modal-title" id="title">title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="msg">msg</p>
        </div>
        <div class="modal-footer">
          <button id="si" type="button" class="btn btn-danger" data-bs-dismiss="modal">Si</button>
          <button id="no" type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>


  <script>
      function showModalYesNoPersonalizado(call_si,call_no,title,message){
        document.querySelector("#modalSelectYesNo").querySelector("#si").onclick=call_si;
        document.querySelector("#modalSelectYesNo").querySelector("#no").onclick=call_no;
        document.querySelector("#modalSelectYesNo").querySelector("#title").innerHTML=title;
        document.querySelector("#modalSelectYesNo").querySelector("#msg").innerHTML=message;
        $("#modalSelectYesNo").modal('show');
      }
  </script>
