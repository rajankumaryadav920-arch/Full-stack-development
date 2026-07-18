<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<style>
.nav{
    background-color: darkkhaki;
}
.nav1{
    background-color: #2df65c;
    border-radius: 10px;
    color: white;
    margin-right: 2px;
    text-align: center;
    padding: 10px 0px;
    margin-top:5px;

}
.left_side{
    margin: 15px 5px;
    border: 1px solid #15cce43b;;
    height:400px;
}
textarea{
height: 275px;
margin: 5px 5px;
 text-align: justify;
font-size: medium;
width:100%;

    
}
.nav2{
    background-color: #f72db0;
    border-radius: 10px;
    color: white;
    margin-top: 5px;
    text-align: center;
    padding: 10px 0px;
}
.btn1,.btn2{
border: none;
color:white ;
font-size: 16px;
}
.btn1{
    background-color:green;
}
.btn2{
    background-color: #0dee9c;
}
.r_side{
    border:1px solid #2df73a; ;
    margin-left: 50px;
    margin-top:15px;
    height:400px;


}
.r_sideC{
text-align: justify;
font-size: 14px;
font-family: sans-serif;

}
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <nav class="navbar text-dark nav justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href=""><h4>HTML Transtlator</h4></a></li>
                </ul>
            </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 left_side">
                <nav class="nav1"><h4>HTML CODE</h4></nav>
                <form method="post">
                    <textarea name="rec">

                    </textarea>
                    <input class="btn1" type="submit" name="run" value="run"/>
                    <input class="btn2" type="reset" name="rec1" value="clear"/>

                </form>
            </div>
            <div class="col-sm-5 r_side"> 
                <nav class="nav2">OUTPUT</nav>
                <div class="r_side_c">

  <?php
    if(isset($_POST['run'])){
        $run=$_POST['rec'];
        echo $run;
    }
    ?>
                    </div>
            </div>

            
        
    </div>
    
</body>
</html>