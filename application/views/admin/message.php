<?php

// if (isset($_SESSION)) {
// 	$image = $_SESSION['image'];
// 	$name = $data[0]['user_fname']." ".$data[0]['user_lname'];
// }
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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="../assets/css/message/loading-bar.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<title>Realtime Chat Application CI</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
        * {
        margin: 0;
        padding: 0;
        }
        body {
        overflow-x: hidden;
        font-family: "poppins", sans-serif;
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
                        <div id="owner_avtar" style="background-image: <?php echo base_url(); ?>assets/dist/img/admin-user.png);">
                            <div>
                                <div id="online"></div>
                            </div>
                        </div>
                        <div id="owner_profile_text" class="">
                            <h6 id="owner_profile_name" class="m-0 p-0">Shan Putha</h6>
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
	<script type="text/javascript" src="/assets/dist/js/message/main.js"></script>
</body>
</html>