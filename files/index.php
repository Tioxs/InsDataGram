<html>
<head>
  <title>
    InsDataGram
  </title>
</head>
<body>
<div class="content">
<center><form action="data.php" method="get">
<input type="text" placeholder="UserName" id="username" name="username">
<br/><br/>
<input type="submit" value="ARA" id="search" name="search">
    </form></center>
</div>
<footer>
  <center><p><i>InsDataGram - <a href="#">GitHub Repo</a></i></p>
      <p><i><a href="#">Author</a></i></p>
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
          margin-top: 150px;
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
