<script>

    //fu
    function uploadFilePost(input_file,onSuccess,onError){
            console.log(input_file);
            var formData = new FormData();
            formData.append('section', 'general');
            formData.append('action', 'previewImg');

            //archivo nombre del archivo, el otro es el id del input, nombre archivo original y tipo lo da el input
            formData.append('archivo', input_file.files[0]);
            var request =$.ajax({
            url: "{{route('upload_file_user')}}",
            xhrFields: {//para enviar credenciales coockies
            withCredentials: true
            },
            data: formData,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success: function(data){
            console.log(data);
            onSuccess(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log("Status: " + textStatus);
            console.log("Error: " + errorThrown);
            onError(XMLHttpRequest);
            }
            });
        }
</script>
