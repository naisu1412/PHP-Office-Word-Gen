<?php

include_once 'Sample_Header.php';
$value = "";
 if(isset($_POST['submit'])) {


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//echo $_POST["submit"];

//Upload File

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
       // echo "Sorry, there was an error uploading your file.";
    }


// Read contents
$name = basename(__FILE__, '.php');
$source = __DIR__ . "/uploads/{$_FILES["fileToUpload"]["name"]}";

//echo date('H:i:s'), " Reading contents from `{$source}`", EOL;
$phpWord = \PhpOffice\PhpWord\IOFactory::load($source);

// Save file
echo write($phpWord, basename(__FILE__, '.php'), $writers);




$value =  "<iframe src='results/$name.html'>";

 }

?>

    <!doctype html>

    <html lang="en">

    <head>
        <meta charset="utf-8">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <!-- ========================== Bootstrap main css ==========================  -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- ========================== inline styling ==========================  -->
        <style lang="">
            .col-md-6 {
                background-color: #e8eed6;
                padding: 5px;
                min-height: 800px;
            }
            
            .textarea {
                max-width: 50px;
            }
            
            .content {
                min-height: 300px;
            }
        </style>
    </head>

    <body>
        <!-- ========================== Main Content ==========================  -->

        <div class="container">
            <h1 class="text-center">PHP WORD</h1>
            
            <div class="col-md-6 write">
                <form id="docxform" method="post" action="gendocx.php">
                    <textarea id="htmlstring" name="htmlstring" class="form-control"></textarea>
                    <br>
                    <input type="submit" id="docx-button" value="Generate" class="btn btn-success">
                    <br>
                </form>
            </div>

            <div class="col-md-6 read">
             
             <div class="row">


                    <div class="upload">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"><br>
                            <div class="col-md-8">
                                Select Document to upload:<br>
                                <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-default"><br>
                                <input type="submit" value="Upload Document" name="submit" class="btn btn-success"><br>
                            </div>
                        </form>
                    </div>
                    <hr>

                </div>

                <div class="row">
                    <div class="output ">
                        Output
                        <div class="content">
                            <?php echo $value; ?>
                        </div>
                    </div>

                </div>

                




            </div>
        </div>







        <!-- ========================== Scripts ==========================  -->
        <!-- Bootsrap   -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Jquery   -->
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    </body>

    </html>