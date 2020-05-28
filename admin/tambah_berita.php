<?php
include "koneksi.php";
include 'template/header.php';
include 'template/topbar.php';
?>
<html>

<head>
    <title>Tutorial Cara Menggunakan CKEditor di PHP</title>
</head>

<body>
    <br />

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <form action="#" method="POST" name="postform" enctype="multipart/form-data">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td><textarea class="ckeditor" id="ckedtor" name="isi"></textarea></td>
            </tr>
            <tr>
                <td> </td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit" class="form-control text-light bg-primary" value="Submit" /></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php include 'template/footer.php'; ?>