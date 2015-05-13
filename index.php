<!DOCTYPE html>
<html>
<!-------------------------------------HEAD---------------------------------------------------------------------------->
    <?php
    require 'head.php';
    ?>
<!-------------------------------------BODY---------------------------------------------------------------------------->
    <body>
    <?php
        $str = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
        $lang= substr("$str", 0, 2);
        //var_dump($lang);
        //$lang="en";
        if (isset ($_GET["ru"])){
            $lang="ru";
        }
        if (isset ($_GET["en"])) {
            $lang = "en";
        }
        if (isset ($_GET["ua"])){
            $lang="ua";
        }
        $array = parse_ini_file($lang.".ini"); //Open the corresponding language file
    ?>
    <div class="container">
        <div  style="height: 35px" align="center">
            <div class="space"><a href="index.php?ua" ><img src="images/flags/UA.png"  alt="UA"></a></div>
            <div class="space"><a href="index.php?ru" ><img src="images/flags/RU.png" alt="RU"></a></div>
            <div class="space"><a href="index.php?en" ><img src="images/flags/US.png" alt="US"> </a></div>
        </div>
        <?php
        include 'file.php';
        ?>
         <div class="panel panel-default">
            <table class="table table-bordered">                                                    <!-- Table contacts -->
                <tr>
                    <td><?php echo $array[$contacta["name"]] ?></td>
                    <td><?php echo $array[$contactb["name"]] ?></td>
                    <td rowspan="7" width="30%"><img src="images/ava.jpg" alt="Foto" style="float: right"></td>
                </tr>
                <tr>
                    <td width="30%"><?php echo $array[$contacta["date"]] ?></td>
                    <td width="47%"><?php echo $array[$contactb["date"]] ?></td>
                <tr>
                    <td><?php echo $array[$contacta["region"]] ?></td>
                    <td><?php echo $array[$contactb["region"]] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array[$contacta["phone"]] ?></td>
                    <td><?php echo $array[$contactb["phone"]] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array[$contacta["email"]] ?></td>
                    <td><?php echo $array[$contactb["email"]] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array[$contacta["skype"]]?></td>
                    <td><?php echo $array[$contactb["skype"]] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array[$contacta["qip"]]?></td>
                    <td><?php echo $array[$contactb["qip"]] ?></td>
                </tr>
            </table>
        </div>
        <div class="panel panel-default">                                                                   <!-- Content -->
            <h1 style="text-align: center">
                <?php
                    $name = "Ivan";
                    $day = 22;
                    $month = 05;
                    $year = 1989;
                    $summ = $day + $month + $year;
                    if(($summ % 2) == 0){
                        $summa = "chet";
                    }else{
                        $summa = "nechet";
                    }
                    $letterArray = array('A','E','O','I','U');
                    if (in_array($name[0], $letterArray)) {
                        $letter = "glasnaya";
                    } else {
                        $letter = "soglasnaya";
                    }
                    if ($summa == "chet" & $letter == "glasnaya") {
                        echo "Junior PHP";
                    }
                    elseif ($summa == "nechet" & $letter == "glasnaya") {
                        echo "Intern PHP";
                    }
                    elseif ($summa == "nechet" & $letter == "soglasnaya") {
                        echo "Intern PHP developer";
                    }
                    elseif ($summa == "chet" & $letter == "soglasnaya") {
                        echo "Junior PHP developer";
                    }
                ?>
            </h1>
            <table class="table table-bordered">
                <tr>
                    <td>
                        <h4><p><?php echo $array[$career["name"]] ?></p></h4>
                        <p><span><?php echo $array[$career["cont"]] ?></span></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>                                                                                   <!--  TAB with experience -->
                            <ul class="nav nav-tabs" role="tablist" id="myTab">
                                <li role="presentation" class="active"><a href="#profexp" aria-controls="home" role="tab" data-toggle="tab"><?php echo $array[$prof[0][0]] ?></a></li>
                                <li role="presentation"><a href="#skills" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $array[$prof[1][0]] ?></a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="profexp">
                                    <p><?php echo $array[$prof[0][1]] ?></p>
                                    <ul>
                                        <li><?php echo $array[$prof[0][2]] ?></li>
                                        <li><?php echo $array[$prof[0][3]] ?></li>
                                        <li><?php echo $array[$prof[0][4]] ?></li>
                                        <li><?php echo $array[$prof[0][5]] ?></li>
                                        <li><?php echo $array[$prof[0][6]] ?></li>
                                        <li><?php echo $array[$prof[0][7]] ?></li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="skills">
                                    <ul>
                                        <li><?php echo $array[$prof[1][1]] ?></li>
                                        <li><?php echo $array[$prof[1][2]] ?></li>
                                        <li><?php echo $array[$prof[1][3]] ?></li>
                                        <li><?php echo $array[$prof[1][4]] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4><p><?php echo $array[$edu["name"]] ?></p></h4>
                        <p><?php echo $array[$edu["cont"]] ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4><p><?php echo $array[$lang["name"]] ?></p></h4>
                        <ul>
                            <li><?php echo $array[$lang[0]] ?></li>
                            <li><?php echo $array[$lang[1]] ?></li>
                            <li><?php echo $array[$lang[2]] ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4><p><?php echo $array[$qual["name"]] ?></p></h4>
                        <p><?php echo $array[$qual["cont"]] ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4><p><?php echo $array[$interest["name"]] ?></p></h4>
                        <p><?php echo $array[$interest["cont"]] ?></p>
                    </td>
                </tr>
            </table>
        </div>
<!-------------------------------------FOOTER---------------------------------------------------------------------------->
        <?php
        require 'footer.php';
        ?>
    </div>
    </body>
</html>