<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>drag and drop</title>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="{{asset('assets/script/dropzone.js')}}"></script>
    <style>
        #upload{
            padding:30px;
            border: 1px dotted blue;
        }

        #my-awesome-dropzone {
            border:1px solid black;
        }
    </style>
    <!-- <link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}"> -->
</head>
<body>

        <form action="/dad"
          class="dropzone"
          id="my-awesome-dropzone">
              {!! csrf_field() !!}
              <div id="upload">

                </div>
          </form>


    <div id="preview" style="display:none">
        <img src="" alt="" width="100px" height="100px">
    </div>
    <div id="response">
        <p><strong></strong></p>
    </div>
    <script>
    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        previewsContainer: '#preview',
        clickable: false,
        success: function (file, response) {
            if(response['status'] == 'success') {
                $result = '<img src="'+ response['filename'] +'" alt="" width="100px" height="100px">';
                $('#response').append($result);
            }
        }
    };
    </script>


</body>
</html>
