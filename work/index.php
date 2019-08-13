<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD API NOTES WTIH PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="table-response">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody></tbody><!--Ajax and jquery-->
                </table>
        </div>
    
    </body>
</html>
<script type="text/javascript">
/* jquery */
$(document).ready (function(){
    fetch_data();
    function fetch_data()
    {
        $.ajax({url: "fetch-php",
        success: function(data)
        {
            $('tbody').html(data);
        }
        } )
    }
});
</script>