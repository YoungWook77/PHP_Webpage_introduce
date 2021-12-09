<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/common.css">
        <link rel="stylesheet" type="text/css" href="../css/member.css">
        <script>
            function login_check() {
                if(!document.login_form.id.value)
                {
                    alert("아이디를 입력하세요");
                    document.login_form.id.focus();
                    return;
                }
                if(!document.login_form.pass.value)
                {
                    alert("비밀번호를 입력하세요");
                    document.login_form.pass.focus();
                    return;
                }
                document.login_form.submit();
            }
        </script>
    </head>

    <body>
        <div id="wrap">
            <div id="header">
                <?php include "../lib/top_login2.php"; ?>
            </div> <!-- end of header -->
        
            <div id="menu">
                <?php include "../lib/top_menu2.php"; ?>
            </div> <!-- end of menu -->
        
            <div id="content">
                <div id="col1">
                    <div id="left_menu">
                        <?php include "../lib/left_menu.php"; ?>
                    </div> <!--end of left_menu -->
                </div> <!--end of col1 -->

                <div id="col2">
                    <form name="login_form" method="post" action="login_result.php">
                    <div id="title">
                        <img src="../img/title_login.gif">
                    </div> <!--end of title -->
                    <div id="login_form">
                        <img id="login_msg" src="../img/login_msg.gif">
                    <div class="clear"></div>

                    <div id="login1">
                        <img src="../img/login_key.gif">
                    </div> <!--end of login1 -->

                    <div id="login2">
                    <div id="id_input_button">
                    <div id="id_pw_title">
                        <ul>
                        <li><img src="../img/id_title.gif"></li>
                        <li><img src="../img/pw_title.gif"></li>
                        </ul>
                    </div> <!--end of id_pw_title -->
                    <div id="id_pw_input">
                        <ul>
                        <li><input type="text" name="id" class="login_input" required></li>
                        <li><input type="password" name="pass" class="login_input" required></li>
                        </ul>
                    </div>
                    <div id="login_button">
                        <input type="image" src="../img/login_button.gif"
                        onclick="document.member_form.submit()">
        </div>
        </div>

        <div class="clear"></div>
        <div id="login_line"></div>
        <div id="join_button">
        <img src="../img/no_join.gif">&nbsp;&nbsp;&nbsp;&nbsp;<a href="../member/instertForm.php">
        <img src="../img/join_button.gif"></a>
        </div>
        </div>
        </div>

        </form>
        </div>
        </div>
        </div>

        </body>
        </html>
                            