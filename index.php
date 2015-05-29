<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="title">
        <h1 style="color: #3c763d; background-color: #dff0d8; border-color: #d6e9c6; padding:2%; text-align: center; margin-bottom: -1%">哈尔滨工业大学运动会运动员成绩实时播报</h1>
    </div>
    <div>
        <div class="chatWrapper">
            <ul id="chat">
            <?php 
                include_once('conf.php');
                $sql = mysql_query("select * from posts order by time desc limit 10");
                while($row = mysql_fetch_array($sql)) {
            ?>
                <li>
                    <div class="userFace"><img src="./img/hit.png" alt=""></div>
                    <div class="userSay">
                        <div class="inlineText">
                            <?php echo $row['post'] ?>
                            <br><br>
                            ---<?php echo $row['time'] ?>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="page">
                >><a href="./more.php" style="color: #3c763d">点击查看所有信息</a>
            </div>
            <div class="footer">
                <p>版权所有 哈工大校团委新媒体中心 2015</p>
            </div>
        </div>
    </div>
</body>
</html>