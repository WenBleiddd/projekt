<<<<<<< Updated upstream
<?php
require_once 'baza.php';
?>
<html>

<head>

<meta charset="utf-8">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

</head> 

<style>

html{
font-family: 'Montserrat', sans-serif;
margin:0px;
background-color:white;
}

.wyloguj{
float:right;
border:none;
background-color:#191919;
color:white;
padding:10px;
}

.panel{
border:none;
background-color:#BF360C;
color:white;
font-weight:bold;
margin-right:55px;
}

.wyloguj:hover, .panel:hover{
background-color:#FF7043;
color:black;
}

.menu {
  background-color: #BF360C;
  overflow: auto;
  white-space: nowrap;
}

.menu a {
  display: inline-block;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.A{
font-size:14px;
color:white;
font-weight:100;
}

.A:hover{
font-weight:900;
}

table, th, tr, td{
    margin:10px;
}

tr, th, td{
    padding:15px;
}

th{
    background-color:gray;
}

td{
    background-color:#DEDEDE;
}

#przycisk{
    margin-left:0px;
    margin-top:220px;
    padding:5px;
    border-radius:3px;
    border-color:white;
    color:#4C4C4C;
    width:45px;
    height:45px;
    font-size:20px;
    margin-left:210px;
    z-index:-2;
}

#przycisk:hover, #przycisk2:hover, #przycisk3:hover{
    color:white;
    background-color:#2A2A2A;
}

#przycisk2{
    margin-left:50px;
    margin-top:15px;
    padding:5px;
    border-radius:3px;
    border:2px;
    border-color:white;
    border-style:outset;
    background-color:#efefef;
    color:#4C4C4C;
    text-decoration:none;
    font-size:15px;
    font-weight:800;
}

#przycisk3{
    margin-left:160px;
    margin-top:10px;
    padding:10px;
    border-radius:3px;
    border-color:white;
    color:#4C4C4C;
    text-decoration:none;
    font-weight:bold;
    font-size:20px;
}

#pole_w{
    z-index:2;
    margin-bottom:-265px;
    margin-top:30px;
    margin-left:-30px;
    width:200px;
    height:45px;

border:none;
background-color:#DEDEDE;


}

.w_danych{
    border-radius:3px;
    width:200px;
}

label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px;}
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }


    #modyfikacja, #notatka, #usuwanie, #dodawanie{
    padding:5px;
    border-radius:3px;
    border-color:white;
    color:#4C4C4C;
    font-weight:800;
    text-decoration:none;
    border-radius:3px;
    border:2px;
    border-color:white;
    border-style:outset;
    background-color:#efefef;
    color:#4C4C4C;
    margin-right:5px;
    margin-left:3px;
}

#modyfikacja:hover, #notatka:hover{
  background-color:#0099FF;
  border-color:#0099FF;
  color:white;
  text-decoration:none;
}

#dodawanie:hover{
  background-color:#33CC00;
  border-color:#33CC00;
  color:white;
  text-decoration:none;
}

#usuwanie:hover{
  background-color:red;
  border-color:red;
  color:white;
  text-decoration:none;
}


</style>

</head>

<body>

<header>

<div class="menu">
  <a href="panel_a.php" class="panel">PANEL ADMINISTRATORA</a>
  <a href="zarzadzanie_klientami.php" class="A">Zarządzanie klientami</a>|
  <a href="zarzadzanie_produktami.php" class="A">Zarządzanie produktami</a>|
  <a href="zarzadzanie_kategoriami.php" class="A">Zarządzanie kategoriami</a>|
  <a href="zarzadzanie_parametrami.php" class="A">Zarządzanie parametrami</a>|
  <a href="" class="A">Dostawa i płatność</a>
  <a href="wyloguj_a.php" class="wyloguj">WYLOGUJ</a>


</div>

</header>

<aside>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>


    <?php

    if(isset($_POST['submit']) && $_POST['search']!=''){
        $stmt = $pdo->prepare("SELECT * FROM produkty WHERE nazwa LIKE :nazwa OR producent LIKE :producent");
        $stmt -> bindValue(':nazwa', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt -> bindValue(':producent', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt->execute();
    }else{
        $stmt = $pdo->query('SELECT * FROM produkty');
    }

    ?>


<center>

        <aside style="margin-top:50px;">



        <div class="container" class="ui-widget">
        <form action="" method="post">

            
                <input type="text" class="form-control" name="search"  id="pole_w"></input>

               <input type="submit" id="przycisk" name="submit" value="🔍︎" />

        </form>
  </aside>


        <div class="row">
            <div class="col-12">

                <table id="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nazwa</th>
                        <th>Id kategorii</th>
                        <th>Cena</th>
                        <th>Mroducent</th>
                        <th>Materiał</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($stmt as $row){
                      include('baza.php');
                      $query=mysqli_query($conn,"select * from `produkty`");
                      
                        ?>
                        <tr>
                        <td><?php echo $row['id_produktu']; ?></td>
                          <td><?php echo $row['nazwa']; ?></td>
                          <td><?php echo $row['id_kategorii']; ?></td>
                          <td><?php echo $row['cena']; ?></td>
                          <td><?php echo $row['producent']; ?></td>
                          <td><?php echo $row['materiał']; ?></td>
                          <td style="background-color:white;">
                            <a id="modyfikacja" href="zarzadzanie_produktami_form.php?id=<?php echo $row['id_produktu']; ?>">MODYFIKUJ</a>
                            <a id="usuwanie" href="zarzadzanie_produktami_us.php?id=<?php echo $row['id_produktu']; ?>">✖</a>
                          </td>
                        </tr>
                        <?php
                      
                    }
                    ?>
                    </tbody>
            
    </table>
    <a id="dodawanie" href="zarzadzanie_produktami_form_dod.php?id=<?php echo $row['id_produktu']; ?>">DODAJ</a>
            </div>
        </div>
    </div>


</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</aside>

                </center>

</body>

=======
<?php
require_once 'baza.php';
?>
<html>

<head>

<meta charset="utf-8">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

</head> 

<style>

html{
font-family: 'Montserrat', sans-serif;
margin:0px;
background-color:white;
}

.wyloguj{
float:right;
border:none;
background-color:#191919;
color:white;
padding:10px;
}

.panel{
border:none;
background-color:#BF360C;
color:white;
font-weight:bold;
margin-right:55px;
}

.wyloguj:hover, .panel:hover{
background-color:#FF7043;
color:black;
}

.menu {
  background-color: #BF360C;
  overflow: auto;
  white-space: nowrap;
}

.menu a {
  display: inline-block;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.A{
font-size:14px;
color:white;
font-weight:100;
}

.A:hover{
font-weight:900;
}

table, th, tr, td{
    margin:10px;
}

tr, th, td{
    padding:15px;
}

th{
    background-color:gray;
}

td{
    background-color:#DEDEDE;
}

#przycisk{
    margin-left:0px;
    margin-top:220px;
    padding:5px;
    border-radius:3px;
    border-color:white;
    color:#4C4C4C;
    width:45px;
    height:45px;
    font-size:20px;
    margin-left:210px;
    z-index:-2;
}

#przycisk:hover, #przycisk2:hover, #przycisk3:hover{
    color:white;
    background-color:#2A2A2A;
}

#przycisk2{
    margin-left:50px;
    margin-top:15px;
    padding:5px;
    border-radius:3px;
    border:2px;
    border-color:white;
    border-style:outset;
    background-color:#efefef;
    color:#4C4C4C;
    text-decoration:none;
    font-size:15px;
    font-weight:800;
}

#przycisk3{
    margin-left:160px;
    margin-top:10px;
    padding:10px;
    border-radius:3px;
    border-color:white;
    color:#4C4C4C;
    text-decoration:none;
    font-weight:bold;
    font-size:20px;
}

#pole_w{
    z-index:2;
    margin-bottom:-265px;
    margin-top:30px;
    margin-left:-30px;
    width:200px;
    height:45px;

border:none;
background-color:#DEDEDE;


}

.w_danych{
    border-radius:3px;
    width:200px;
}

label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px;}
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }


    #modyfikacja, #notatka, #usuwanie, #dodawanie{
    padding:5px;
    border-radius:3px;
    border-color:white;
    color:#4C4C4C;
    font-weight:800;
    text-decoration:none;
    border-radius:3px;
    border:2px;
    border-color:white;
    border-style:outset;
    background-color:#efefef;
    color:#4C4C4C;
    margin-right:5px;
    margin-left:3px;
}

#modyfikacja:hover, #notatka:hover{
  background-color:#0099FF;
  border-color:#0099FF;
  color:white;
  text-decoration:none;
}

#dodawanie:hover{
  background-color:#33CC00;
  border-color:#33CC00;
  color:white;
  text-decoration:none;
}

#usuwanie:hover{
  background-color:red;
  border-color:red;
  color:white;
  text-decoration:none;
}


</style>

</head>

<body>

<header>

<div class="menu">
  <a href="panel_a.php" class="panel">PANEL ADMINISTRATORA</a>
  <a href="zarzadzanie_klientami.php" class="A">Zarządzanie klientami</a>|
  <a href="zarzadzanie_produktami.php" class="A">Zarządzanie produktami</a>|
  <a href="zarzadzanie_kategoriami.php" class="A">Zarządzanie kategoriami</a>|
  <a href="zarzadzanie_parametrami.php" class="A">Zarządzanie parametrami</a>|
  <a href="" class="A">Dostawa i płatność</a>
  <a href="wyloguj_a.php" class="wyloguj">WYLOGUJ</a>


</div>

</header>

<aside>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>


    <?php

    if(isset($_POST['submit']) && $_POST['search']!=''){
        $stmt = $pdo->prepare("SELECT * FROM produkty WHERE nazwa LIKE :nazwa OR producent LIKE :producent");
        $stmt -> bindValue(':nazwa', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt -> bindValue(':producent', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt->execute();
    }else{
        $stmt = $pdo->query('SELECT * FROM produkty');
    }

    ?>


<center>

        <aside style="margin-top:50px;">



        <div class="container" class="ui-widget">
        <form action="" method="post">

            
                <input type="text" class="form-control" name="search"  id="pole_w"></input>

               <input type="submit" id="przycisk" name="submit" value="🔍︎" />

        </form>
  </aside>


        <div class="row">
            <div class="col-12">

                <table id="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nazwa</th>
                        <th>Id kategorii</th>
                        <th>Cena</th>
                        <th>Producent</th>
                        <th>Materiał</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($stmt as $row){
                      include('baza.php');
                      $query=mysqli_query($conn,"select * from `produkty`");
                      
                        ?>
                        <tr>
                        <td><?php echo $row['id_produktu']; ?></td>
                          <td><?php echo $row['nazwa']; ?></td>
                          <td><?php echo $row['id_kategorii']; ?></td>
                          <td><?php echo $row['cena']; ?></td>
                          <td><?php echo $row['producent']; ?></td>
                          <td><?php echo $row['materiał']; ?></td>
                          <td style="background-color:white;">
                            <a id="modyfikacja" href="zarzadzanie_produktami_form.php?id=<?php echo $row['id_produktu']; ?>">MODYFIKUJ</a>
                            <a id="usuwanie" href="zarzadzanie_produktami_us.php?id=<?php echo $row['id_produktu']; ?>">✖</a>
                          </td>
                        </tr>
                        <?php
                      
                    }
                    ?>
                    </tbody>
            
    </table>
    <a id="dodawanie" href="zarzadzanie_produktami_form_dod.php?id=<?php echo $row['id_produktu']; ?>">DODAJ</a>
            </div>
        </div>
    </div>


</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</aside>

                </center>

</body>

>>>>>>> Stashed changes
</html>