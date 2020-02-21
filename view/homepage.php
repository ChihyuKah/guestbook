<?php


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Guestbook</title>
</head>
<body>

<!--<form method="post">-->
<!--    <div class="form-row">-->
<!--        <div class="form-group col-md-6">-->
<!--            <label for="email">E-mail:</label>-->
<!--            <input type="text" id="email" name="email" class="form-control" value=""/>-->
<!--        </div>-->
<!--        <div></div>-->
<!--    </div>-->
<!---->
<!--    <fieldset>-->
<!--        <legend>Address</legend>-->
<!---->
<!--        <div class="form-row">-->
<!--            <div class="form-group col-md-6">-->
<!--                <label for="city">City:</label>-->
<!--                <input type="text" id="city" name="city" class="form-control" value=""/>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group col-md-6">-->
<!--                <label for="streetnumber">Street number:</label>-->
<!--                <input type="text" id="streetnumber" name="streetnumber" class="form-control" value=""/>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-row">-->
<!--            <div class="form-group col-md-6">-->
<!--                <label for="city">City:</label>-->
<!--                <input type="text" id="city" name="city" class="form-control" value=""/>-->
<!---->
<!--            </div>-->
<!--            <div class="form-row">-->
<!--                <div class="form-group col-md-6">-->
<!--                    <label for="zipcode">Zipcode</label>-->
<!--                    <input type="text" id="zipcode" name="zipcode" class="form-control" value=""/>-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--    </fieldset>-->
<!--</form>-->

<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
        <td><strong>GuestBoooooooooooooooooooooook</strong></td>
    </tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form id="form1" name="form1" method="post" action="addguestbook.php">
            <td>
                <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td width="117">Name</td>
                        <td width="14">:</td>
                        <td width="357"><input name="name" type="text" id="name" size="40" /></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>:</td>
                        <td><input name="email" type="text" id="email" size="40" /></td>
                    </tr>
                    <tr>
                        <td valign="top">Content</td>
                        <td valign="top">:</td>
                        <td><textarea name="comment" cols="40" rows="3" id="comment"></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
