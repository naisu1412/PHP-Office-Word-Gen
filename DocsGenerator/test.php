<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>


    Save
    <form id="docxform" method="post" action="gendocx.php">
        <textarea  id="htmlstring" name="htmlstring" ></textarea>
        <input type="submit" id="docx-button" value="Generate">

        <input type="submit" id="debug" value="debugProblem">
    </form>
    <hr>
    Open



    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // console.log(  $('#htmlstring').val() );

            //  $('docx-button').click(function() {
            //      $('#htmlstring').val( $('#myEditor').html() );

            //  });

            // console.log( $('#htmlstring').val() );
        });
    </script>
</body>

</html>