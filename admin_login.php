<?php include('admin_db.php') ?>
<HTML>
<head>
    <title>Admin Login</title>
</head>
<body>
<div class="container"><center>
    <form method="post" action="">
        <div id="div_login">
            <h1>Admin Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="username" placeholder="Username" />
            </div>
            <br><br>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="password" placeholder="Password"/>
            </div>
            <br><br><br>
            <div>
                <input type="submit" value="Submit" name="submit" id="submit" />
            </div>
        </div>
    </form>
</div>
</center>
</body>
</HTML>

