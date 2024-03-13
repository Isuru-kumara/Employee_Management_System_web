<?php
	$image ='image';
	$name ='employee_name';
    $employee=$this->input->post('txtusername');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 	 	

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
            margin-top: 2rem;
            letter-spacing: 0.5px;
            height: 110%;
        }

        .msg-header {
            border: 1px solid #ccc;
            width: 100%;
            height: 10%;
            padding-top: 6px;
            padding-bottom: 5px;
            border-bottom: none;
            display: inline-block;
            background-color: #db86e2;
            margin: 0;
            /* border-top-left-radius: 20px;
            border-top-right-radius: 20px; */
        }

        .msgimg {
            margin-left: 5%;
            float: left;
        }

        .container1 {
            width: 280px;
            height: auto; 
            float: left;
            margin: 0;
        }

        .active {            
            color: rgb(255, 255, 255); 
            height: 10%; 
        }

        /* .chat-page {
            padding: 0 0 50px 0;
        } */

        .msg-inbox {
            border: 1px solid #ccc;
            overflow: hidden;
            /* border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px; */
        }

        .chats {
            padding: 30px 15px 0 25px;
        }

        .msg-page {
            max-height: 500px;
            overflow-y: auto;
        }

        .msg-bottom {
            border-top: 1px solid #ccc;
            position: relative;
            height: 11%;
            background-color: #db86e2;
        }

        .input-group {
            float: right;
            margin-top: 13px;
            margin-right: 210px;
            outline: none !important;
            border-radius: 20px;
            width: 61% !important;
            background-color: #fff;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
        }
            
        .input-group>.form-control {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0;
        }
            
        .form-control {
            border: none !important;
            border-radius: 20px !important;
            display: block;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
            
        .input-group-text {
            background: transparent !important;
            border: none !important;
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: b;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            font-weight: bold !important;
            cursor: pointer;
        }
            
        input:focus {
            outline: none;
            border: none !important;
            box-shadow: none !important;
        }
            
        .send-icon {
            font-weight: bold !important;
        }

        .received-chats-img {
            display: inline-block;
            width: 50px;
            float: left;
        }

        .received-msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }
        .received-msg-inbox {
            width: 57%;
        }

        .received-msg-inbox p {
            background: #efefef none repeat scroll 0 0;
            border-radius: 10px;
            color: #646464;
            font-size: 14px;
            margin-left: 1rem;
            padding: 1rem;
            width: 100%;
            box-shadow: rgb(0 0 0 / 25%) 0px 5px 5px 2px;
        }
            p {
            overflow-wrap: break-word;
        }

        .time {
            color: #777;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }
        .outgoing-chats {
            overflow: hidden;
            margin: 26px 20px;
        }

        .outgoing-chats-msg p {
            background-color: #3a12ff;
            background-image: linear-gradient(45deg, #ee087f 0%, #DD2A7B 25%, #9858ac 50%, #8134AF 75%, #515BD4 100%);
            color: #fff;
            border-radius: 10px;
            font-size: 14px;
            color: #fff;
            padding: 5px 10px 5px 12px;
            width: 100%;
            padding: 1rem;
            box-shadow: rgb(0 0 0 / 25%) 0px 2px 5px 2px;
        }
        .outgoing-chats-msg {
            float: right;
            width: 46%;
        }

        .outgoing-chats-img {
            display: inline-block;
            width: 50px;
            float: right;
            margin-right: 1rem;
        }

        .padContainer {
            padding: 0px;            
        }

        @media only screen and (max-device-width: 850px) {
            *,
            .time {
                font-size: 28px;
            }
            img {
                width: 65px;
            }
            .msg-header {
                height: 5%;
            }
            .msg-page {
                max-height: none;
            }
            .received-msg-inbox p {
                font-size: 28px;
            }
            .outgoing-chats-msg p {
                font-size: 28px;
            }
        }

        @media only screen and (max-device-width: 450px) {
            *,
            .time {
                font-size: 28px;
            }
            img {
                width: 65px;
            }
            .msg-header {
                height: 5%;
            }
            .msg-page {
                max-height: none;
            }
            .received-msg-inbox p {
                font-size: 28px;
            }
            .outgoing-chats-msg p {
                font-size: 28px;
            }
        }

        #calendar {
            max-width: 1300px;
        }
        .col-centered{
            float: none;
            margin: 0 auto;
        }
        .tooltip{
            width:auto;
            height:20%;
            color:black;
            background:#E5E5E5;
            position:absolute;
            z-index:10001;
            border-radius:5px;
            top: -300%;
            left:50%;
            padding:5px 10px;
            margin-left:-60px;
            bottom: 150%;
            font-size: 15px;
        }
        .colors{
            font-size: 14px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            background: white;
            /* border-style: solid;
            border-width: 3px;
            border-color: #C6CFD6;
            border-radius:20px; */
            height:500px;
            width: 15%;
            margin: 0px 0px;
            padding: 0px 0px;
        }
        .colors-div{
            font-size: 14px;
            background: white;
            /* border-style: solid;
            border-width: 3px;
            border-color: #C6CFD6;
            border-radius:20px; */
            padding: 5px;
        }
        .colors-header{
            margin: 0 auto;
            background-color:#379441;
            width: 115%;
            height: 9%;
            padding: 10px;
            border-style: solid;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
            border-color: transparent;
            margin-left: -15px;
        }
        .color-scheme-text{
            font-size: 14px;

        }
        .color-text{
            font-size: 12px;
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
            
            padding-bottom: 20px;
        }

        #chatbox {
            padding-left: 17px;
            width: 100%;
            transition: all 0.2s;
        }

        #data_container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
       
        hr {
            width: 80%;
            margin: auto;
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
        
        
    </style>
</head>
<body>
<div class="content-wrapper">
    <section class="content-header">
      <h1>Messages</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Messages</a></li>
        <li class="active">Chat Page</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-10">
                <div class="box box-info">
                    <div class="box-header padContainer">
                        <div class="msg-header">
                            <div class="container1">
                                <img src="<?php echo base_url(); ?>assets/dist/img/Admin1.jpg" alt="User Image" class="msgimg" style="width: 50px; vertical-align: middle; border-style: none; border-radius: 100%;">              
                                <div class="active py-3">
                                    <p class="px-3">Isuru Kumara</p>                    
                                </div>    
                            </div>
                        </div>               
                    </div>
                     <div class="box-body padContainer">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="chatbox">                                    
                                    <div class="chatting_section" id="chat_area">
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
                                        <div id="chat_message_area"></div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-10 colors text-center">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="col-md-12 colors-div">
                        <!-- <div id="chat_user_list">
                            <div id="owner_profile_details">
                                <div id="owner_avtar" style="background-image: url('../upload/<?php echo $image;?>'); background-size: 100% 100%">
                                    <div>
                                        <div id="online"></div>
                                    </div>
                                </div>
                                <div id="owner_profile_text" class="">
                                    <h6 id="owner_profile_name" class="m-0 p-0"><?php echo $name;?></h6>
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
                                <div id="user_list" class="py-3"></div>
                            </div>
                        </div> -->
                        
                        <label class="color-scheme-text h3">Recent Chats</label><br>
                        <label class="color-text">Teshan Kaushika</label><br>
                        <input type="text" class="form-control" style="background:#FF0000;" required readonly>

                        <label class="color-text">Uvini Randiithi</label><br>
                        <input type="text" class="form-control" style="background:#009222;" required readonly>

                        <label class="color-text">Pemini Imasha</label><br>
                        <input type="text" class="form-control" style="background:#FF6E33;" required readonly>

                        <label class="color-text">Rashmi Dileka</label><br>
                        <input type="text" class="form-control" style="background:#337ab7;" required readonly>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
      <div class="row">       
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header padContainer">
                <div class="msg-header">
                    <div class="container1">
                        <img src="<?php echo base_url(); ?>assets/dist/img/Admin1.jpg" alt="User Image" class="msgimg" style="width: 50px; vertical-align: middle; border-style: none; border-radius: 100%;">              
                        <div class="active py-3">
                            <p class="px-3">Isuru Kumara</p>                    
                        </div>                
                    </div>
                </div>               
            </div>
            <div class="box-body padContainer">
                <div class="chat-page">
                    <div class="msg-inbox">
                        <div class="chats">
                            <div class="msg-page">
                                <div class="received-chats">
                                    <div class="received-chats-img">
                                    <img src="<?php echo base_url(); ?>assets/dist/img/Admin1.jpg" alt="User Image" class="msgimg" style="width: 50px; vertical-align: middle; border-style: none; border-radius: 100%;">                                  
                                    </div>
                                    <div class="received-msg px-1">
                                        <div class="received-msg-inbox">
                                            <p>Hi !! This is message from Riya . Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quas nemo eum, earum sunt, nobis similique quisquam eveniet pariatur commodi modi voluptatibus iusto omnis harum illum
                                                iste distinctio expedita illo!</p>
                                            <span class="time">18:06 PM | January 24 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing-chats">
                                    <div class="outgoing-chats-img px-3">
                                    <img src="<?php echo base_url(); ?>assets/dist/img/peter.jpg" alt="User Image" class="msgimg" style="width: 50px; vertical-align: middle; border-style: none; border-radius: 100%;">              
                                    </div>
                                    <div class="outgoing-msg">
                                        <div class="outgoing-chats-msg">
                                            <p class="multi-msg">Hi riya , Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nobis deleniti earum magni recusandae assumenda.
                                            </p>
                                            <p class="multi-msg">Lorem ipsum dolor sit amet consectetur.</p>
                                            <span class="time">18:30 PM | January 24 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="received-chats">
                                    <div class="received-chats-img px-1">
                                    <img src="<?php echo base_url(); ?>assets/dist/img/Admin1.jpg" alt="User Image" class="msgimg" style="width: 50px; vertical-align: middle; border-style: none; border-radius: 100%;">              
                                    </div>
                                    <div class="received-msg">
                                        <div class="received-msg-inbox">
                                            <p class="single-msg">
                                            Hi !! This is message from John Lewis. Lorem ipsum, dolor sit amet
                                            consectetur adipisicing elit. iste distinctio expedita illo!
                                            </p>
                                            <span class="time">18:31 PM | January 24</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing-chats">
                                    <div class="outgoing-chats-img px-3">
                                    <img src="<?php echo base_url(); ?>assets/dist/img/peter.jpg" alt="User Image" class="msgimg" style="width: 50px; vertical-align: middle; border-style: none; border-radius: 100%;">              
                                    </div>
                                    <div class="outgoing-msg">
                                    <div class="outgoing-chats-msg">
                                        <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, sequi.
                                        </p>                          
                                        <span class="time">18:34 PM | January 24</span>
                                    </div>
                                    </div>
                                </div>
                                </div> 
                            </div>
                        
                        <!-- <div class="msg-bottom">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="  Write message...">
                                <div class="input-group-append ">
                                    <span class="input-group-text send-icon"><i class="bi bi-send pt-1 px-2"></i>
                                    </span>
                                </div>
                            </div>              
                        </div>                  -->
                    </div>
                </div>                
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
	<script type="text/javascript" src="/assets/dist/js/message/main.js"></script>
</body>
</html>

    