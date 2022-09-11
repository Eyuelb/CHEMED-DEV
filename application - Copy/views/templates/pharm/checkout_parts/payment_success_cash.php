<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>

.card{
    margin: auto;
    width: 38%;
    max-width:600px;
    padding: 4vh 0;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-top: 3px solid rgb(30 30 123);
    border-bottom: 3px solid rgb(30 30 123);
    border-left: none;
    border-right: none;
    margin-top: 60px;
}
@media(max-width:768px){
    .card{
        width: 90%;
    }
}
.title{
    color: rgb(30 30 123);
    font-weight: 600;
    margin-bottom: 2vh;
    padding: 0 8%;
    font-size: initial;
}
#details{
    font-weight: 400;
}
.info{
    padding: 5% 8%;
}
.info .col-5{
    padding: 0;
}
#heading{
    color: #1e1e7b;
    line-height: 6vh;
    font-weight: 600;
    font-size: 15px;
}
.pricing{
    background-color: #ddd3;
    padding: 2vh 8%;
    font-weight: 400;
    line-height: 2.5;
}
.pricing .col-3{
    padding: 0;
}
.total{
    padding: 2vh 8%;
    color: rgb(30 30 123);
    font-weight: bold;
}
.total .col-3{
    padding: 0;
}
.foo{
    padding: 0 8%;
    font-size: x-small;
    color: black;
}
.foo img{
    height: 5vh;
    opacity: 0.2;
}
.foo a{
    color: rgb(252, 103, 49);
}
.foo .col-10, .col-2{
    display: flex;
    padding: 3vh 0 0;
    align-items: center;
}
.foo .row{
    margin: 0;
}
#progressbar {
    margin-bottom: 3vh;
    overflow: hidden;
    color: rgb(252, 103, 49);
    padding-left: 0px;
    margin-top: 3vh
}

#progressbar li {
    list-style-type: none;
    font-size: x-small;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
    color: rgb(30 30 123);
}

#progressbar #step1:before {
    content: "";
    color: rgb(252, 103, 49);
    width: 5px;
    height: 5px;
    margin-left: 0px !important;
    /* padding-left: 11px !important */
}

#progressbar #step2:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-left: 32%;
}

#progressbar #step3:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 32% ; 
    /* padding-right: 11px !important */
}

#progressbar #step4:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 0px !important;
    /* padding-right: 11px !important */
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #ddd;
    border-radius: 50%;
    margin: auto;
    z-index: -1;
    margin-bottom: 1vh;
}

#progressbar li:after {
    content: '';
    height: 2px;
    background: #ddd;
    position: absolute;
    left: 0%;
    right: 0%;
    margin-bottom: 2vh;
    top: 1px;
    z-index: 1;
}
.progress-track{
    padding: 0 8%;
}
#progressbar li:nth-child(2):after {
    margin-right: auto;
}

#progressbar li:nth-child(1):after {
    margin: auto;
}

#progressbar li:nth-child(3):after {
    float: left;
    width: 68%;
}
#progressbar li:nth-child(4):after {
    margin-left: auto;
    width: 132%;
}

#progressbar  li.active{
    color: black;
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: rgb(252, 103, 49);
}
.btn-primary {
    color: #fff;
    background-color: #004cb9;
    border-color: #004cb9;
    padding: 12px;
    padding-right: 30px;
    padding-left: 30px;
    border-radius: 1px;
    font-size: 17px;
}


.btn-primary:hover {
    color: #fff;
    background-color: #004cb9;
    border-color: #004cb9;
    padding: 12px;
    padding-right: 30px;
    padding-left: 30px;
    border-radius: 1px;
    font-size: 17px;
}
</style>


    <div class="card">
            <div class="title">Purchase </div>
            <div class="info">
                <div class="row">
                <div class="col-7">
                        <span id="heading">CHEDMED</span><br>
                        <span id="details">Your order has been successfully Submited, We will contact you Thanks for choosing us - CheMed</span>
                    </div>
                    <div class="col-5 ">
                        <span id="heading">Order No.</span><br>
                        <span id="details"><?= $_SESSION['order_id'] ?></span>
                    </div>
                    <div class="col-7">
                        <span id="heading">Date</span><br>
                        <span id="details"><?php echo  date("Y-m-d"); ?></span>
                    </div>
                </div>      
            </div>      

            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0 active " id="step1">Ordered</li>
                    <li class="step0 active text-right" id="step3">On the way</li>
                    <li class="step0 text-right" id="step4">Delivered</li>
                </ul>
            </div>
            

            <div class="foo">
                <div class="row">
                <div class="text-center mt-5">
                    
                    <a href="<?= base_url('/') ?>"><button class="btn btn-primary">Finish</button></a>

                </div>
            </div>
                
               
            </div>
        </div>
        <?php
function sendMessage($chatID, $messaggio, $token) {

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$m ="You Have New Order ".$_SESSION['order_id']." on ".date("Y-m-d");



$token = "5553512988:AAFeAbRF8vEs8OGtQPpSXj_DuBqqw2j95gE";
$chatid = "344008794";
sendMessage($chatid, $m, $token);
?>
