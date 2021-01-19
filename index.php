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
        .col-6{
            border: solid 2px #1a1a1a;
        }
    </style>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-6 text-center bg-success">
                <h3 class="text-white">Mode</h3> <br>
                <select name="mode" id="mode" class="form-control mb-2">
                    <option value="off">OFF</option>
                    <option value="normal">Normal</option>
                    <option value="color">Pas d'automatisme</option>
                    <option value="print">Impression</option>
                </select>
            </div>
            <div class="col-6 text-center bg-danger">
                <h3 class="text-white">Automate</h3> <br>
                <span class="text-white">WIP</span>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-center bg-dark">
                <h3 class="text-white">Couleur</h3> <br>
                <canvas id="color-picker"></canvas>
                <input id="color" class="form-control">
            </div>
            <div class="col-6 text-center bg-info">
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
    $("#mode").val("off");

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

    $("#bright").change(function(){
        $("#valBright").html($("#bright").val() + " %");
    });

    $("#mode").change(function(){
        switch ($("#mode").val()) {
            case "off":
                break;
            case "normal":
                break;
            case "color":
                break;
            case "print":
                break;
        }
    })
</script>
</html>