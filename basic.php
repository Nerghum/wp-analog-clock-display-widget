<div class="clock">
        <div class="number" id="num12">12</div>
        <div class="number" id="num1">1</div>
        <div class="number" id="num2">2</div>
        <div class="number" id="num3">3</div>
        <div class="number" id="num4">4</div>
        <div class="number" id="num5">5</div>
        <div class="number" id="num6">6</div>
        <div class="number" id="num7">7</div>
        <div class="number" id="num8">8</div>
        <div class="number" id="num9">9</div>
        <div class="number" id="num10">10</div>
        <div class="number" id="num11">11</div>

        <div class="hand hour-hand"></div>
        <div class="hand minute-hand"></div>
        <div class="hand second-hand"></div>
        <div class="center-circle"></div>
    </div>

    <style type="text/css">
        
.clock {
    position: relative;
    width: 200px;
    height: 200px;
    border: 2px solid #333;
    border-radius: 50%;
}
.number {
    position: absolute;
    font-size: 18px;
    font-weight: bold;
    transform-origin: 50% 100%;
}

#num12 {
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
}

#num1 {
    top: 17px;
    right: 59px;
    transform: rotate(30deg);
}

#num2 {
    top: 41px;
    right: 37px;
    transform: rotate(60deg);
}

#num3 {
    top: 86px;
    right: 17px;
    transform: translateX(50%);
}

#num4 {
    top: 105px;
    right: 37px;
    transform: rotate(120deg);
}

#num5 {
    bottom: 40px;
    right: 60px;
    transform: rotate(150deg);
}

#num6 {
    bottom: 7px;
    left: 50%;
    transform: translateX(-50%);
}

#num7 {
    bottom: 42px;
    left: 61px;
    transform: rotate(210deg);
}

#num8 {
    bottom: 65px;
    left: 38px;
    transform: rotate(240deg);
}

#num9 {
    bottom: 83px;
    left: 22px;
    transform: translateX(-50%);
}

#num10 {
    top: 41px;
    left: 34px;
    transform: rotate(300deg);
}

#num11 {
    top: 17px;
    left: 57px;
    transform: rotate(330deg);
}

.hand {
    position: absolute;
    transform-origin: 50% 100%;
    background-color: #333;
}

.hour-hand {
    width: 4px;
    height: 40px;
    top: 30%;
    left: 48%;
    transform: translateX(-50%);
}

.minute-hand {
    width: 3px;
    height: 60px;
    top: 20%;
    left: 50%;
    transform: translateX(-50%);
}

.second-hand {
    width: 2px;
    height: 80px;
    background-color: red;
    top: 10%;
    left: 50%;
    transform: translateX(-50%);
}

.center-circle {
    position: absolute;
    width: 12px;
    height: 12px;
    background-color: #333;
    border-radius: 50%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}


    </style>