<?php

error_reporting(0);
// ?__a=1

$username = $_GET['username'];
$link = file_get_contents('https://www.instagram.com/' . $username. '?__a=1');
$data = json_decode($link, True);
$pp = $data['graphql']['user']['profile_pic_url_hd'];
// print_r($info);



?>


<html>
<head>
    <title>
        InsDataGram
    </title>
</head>
<body>
<div class="content"><br/>
        <?php

        echo '<center>' . 'İşte ' . '@' . $username . ' hakkında topladığım veriler: ' . ' ' . '<br/><br/>' . '</center>';
        echo '&nbsp' . 'Bio: ' . $data['graphql']['user']['biography'] . '<br/><br/>';
        echo '&nbsp' . 'Profile bağlanmış URL: ' . '<a href="">' . $data['graphql']['user']['external_url'] . '</a>' . '<br/><br/>';
        echo '&nbsp' . 'Takipçi sayısı: ' . $data['graphql']['user']['edge_followed_by']['count'] . '<br/><br/>';
        echo '&nbsp' . 'Takip ettiği kişi sayısı: ' . $data['graphql']['user']['edge_follow']['count'] . '<br/><br/>';
        echo '&nbsp' . 'Hesap ismi: ' . $data['graphql']['user']['full_name'] . '<br/><br/>';
        $gizli = '&nbsp' . $data['graphql']['user']['is_private'];
        if ($gizli == 1) {
            echo '&nbsp' . 'Hesap durumu: ' . 'gizli' . '<br/><br/>';
        } else {
            echo '&nbsp' . 'Hesap durumu: ' . 'herkese açık' . '<br/><br/>';
        }
        echo '&nbsp' . 'ID: ' . $data['graphql']['user']['id'] . '<br/><br/>';


        echo '&nbsp' . 'Profil Resmi:';

        ?>
    <br/><br/><img src="<?=$data['graphql']['user']['profile_pic_url_hd']; ?>" width="150">


    </center>
</div>
<footer>
    <center><p><i>InsDataGram - <a href="https://www.github.com/rashtion/InsDataGram">GitHub Repo</a></i></p>
    <p><i><a href="https://www.github.com/rashtion">Author</a></i></p>
    </center>
</footer>
</body>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');



    * {
        font-family: 'Open Sans', sans-serif;
    }

    .content
    {
        border: 1px solid black;
        width: 900px;
        height: 600px;
        margin: 0 auto;
        margin-top: 150px;
        text-align: center;
    } a {
          text-decoration: none;
      } footer {
            margin-top: 115px;
        }
    #username {
        text-align: center;
        height: 35px;
        border-radius: 35px;
        border: 2px solid black;
        margin-top: 45px;
    } #username:focus {
          outline: 0;
      }

    #search {
        border: 0px;
        font-size: 18px;
        cursor: pointer;
        background: #2ecc71;
        color: white;
        transition: 1s;
    } #search:hover {
          background: #3498db;
          transition: 1s;
      } #search:focus
        {
            outline: 0;
        }

</style>

</html>

