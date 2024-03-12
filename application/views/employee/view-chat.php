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
    </style>
</head>
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
              <!-- <h3 class="box-title">Teshan Wijewardhana</h3> -->
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
                
                <div class="msg-bottom">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="  Write message...">
                        <div class="input-group-append ">
                            <span class="input-group-text send-icon"><i class="bi bi-send pt-1 px-2"></i>
                            </span>
                        </div>
                    </div>              
                </div>                 
            </div>
        </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    