<html>
    <head>
        <title>FORM</title>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- jQuery UI library -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- jQuery External File -->
        <script src="http://localhost/dashboard/examble/task/task_2/assets/main.js"></script>
        <style>
            ul{
                background-color:white;
                cursor:pointer;
            }
            li{
                padding:12px;
            }
             pre{
                background-color:#e87c51;
            }
           
        </style>
    </head>
    <body>
        <div id="container" style="width:500px;">
            <label>ZIP CODE</label>
            <input type="text" name="zip_code" id="zip_code" placeholder="Enter zip code">
            <div id="zip_code_list"></div>
        </div>
        <script>
            $(document).ready(function(){
                $( "#zip_code_list" ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url:"ajax-search.php",
                            method:"GET",
                            dataType:"JSON",
                            data:{
                                search: request
                            }
                        })
                        .done(function(data){
                            response(data);
                        })
                    }
                });
            });
        </script>
    </body>
</html>