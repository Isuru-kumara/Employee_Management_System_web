<?php
$image = ''; // Initialize $image variable

// Check if $_SESSION['image'] is set
if (isset($_SESSION['image'])) {
    $image = $_SESSION['image'];
}

$name = ''; // Initialize $name variable

// Check if $data is set and has the expected structure
if (isset($data[0]['user_fname']) && isset($data[0]['user_lname'])) {
    $name = $data[0]['user_fname'] . " " . $data[0]['user_lname'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/message/messagestyle.css">
    <link rel="stylesheet" type="text/css" href="/assets/dist/css/message/messagestyle.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="../assets/css/message/loading-bar.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	
	<title>Realtime Chat Application CI</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
        * {
        margin: 0;
        padding: 0;
        }
        a {
        text-decoration: none;
        }
        input:focus,
        button:focus {
        outline: none !important;
        box-shadow: none !important;
        }
        hr {
        width: 80%;
        margin: auto;
        }
        #main {
        height: 100vh;
        width: 100vw;
        display: flex;
        }
        .blur {
        filter: blur(5px);
        }
        #chat_user_list {
        width: 25%;
        }
        #chatbox {
        width: 75%;
        transition: all 0.2s;
        }
        #details_of_user {
        width: 0%;
        transition: all 0.2s;
        }
        #owner_profile_details {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-top: 10px;
        }
        #owner_avtar {
        position: relative;
        height: 65px;
        width: 65px;
        border-radius: 100%;
        margin: 10px 10px 10px 25px;
        }
        #owner_avtar #online {
        position: absolute;
        height: 14px;
        width: 14px;
        border-radius: 100%;
        background-color: #5bde4d;
        bottom: 0;
        right: 0;
        border: 2px solid white;
        }
        #owner_profile_text {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        }
        #bio {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5px;
        }
        #bio i {
        margin-left: 10px;
        }
        #bio i:hover {
        cursor: pointer;
        }
        #chat_user_list {
        height: 100vh;
        background-color: #f5f6fa;
        overflow-y: scroll;
        }
        #user_details #message {
        font-size: 15px;
        }
        #time {
        font-size: 14px;
        }
        #chat_user_list::-webkit-scrollbar {
        display: none;
        }

        #update_container {
        position: absolute;
        width: 28%;
        top: 50%;
        left: 50%;
        border-radius: 5px;
        transform: translate(-50%, -50%);
        background-color: white;
        box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.5);
        overflow: hidden;
        display: none;
        }
        #update_container form {
        padding: 10px;
        }
        #update_container i {
        float: right;
        cursor: pointer;
        }
        #update_container #update_bio {
        width: 100%;
        height: 100px;
        resize: none;
        border-style: none;
        outline: none;
        background-color: #f5f6fa;
        border-radius: 5px;
        padding: 10px;
        }
        #update_btn {
        background-color: #157dff;
        color: white;
        }
        #search_box_container {
        display: flex;
        align-items: center;
        justify-content: center;
        }
        #search_box_container #search {
        width: 90%;
        border-style: none;
        border-radius: 20px;
        padding-left: 25px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .user {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        border-radius: 5px;
        margin: 0 10px;
        }
        .user:hover {
        background-color: white;
        }
        .active {
        background-color: white;
        }
        #user_avtar {
        height: 45px;
        width: 45px;
        border-radius: 100%;
        position: relative;
        }
        #online {
        position: absolute;
        height: 14px;
        width: 14px;
        border-radius: 100%;
        background-color: #5bde4d;
        bottom: 0;
        right: 0;
        border: 2px solid white;
        }
        #avtar_and_details {
        display: flex;
        align-items: center;
        }
        #user_details {
        margin-left: 5px;
        }
        #chatbox {
        position: relative;
        height: 100vh;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
        }
        #data_container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        }
        #bg_image {
        height: 300px;
        width: 380px;
        background-image: url("http://localhost/Employee_Management_System_web\assets\dist\img\admin.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        }

        .chatting_section {
        position: absolute;
        height: 100%;
        width: 100%;
        background-color: white;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        }
        #header {
        width: 100%;
        height: 12%;
        background-color: #f5f6fa;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 2px solid white;
        }
        #name_details {
        display: flex;
        align-items: center;
        }
        #chat_profile_image {
        position: relative;
        height: 50px;
        width: 50px;
        border-radius: 100%;
        }
        #name_last_seen p {
        font-size: 13.5px;
        }
        #icons {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        /* background:black; */
        }
        #icons div i {
        padding-right: 10px;
        }
        #icons div i {
        cursor: pointer;
        /* color: #AFAFAF; */
        }
        #icons div i:hover {
        color: rgba(0, 0, 0, 0.5);
        }
        #messageBar {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        #textBox_attachment_emoji_container {
        width: 90%;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        background-color: #f5f6fa;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
        #text_box_message {
        width: 92%;
        }
        #messageText {
        border-style: none;
        padding-left: 15px;
        background-color: transparent;
        }
        #messageText:focus {
        outline: none !important;
        box-shadow: none !important;
        }
        #text_counter {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right: 20px;
        }
        #sendButtonContainer {
        width: 8%;
        justify-content: center;
        display: flex;
        align-items: center;
        }
        #sendButtonContainer .btn {
        background-color: #157dff;
        color: white;
        height: 45px;
        width: 45px;
        border-radius: 100%;
        justify-content: center;
        display: flex;
        align-items: center;
        box-shadow: 0px 2px 6px #157dff;
        }

        #chat_message_area {
        height: 100%;
        width: 100%;
        padding: 20px;
        overflow-y: scroll;
        }
        #chat_message_area::-webkit-scrollbar {
        display: none;
        }
        #sender_msg_container {
        margin: 5px 0px;
        display: flex;
        justify-content: flex-start;
        }
        #receiver_msg_container {
        margin: 5px 0px;
        display: flex;
        justify-content: flex-end;
        }
        #sender_image,
        #receiver_image {
        height: 40px;
        width: 40px;
        margin: 0px 5px;
        border-radius: 100%;
        }
        #chat_message_area #sender_msg {
        max-width: 50%;
        width: fit-content;
        height: fit-content;
        word-wrap: break-word;
        border-radius: 3px 15px 15px 15px;
        background-color: #ebf3fd;
        }
        #chat_message_area #sender_msg p {
        text-align: justify;
        padding: 5px 20px 5px 20px;
        font-size: 16px;
        }
        #chat_message_area #receiver_msg {
        max-width: 50%;
        width: fit-content;
        word-wrap: break-word;
        height: fit-content;
        border-radius: 15px 3px 15px 15px;
        background-color: #157dff;
        color: white;
        }
        #chat_message_area #receiver_msg p {
        text-align: justify;
        padding: 5px 20px 5px 20px;
        font-size: 16px;
        }
        #not_message_yet {
        height: 100%;
        width: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        #not_message_yet div {
        height: 55%;
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        }
        #not_message_yet div div {
        height: 150px;
        width: 150px;
        background-size: 100% 100%;
        border-radius: 100%;
        background-position: center;
        background-repeat: no-repeat;
        }
        #not_message_yet div p,
        h4 {
        margin: 5px;
        }
        #details_of_user {
        background-color: #f5f6fa;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        }
        #user_details_container_avtar {
        height: 150px;
        width: 150px;
        margin: 5%;
        border-radius: 100%;
        }
        #user_details_container_details {
        height: fit-content;
        max-width: 85%;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        }
        #details_of_name,
        #details_of_bio {
        word-wrap: break-all;
        }
        #details_of_email,
        #details_of_created,
        #details_of_birthday,
        #details_of_location,
        #details_of_mobile {
        word-break: break-all;
        margin: 10px 0;
        padding: 0;
        font-size: 14px;
        }
        #btn_block {
        /* background-color:#157DFF; */
        color: white;
        border-radius: 20px;
        width: fit-content;
        margin: 15px 0px;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <section class="content-header">
            <section id="main" class="bg-dark">
                <div id="chat_user_list">
                    <div id="owner_profile_details">
                        <div id="owner_avtar" style="background-image: url('upload/<?php echo $image; ?>'); background-size: 100% 100%">
                            <div>
                                <div id="online"></div>
                            </div>
                        </div>
                        <div id="owner_profile_text" class="">
                            <h6 id="owner_profile_name" class="m-0 p-0"><?php echo $name; ?></h6>
                            <div id="bio">
                                <p id="owner_profile_bio" class="m-0 p-0"></p>
                                <i class="fas fa-edit" id="edit_icon"></i>
                            </div>
                            <a class="text-decoration-none" href="" id="logout" style="color:#e86663;"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                    <div id="search_box_container" class="py-3">
                        <input type="text" name="txt_search" class="form-control" autocomplete="off" placeholder="Search User" id="search">
                    </div>
                    <hr/>
                    <div id="user_list" class="py-3">
                    </div>
                </div>
                <div id="chatbox">
                    <div id="data_container" class="">
                        <div id="bg_image"></div>
                        <h2 class="mt-0">Hi There! Welcome To</h2>
                        <h2>Real-Time Chat Application</h2>
                        <p class="text-center my-2">Connect to your device via Internet. Remember that you <br> must have a stable Internet Connection for a<br> greater experience.</p>
                    </div>
                    <div class="chatting_section" id="chat_area" style="display: none">
                        <div id="header" class="py-2">
                            <div id="name_details" class="pt-2">
                                <div id="chat_profile_image" class="mx-2" style="background-size: 100% 100%">
                                    <div id="online"></div>
                                </div>
                                <div id="name_last_seen">
                                    <h6 class="m-0 pt-2"></h6>
                                    <p class="m-0 py-1"></p>
                                </div>
                            </div>
                            <div id="icons" class="px-4 pt-2">
                                <div id="send_mail">
                                    <a href="" id="mail_link"><i class="fas fa-envelope text-dark"></i></a>
                                </div>
                                <div id="details_btn" class="ml-3">
                                    <i class="fas fa-info-circle text-dark"></i>
                                </div>
                            </div>
                        </div>
                        <div id="chat_message_area">

                        </div>
                        <div id="messageBar" class="py-4 px-4">
                            <div id="textBox_attachment_emoji_container">
                                <div id="text_box_message">
                                    <input type="text" maxlength = "200" name="txt_message" id="messageText" class="form-control" placeholder="Type your message">
                                </div>
                                <div id="text_counter">
                                    <p id="count_text" class="m-0 p-0"></p>
                                </div>
                            </div>
                            <div id="sendButtonContainer">
                                <button class="btn" id="send_message">
                                    <span class="material-icons">send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="details_of_user">
                    <div id="user_details_container_avtar" style="background-size: 100% 100%"></div>
                    <h5 class="text-justify" id="details_of_name"></h5>
                    <p class="text-justify" id="details_of_bio"></p>
                    <div id="user_details_container_details">
                        <p class="text-justify" id="details_of_created"></p>
                        <p class="text-justify" id="details_of_birthday"></p>
                        <p class="text-justify" id="details_of_mobile"><span></p>
                        <p class="text-justify" id="details_of_email"><span></p>
                        <p class="text-justify" id="details_of_location"><span></p>
                    </div>
                    <button class="btn btn-danger" id="btn_block">Block User</button>
                </div>
            </section>
            <div id="update_container">
                <div style="background-color:#F5F6FA;" class="p-3 d-flex justify-content-between align-items-center">
                    <h5 id="update_container_title" class="m-0 p-0">Update Profile</h5>
                    <i class="fas fa-times"></i>
                </div>
                <form class="" id="form_details" autocomplete="off">
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="text" name="txt_dob" id="dob" class="form-control" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" maxlength="10" name="txt_phone" placeholder="Write your mobile number" id="phone_num" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="txt_addr" id="address" placeholder="Write your address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" class="" id="update_bio" placeholder="Write your bio here.."></textarea>
                    </div>
                    <button class="btn btn-block" id="update_btn" style="border-radius:0px;">
                        <span>Save Changes</span>
                    </button>
                </form>
            </div>
        </section>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
	<script type="text/javascript" src="../assets/js/message/main.js"></script>
    <script>
        $(document).ready(function () {
        var oldDate, newDate, days, hours, min, sec, unique_id, bg_image, inter, inter3, inter2,
            chatBox = document.getElementById('chat_message_area'),
            main = document.getElementById('main'),
            owenerProfileBio = document.getElementById('owner_profile_bio'),
            dob, phone, addr, bio;

        const MAIN_PLAY = gsap.timeline({ paused: true });
        MAIN_PLAY.from("#main", { duration: 0.5, opacity: 0 });

        //Main funtion which will run at the time of page load
        //UserSidebarIn
        function barIn() {
            $('#details_of_user').css('width', '20%');
            $('#chatbox').css('width', '55%');
            $('#details_of_user').children().show();
        }
        //UserSidebarOut
        function barOut() {
            $('#details_of_user').children().hide();
            $('#details_of_user').css('width', '0');
            $('#chatbox').css('width', '75%');
        }

        //getting all user list except me
        function getUserList() {
            return new Promise(function (resolve, reject) { //Creating new Promise Chain
                $.ajax({
                    url: 'Message/allUser',
                    type: 'get',
                    async: false,
                    success: function (data) {
                        if (data != "") {
                            resolve(data);
                        }
                    }
                })
            }).then(function (data) { //This function setting the user list
                document.getElementById('user_list').innerHTML = data; //setting data to the user list
                $.get('Message/ownerDetails', function (data) {
                    jsonData = JSON.parse(data);
                    dob = jsonData[0]['dob'];
                    phone = jsonData[0]['phone'];
                    addr = jsonData[0]['address'];
                    bio = jsonData[0]['bio'];
                    if (dob.length != 0 && addr.length != 0 && phone.length != 0 && bio.length != 0) {
                        owenerProfileBio.classList.remove('text-warning');
                        owenerProfileBio.innerHTML = (bio.length > 28) ? bio.slice(0, 28) + "..." : bio;
                    } else {
                        owenerProfileBio.innerHTML = "Profile isn't completed";
                        owenerProfileBio.classList.add('text-warning');
                    }
                })
                $('.innerBox').click(function () {

                    barIn();
                    $('.chatting_section').css('display', '');

                    unique_id = $(this).find('#user_avtar').children('#hidden_id').val();
                    bg_image = $(this).find('#user_avtar').css('background-image').split('"')[1];

                    clearInterval(inter);
                    clearInterval(inter3);

                    getBlockUserData();
                    setInterval(getBlockUserData, 100);

                    getUserDetails(unique_id);
                    inter2 = setInterval(getUserList, 1000);
                    inter3 = setInterval(function () {
                        getUserDetails(unique_id)
                    }, 1000);
                    sendUserUniqIDForMsg(unique_id, bg_image);

                    inter = setInterval(function () {
                        sendUserUniqIDForMsg(unique_id, bg_image);
                    }, 100);
                })
                $('.innerBox').mouseover(function () {
                    clearInterval(inter2);
                })
                $('.innerBox').mouseleave(function () {
                    inter2 = setInterval(getUserList, 1000);
                })
            })
        }
        function getUserDetails(uniq_id) {
            $.post('Message/getIndividual', { data: uniq_id }, function (data) {
                var res_data = JSON.parse(data);
                setUserDetails(res_data);
            })
        }
        function setUserDetails(data) {
            var user_name = `${data[0]['user_fname']} ${data[0]['user_lname']}`;
            var status = data[0]['user_status'];
            var avtar = `../upload/${data[0]['user_avtar']}`;
            var last_seen = data[0]['last_logout'];
            offlineOnlineIndicator(status, last_seen);
            $('#name_last_seen h6').html(user_name);
            $('#chat_profile_image').css('background-image', `url(${avtar})`);
            $('#new_message_avtar').css('background-image', `url(${avtar})`);
            $('#mail_link').attr('href', `mailto:${data[0]['user_email']}`);

            $('#user_details_container_avtar').css('background-image', `url(${avtar})`);
            $('#details_of_user h5').html(user_name);
            (data[0]['bio'].length > 1) ? $('#details_of_bio').html(data[0]['bio']) : $('#details_of_bio').html("--Not Given--");

            $('#details_of_created').html(`Created at : ${data[0]['created_at']}`);
            $('#details_of_email').html(`<span><i class="fas fa-envelope text-dark pr-2"></i></span>${data[0]['user_email']}`);

            (data[0]['dob'].length > 1) ?
                $('#details_of_birthday').html(`<span><i class="fas fa-birthday-cake text-dark pr-2"></i></span>${data[0]['dob']}`) :
                $('#details_of_birthday').html(`<span><i class="fas fa-birthday-cake text-dark pr-2"></i></span>--Not Given--`);

            (data[0]['phone'].length > 1) ?
                $('#details_of_mobile').html(`<span><i class="fas fa-mobile-alt text-dark pr-2"></i></span>${data[0]['phone']}`) :
                $('#details_of_mobile').html(`<span><i class="fas fa-mobile-alt text-dark pr-2"></i></span>--Not Given--`);

            (data[0]['address'].length > 1) ?
                $('#details_of_location').html(`<span><i class="fas fa-map-marker-alt text-dark pr-2"></i></span>${data[0]['address']}`) :
                $('#details_of_location').html(`<span><i class="fas fa-map-marker-alt text-dark pr-2"></i></span>--Not Given--`);


        }

        function offlineOnlineIndicator(data, last_seen) {
            if (data == 'active') {
                $('#name_last_seen p').html("Active now");
                $("#chat_profile_image #online").show();
            } else {
                $("#chat_profile_image #online").hide();
                getLastSeen(last_seen);
            }
        }
        function getLastSeen(data) {
            var { hours, min, sec } = calculateTime(data);
            if (days > 0) {
                $('#name_last_seen p').html(`Last active on ${data}`);
            }
            else {
                (hours > 0) ? $('#name_last_seen p').html(`Last seen at ${hours} hours ${min} minutes ago`) :
                    (min > 0) ? $('#name_last_seen p').html("Last seen at " + min + " minutes ago") :
                        $('#name_last_seen p').html("Last seen just now");
            }
        }
        function calculateTime(data) {
            oldDate = new Date(data).getTime();
            newDate = new Date().getTime();
            differ = newDate - oldDate;
            days = Math.floor(differ / (1000 * 60 * 60 * 24));
            hours = Math.floor((differ % (1000 * 60 * 60 * 24)) / (60 * 60 * 1000));
            min = Math.floor((differ % (1000 * 60 * 60)) / (60 * 1000));
            sec = Math.floor((differ % (1000 * 60)) / 1000);
            var obj = {
                hours: hours,
                min: min,
                sec: sec
            };
            return obj;
        }
        //sending unique_id which is clicked for messages
        function sendUserUniqIDForMsg(uniq_id, bg_image) {
            $.post('getmessage', { data: uniq_id, image: bg_image }, function (data) {
                setMessageToChatArea(data, bg_image);//setting messages to the chatting section
            });
        }
        function setMessageToChatArea(data, bg_image) {
            scrollToBottom();
            var res_data;
            if (data.length > 5) {
                $('#chat_message_area').html(data);
            } else {
                var profileName = $('#name_last_seen h6').html();
                $.ajax({
                    url: 'Message/setNoMessage',
                    type: 'post',
                    async: false,
                    data: { image: bg_image, name: profileName },
                    success: function (data) {
                        res_data = data;
                    }
                })
                $('#chat_message_area').html(res_data);
            }
        }
        $('#chat_message_area').mouseenter(function () {
            chatBox.classList.add('active');
        });
        $('#chat_message_area').mouseleave(function () {
            chatBox.classList.remove('active');
        });
        function scrollToBottom() {
            inter4 = setInterval(() => {
                if (!chatBox.classList.contains('active')) {
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            });
        }
        $('#search').keyup(function (e) {
            var user = document.querySelectorAll('.user');
            var name = document.querySelectorAll('#user_list h6');
            var val = this.value.toLowerCase();
            if (val.length > 0) {
                clearInterval(inter2);
                for (let i = 0; i < user.length; i++) {
                    nameVal = name[i].innerHTML
                    if (nameVal.toLowerCase().indexOf(val) > -1) {
                        user[i].style.display = '';
                    } else {
                        user[i].style.display = 'none';
                    }
                }
            } else {
                inter2 = setInterval(getUserList, 1000);
            }
        });
        function getCharLength() {
            const MAX_LENGTH = 200;
            var len = document.getElementById('messageText').value.length;
            if (len <= MAX_LENGTH) {
                $('#count_text').html(`${len}/200`);
            }
        }
        setInterval(getCharLength, 10);
        $('#logout').click(function (e) {
            e.preventDefault();
            var date = new Date();
            date = new Date(date);
            date = date.toLocaleString();
            $.ajax({
                url: 'logout',
                type: 'post',
                data: "date=" + date,
                success: function (res) {
                    location.href = res;
                }
            })
        });
        //send message after button click
        $('#send_message').click(function (e) {
            var d = new Date(),
                messageHour = d.getHours(),
                messageMinute = d.getMinutes(),
                messageSec = d.getSeconds(),
                messageYear = d.getFullYear(),
                messageDate = d.getDate(),
                messageMonth = d.getMonth() + 1,
                actualDateTime = `${messageYear}-${messageMonth}-${messageDate} ${messageHour}:${messageMinute}:${messageSec}`;
            var message = $('#messageText').val();
            var data = {
                message: message,
                datetime: actualDateTime,
                uniq: unique_id
            }
            var jsonData = JSON.stringify(data);
            $.post('sent', { data: jsonData }, function (data) {
                $('#messageText').val('');
            })
        })
        // my details edit icon
        $('#edit_icon').click(function () {
            $('#main').addClass('blur');
            $('#update_container').show();
            $('#update_bio').focus();
            $('#dob').val(dob);
            $('#phone_num').val(phone);
            $('#update_bio').val(bio);
            $('#address').val(addr);
        })
        $('#update_container i').click(function () {
            $('#main').removeClass('blur');
            $('#update_container').hide();
        })
        //update form container submit event
        $('#form_details').on('submit', function (e) {
            e.preventDefault();
            var newDate = $('#dob').val();
            var newPhone = $('#phone_num').val();
            var newAddress = $('#address').val();
            var newBio = $('#update_bio').val();
            $.post('Message/updateBio', { dob: newDate, phone: newPhone, address: newAddress, bio: newBio }, function (data) {
                $('#main').removeClass('blur');
                $('#update_container').hide();
            })
        })
        $('#details_btn').click(function () {
            var bar = document.getElementById('details_of_user').style;
            if (bar.width == "20%") {
                barOut();
            } else {
                barIn();
            }
        })
        $('#btn_block').click(function () {
            var d = new Date(),
                messageHour = d.getHours(),
                messageMinute = d.getMinutes(),
                messageSec = d.getSeconds(),
                messageYear = d.getFullYear(),
                messageDate = d.getDate(),
                messageMonth = d.getMonth() + 1,
                actualDateTime = `${messageYear}-${messageMonth}-${messageDate} ${messageHour}:${messageMinute}:${messageSec}`;
            if (this.innerHTML == "Block User") {
                $.post('Message/blockUser', { time: actualDateTime, uniq: unique_id })
            } else {
                $.post('Message/unBlockUser', { uniq: unique_id })
            }
        })
        //working on block & unblock program
        function getBlockUserData() {
            $.post('Message/getBlockUserData', { uniq: unique_id }, function (data) {
                var jsonData = JSON.parse(data);
                if (jsonData.length == 1) {
                    for (var i = 0; i < jsonData.length; i++) {
                        if (jsonData[i]['blocked_from'] == unique_id) {
                            $('#messageText').attr('disabled', '');
                            $('#messageText').attr('placeholder', 'This user is not receiving messages at this time.');
                            $('#messageText').css('cursor', 'no-drop');
                            $('#btn_block').html('Block User');
                            $('#send_message').attr('disabled', '');
                            $('#send_message').css('cursor', 'no-drop');
                        } else {
                            $('#messageText').attr('disabled', '');
                            $('#messageText').attr('placeholder', 'You have blocked this user');
                            $('#btn_block').html('Unblock User');
                            $('#messageText').css('cursor', 'no-drop');

                            $('#send_message').attr('disabled', '');
                            $('#send_message').css('cursor', 'no-drop');
                        }
                    }
                } else if (jsonData.length == 2) {
                    $('#messageText').attr('disabled', '');
                    $('#messageText').attr('placeholder', 'You both are blocked each other');
                    $('#btn_block').html('Unblock User');
                    $('#messageText').css('cursor', 'no-drop');
                    $('#send_message').attr('disabled', '');
                    $('#send_message').css('cursor', 'no-drop');
                } else {
                    $('#messageText').removeAttr('disabled');
                    $('#messageText').attr('placeholder', 'Start Typing. . . .');
                    $('#btn_block').html('Block User');
                    $('#messageText').css('cursor', '');
                    $('#send_message').removeAttr('disabled');
                    $('#send_message').css('cursor', '');
                }
            })
        }
        Pace.on('done', function () {
            MAIN_PLAY.play();
        })
        getUserList(); //Calling the root function without interval
        inter2 = setInterval(getUserList, 1000); //Calling the root function with interval
    })
    </script>
</body>
</html>