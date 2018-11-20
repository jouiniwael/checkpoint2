<?php
$temps = 365*24*3600;//$temps = 60;
$cookie_name = "choixcss";
setcookie ($cookie_name,60 + time());
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
if(isset($_COOKIE[$cookie_name])) {
    echo  "<link rel=\"stylesheet\" href=\"defaut.css\">";
    } else {
    echo  " <link rel=\"stylesheet\" href=\"special.css\">";
    }
    ?>




</head>
<body>

<h1 class="hdefault hspecial">Lorem.</h1>
<p class="pdefault pspecial">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam ab inventore vitae alias laboriosam exercitationem
    provident nemo quis blanditiis repellat vero porro earum at, quod adipisci accusantium obcaecati aperiam
    temporibus.</p>


</body>
</html>