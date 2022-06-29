<?php
include 'includes/connect.db.php';
if (isset($_POST['save']) && $_POST['save'] == "ok") {
    $sql    = "UPDATE company_users SET mail = '".$_POST['mail']."', username = '".$_POST['username']."' WHERE userID = '".$_POST['userId']."'";
    $result = $conn->query($sql);
}

if (isset($_POST['delete'])) {
    $sql    = "DELETE FROM company_users WHERE userID = '".$_POST['delete']."'";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="nl-NL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="nav-title">
                <h1>Dashboard</h1>
            </div>
            <div class="nav-links">
                <ul>
                    <li>
                        <button id="notifications" class="btn-clr">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                        </button>
                        <div id="notifications-box" class="notifications-box dis">
                            <div class="notifi-ctn">
                                <div class="note">
                                    <div class="note-title">
                                        <h4>Update</h4>
                                    </div>
                                    <div class="note-info">
                                        <span>Your update is ready</span>
                                    </div>
                                    <div class="note-x">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="note active">
                                    <div class="note-title">
                                        <h4>New ticket</h4>
                                    </div>
                                    <div class="note-info">
                                        <span>New ticket aangemeld</span>
                                    </div>
                                    <div class="note-x">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="note active">
                                    <div class="note-title">
                                        <h4>New ticket</h4>
                                    </div>
                                    <div class="note-info">
                                        <span>New ticket aangemeld</span>
                                    </div>
                                    <div class="note-x">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="note">
                                    <div class="note-title">
                                        <h4>New ticket</h4>
                                    </div>
                                    <div class="note-info">
                                        <span>New ticket aangemeld</span>
                                    </div>
                                    <div class="note-x">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="note">
                                    <div class="note-title">
                                        <h4>New ticket</h4>
                                    </div>
                                    <div class="note-info">
                                        <span>New ticket aangemeld</span>
                                    </div>
                                    <div class="note-x">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="note">
                                    <div class="note-title">
                                        <h4>New ticket</h4>
                                    </div>
                                    <div class="note-info">
                                        <span>New ticket aangemeld</span>
                                    </div>
                                    <div class="note-x">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><button id="viewusers" class="btn-clr">Gebruikers</button></li>
                    <li><button id="vieworders" class="btn-clr">Bestellingen</button></li>
                    <li><button id="lougoutbtn" class="bar-btn orange">Logout</button></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
    	<div class="wrapper">
            <section class="info-section">
                <div class="card-box">
                    <div class="card-box-head">
                        <h2>Gebruikers</h2>
                    </div>
                    <div class="card-box-content">
                        <h2>
                            16
                        </h2>
                    </div>
                </div>
                 <div class="card-box">
                    <div class="card-box-head">
                        <h2>Bestellingen</h2>
                    </div>
                    <div class="card-box-content">
                        <h2>16</h2>
                    </div>
                </div>
            </section>
            <section class="table-section dis" id="orders">
                <div class="card-box">
                    <div class="card-box-head">
                        <h2>Bestellingen</h2>
                    </div>
                    <div class="table-box-content">
                        <table>
                            <tr>
                                <th>#OrderID</th>
                                <th>E-mail</th>
                                <th>Product</th>
                                <th>Actie</th>
                            </tr>
                            <tbody id="showdata">
                            <!-- <tr>
                                <td>1</td>
                                <td>testeamil@gmail.com</td>
                                <td>4jaar plan</td>
                                <td><button class="btn danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>testeamil@gmail.com</td>
                                <td>4jaar plan</td>
                                <td><button class="btn danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>testeamil@gmail.com</td>
                                <td>4jaar plan</td>
                                <td><button class="btn danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>testeamil@gmail.com</td>
                                <td>4jaar plan</td>
                                <td><button class="btn danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            </tr> -->
                            </tbody> 
                        </table>
                    </div>
                </div>
            </section>
            <section class="table-section" id="users">
                <div class="card-box">
                    <div class="card-box-head">
                        <h2>Gebruikers</h2>
                    </div>
                    <div class="table-box-content">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Gebruiker</th>
                                <th>Email</th>
                                <th>Actie</th>
                            </tr>
                            <tbody>
                                <?php include 'includes/load.table.php'; ?>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </section>

            <!-- The Modal -->
            <div id="editForm" class="modal">
              <!-- Modal content -->
                <div class="modal-content">
                  <div class="modal-header">
                    <h2>Edit</h2>
                    <span class="close">&times;</span>
                  </div>
                  <div class="modal-body">
                    <form method="post" id="editModal">
                        <div class="form-control">
                            <label>Gebruiker:</label>
                            <input id="editUser" type="text" name="username">
                        </div>
                        <div class="form-control">
                            <label>E-mail:</label>
                            <input id="editMail" type="email" name="mail">
                        </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="userId" id="userId">
                            <input type="hidden" name="save" value="ok">
                            <button id="closeBtn" type="button" class="bar-btn danger">Terug</button>
                            <button id="saveBtn" type="submit" class="bar-btn sky">Opslaan</button>
                        </div>
                    </form>
                </div>
            </div>

            <section class="footer-section">
                <footer class="card-box">
                    <span>Webshop ©Copyright 2022</span>
                </footer>
            </section>
    	</div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./assets/js/app.js"></script>
<script type="text/javascript">

    var uid = document.getElementById('userId');
    var editUser = document.getElementById('editUser');
    var editMail = document.getElementById('editMail');

    function edit(click_id, form_id) {
        console.log(click_id);
        modal.style.display = "block";
        uid.setAttribute("value", click_id);
        editUser.value = document.getElementById("u"+click_id).value;
        editMail.value = document.getElementById("m"+click_id).value;
    }

    $("#editModal").on( "submit", function() {
        var dataString = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "dashboard.php",
            data: dataString,
                success: function(){
                console.log(this);
                    var trid = document.getElementById('tr'+uid.value);
                    trid.childNodes[1].innerText = editUser.value;
                    trid.childNodes[2].innerText = editMail.value;
                }
        })
        return false;
    });

    function delbtn(click_id) {
        $.ajax({
            type: "POST",
            url: "dashboard.php",
            data: {delete: click_id},
                success: function(){
                 document.getElementById('tr'+click_id).remove();
                }
        })
    }

    $('#notifications').click( function() {
        $('#notifications-box').toggleClass('active');
        // $('#notifications-box').toggleClass('dis').toggleClass('notifications-box');
    });

    $('#vieworders').click( function () {
        document.getElementById('users').classList.add("dis");
        document.getElementById('orders').classList.remove("dis");
    });

    $('#viewusers').click( function () {
        document.getElementById('users').classList.remove("dis");
        document.getElementById('orders').classList.add("dis");
    });

    $('#lougoutbtn').click( function () {
        window.location.replace("dashboard.php?logout=true");
    });

</script>
</html>