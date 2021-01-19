<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/colorpicker.min.js"></script>
    <title>Control Yeelight</title>
    <style>
        *{
            border: 1px solid red;
        }
    </style>
</head>
<body class="bg-dark" style="width: fit-content; height: max-content;">
    <div class="container">
        <div class="row" style="margin: 5%;">
            <div class="col-6 text-center">
                <button class="btn btn-primary"><h3>Mode</h3></button>
            </div>
            <div class="col-6 text-center">
                <h3 class="text-white">Automatisation</h3> <br>
                <span class="text-white">WIP</span>
            </div>
        </div>
        <div class="row" style="margin: 5%;">
            <div class="col-6 text-center">
                <h3 class="text-white">Couleur</h3> <br>
                <canvas id="color-picker"></canvas>
                <input id="color" class="form-control">
            </div>
            <div class="col-6 text-center">
                <h3 class="text-white">Bright</h3> <br>
                <span class="text-white" id="valBright">0 %</span>
                <input type="range" class="custom-range" name="bright" id="bright" min=1 max=100></div>
        </div>
    </div>
</body>

<script>
    let width = window.innerWidth;
    let height = window.innerHeight;
    $("#valBright").html($("#bright").val() + " %");

    let colorPick = new KellyColorPicker({
        place : 'color-picker',
        input : 'color',  
        method : 'triangle',
        resizeWidth: true,
        methodSwitch: true,
        userEvents : { 
            change : function(self) {
                console.log($("#color").val());
            }
        }
    });

    $(".container").width = width;
    $(".container").height = height;
    $(".col-6").height = height / 2;

    $("#bright").change(function(){
        $("#valBright").html($("#bright").val() + " %");
    });
</script>
</html>