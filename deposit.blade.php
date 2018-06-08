<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CASH.LOL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">		
	</head>
    <body>
    @extends('layouts.app')
    @section('content')
    <div>
        <h1 class="Top" align="center">CASH.LOL</h1></div>
        <div class="container">
		<div class="row">
            <div class="col-lg-3">
            <h2 class="Box" align="center"><a href="http://casino.test/games" style="color:black">GAMES</a></h2>
            <h2 class="Boxnow" align="center"><a href="http://casino.test/deposit" style="color:black">DEPOSIT</a></h2>
            <h2 class="Box" align="center"><a href="http://casino.test/stats" style="color:black">STATISTICS</a></h2>
            <h2 class="Box" align="center"><a href="http://casino.test/about" style="color:black">ABOUT</a></h2>
            </div>	
		<div class="col-lg-6">
            <form><b>
                <h1>DEPOSIT</h1>
                How much money do you want to deposit:<br>
                <input type="text" name="deposit"><br>
                <button type="button">Deposit</button>
                <h1>WITHDRAWAL</h1>
                How much money do you want to withdraw:<br>
                <input type="text" name="withdrawal"><br>
                <button type="button">Deposit</button>
            </form></b>
        </div>
        <div class="col-lg-3">
            <h4 class="Statistics">World Wide Statistics</h4>
            <h2 align="center"><div class="Box2">
                <h5 class="Stats">50/50 STATS</h5>
                <p class="p">TOTAL PLAYED: </p>
                <p class="p">TOTAL WON: </p>
                <p class="p">TOTAL LOST: </p>
                <h5 class="Stats">DICE STATS</h5>
                <p class="p">TOTAL PLAYED: </p>
                <p class="p">TOTAL WON: </p>
                <p class="p">TOTAL LOST: </p>
            </div></h2>
        </div>	

        </div>
        </div>
    </div>
    @endsection
</body>
</html>