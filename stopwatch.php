<!DOCTYPE html>
<html>
  <head>
    <h1 style="text-align:center;background-color:#ffcc00;font-family: Arial;margin: auto;
    width: 10%;
    border: 3px solid rgb(0, 0, 0);
    padding: 10px;">STOP WATCH</h1>
    
    <form name="form_main">
     
     
      <div>
        <span id="hour">00</span>
        <span id="minute">00</span>
        <span id="second">00</span>
        <span id="millisecond">000 </span>
      </div>
   
      
      
      <h1 ></h1></h1>



      <br />
      <button type="button" name="start">START</button> 
      <button type="button" name="pause">PAUSE</button>
      <button type="button" name="reset">RESET</button>
    </form>
    
  </head>
  <body>




<style>
  button {
    color: rgb(0, 0, 0);
    font-family: Arial;
    font-size: 160%;
    background-color:#ffcc00;
    margin: auto;
    width: 100%;
    border: 3px solid rgb(0, 0, 0);
    padding: 10px;
    vertical-align:middle;
    
  }
  
  body {
    background-color: 	#000000;
    }
     
  span {
    color: rgb(0, 0, 0);
    font-family: Arial;
    font-size: 160%;
    text-align:center;
    background-color:#ffcc00;
    margin: auto;
    width: 100%;
    border: 3px solid rgb(0, 0, 0);
    padding: 10px;
  }


  </style>
  
<script>"use strict";

  let hour = 0;
  let minute = 0;
  let second = 0;
  let millisecond = 0;
  
  let cron;
  
  document.form_main.start.onclick = () => start();
  document.form_main.pause.onclick = () => pause();
  document.form_main.reset.onclick = () => reset();
  
  function start() {
    pause();
    cron = setInterval(() => { timer(); }, 10);
  }
  
  function pause() {
    clearInterval(cron);
  }
  
  function reset() {
    hour = 0;
    minute = 0;
    second = 0;
    millisecond = 0;
    document.getElementById('hour').innerText = '00';
    document.getElementById('minute').innerText = '00';
    document.getElementById('second').innerText = '00';
    document.getElementById('millisecond').innerText = '000';
  }
  
  function timer() {
    if ((millisecond += 10) == 1000) {
      millisecond = 0;
      second++;
    }
    if (second == 60) {
      second = 0;
      minute++;
    }
    if (minute == 60) {
      minute = 0;
      hour++;
    }
    document.getElementById('hour').innerText = returnData(hour);
    document.getElementById('minute').innerText = returnData(minute);
    document.getElementById('second').innerText = returnData(second);
    document.getElementById('millisecond').innerText = returnData(millisecond);
  }
  
  function returnData(input) {
    return input > 10 ? input : `0${input}`
  }</script>