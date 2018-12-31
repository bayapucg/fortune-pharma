<style type="text/css">
    
        #chat_btn{
            position: absolute;
            bottom: 25px;
            right: 25px;
        }

        .chat_box .chat_window {
            width: 300px;
            height: 440px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            background-color: #eee;
            overflow: hidden;
            position: absolute;
            bottom: 3%;
            right: 2%;
            font-family: "Calibri", "Roboto", sans-serif;
        }

        .chat_box .top_menu {
            background-color: #34444c;
            width: 100%;
            padding: 10px;
            box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
        }

        .chat_box .top_menu .buttons {
            margin: 3px 0 0 20px;
            position: absolute;
        }

        .chat_box .top_menu .buttons .button {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px;
            position: relative;
        }

        .chat_box .top_menu .buttons .button.close {
            background-color: #f5886e;
        }

        .chat_box .top_menu .buttons .button.minimize {
            background-color: #fdbf68;
        }

        .chat_box .top_menu .buttons .button.maximize {
            background-color: #a3d063;
        }

        .chat_box .top_menu .title {
            text-align: center;
            color: #fff;
            font-size: 20px;
        }

        .chat_box .messages {
            position: relative;
            list-style: none;
            padding: 20px 10px 0 10px;
            margin: 0;
            height: 350px;
            overflow-y: scroll;
        }

        .chat_box .messages .message {
            clear: both;
            overflow: hidden;
            margin-bottom: 20px;
            transition: all 0.5s linear;
            opacity: 0;
        }

        .chat_box .messages .message.left .avatar {
            float: left;
        }

        .chat_box .messages .message.left .text_wrapper {
            background-color: #3b5f71;
            margin-left: 5px;
        }

        .chat_box .messages .message.left .text_wrapper::after,
        .chat_box .messages .message.left .text_wrapper::before {
            right: 100%;
            border-right-color: #3b5f71;;
        }

        .chat_box .messages .message.left .text {
            color: white;
        }

        .chat_box .messages .message.right .avatar {
            float: right;
            margin: 0px;
            margin-left: 10px;
        }

        .chat_box .messages .message.right .text_wrapper {
            background-color: #c7eafc;
            float: right;
        }

        .chat_box .messages .message.right .text_wrapper::after,
        .chat_box .messages .message.right .text_wrapper::before {
            left: 100%;
            border-left-color: #c7eafc;
        }

        .chat_box .messages .message.right .text {
            color: #45829b;
        }

        .chat_box .messages .message.appeared {
            opacity: 1;
        }

        .chat_box .messages .message .avatar img{
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: inline-block;
        }

        .chat_box .messages .message .text_wrapper {
            display: inline-block;
            padding: 7px;
            border-radius: 6px;
            width: calc(100% - 55px);
            min-width: 100px;
            position: relative;
        }

        .chat_box .messages .message .text_wrapper::after,
        .chat_box .messages .message .text_wrapper:before {
            top: 10px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .chat_box .messages .message .text_wrapper::after {
            border-width: 6px;
            margin-top: 0px;
        }

        .chat_box .messages .message .text_wrapper::before {
            border-width: 6px;
            margin-top: 0px;
        }

        .chat_box .messages .message .text_wrapper .text {
            font-size: 18px;
            font-weight: 300;
        }

        .chat_box .bottom_wrapper {
            position: relative;
            background-color: #fff;
        }

        .chat_box .bottom_wrapper .message_input_wrapper {
            display: inline-block;
            height: 40px;
            border: 1px solid #bcbdc0;
            width: 80%;
            position: relative;
            padding: 0 20px;
        }

        .chat_box .bottom_wrapper .message_input_wrapper .message_input {
            border: none;
            height: 100%;
            box-sizing: border-box;
            width: calc(100% - 40px);
            position: absolute;
            outline-width: 0;
            color: gray;
        }

        .chat_box .bottom_wrapper .send_message {
            width: 20%;
            height: 40px;
            display: inline-block;
            background-color: #016cd6;
            border: 2px solid #016cd6;
            color: #fff;
            cursor: pointer;
            transition: all 0.2s linear;
            text-align: center;
            float: right;
        }

        .chat_box .bottom_wrapper .send_message:hover {
            color: #016cd6;
            background-color: #fff;
        }

        .chat_box .bottom_wrapper .send_message .text {
            font-size: 18px;
            font-weight: 300;
            display: inline-block;
            line-height: 35px;
        }

        .chat_box .message_template {
            display: none;
        }
    </style>   
   <!-- <button class="btn btn-primary" id="chat_btn">
        <i class="fa fa-comment"></i> Chat
    </button>
    <div class="chat_box">
        <div class="chat_window">
            <div class="top_menu">
                <div class="title">Chat</div>
            </div>
            <ul class="messages"></ul>
            <form action="" method="">
                <div class="bottom_wrapper clearfix">
                    <div class="message_input_wrapper">
                        <input class="message_input" placeholder="Type your message here..." />
                    </div>
                    <a href="#" type="submit">
                        <div class="send_message">
                            <div class="icon"></div>
                            <div class="text"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                        </div>
                    </a>
                </div>
            </form>
        </div>
        <div class="message_template">
            <li class="message">
                <div class="avatar">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"/>
                </div>
                <div class="text_wrapper">
                    <div class="text"></div>
                </div>
            </li>
        </div>
    </div>-->
    <script>
    $(document).ready(function(){
        $(".chat_box").hide();
        $("#chat_btn").click(function(){
            $(".chat_box").toggle();
        });
    });
    </script>
    <script type="text/javascript">
        (function() {
            var Message;
            Message = function(arg) {
                this.text = arg.text, this.message_side = arg.message_side;
                this.draw = function(_this) {
                    return function() {
                        var $message;
                        $message = $($('.message_template').clone().html());
                        $message.addClass(_this.message_side).find('.text').html(_this.text);
                        $('.messages').append($message);
                        return setTimeout(function() {
                            return $message.addClass('appeared');
                        }, 0);
                    };
                }(this);
                return this;
            };
            $(function() {
                var getMessageText, message_side, sendMessage;
                message_side = 'right';
                getMessageText = function() {
                    var $message_input;
                    $message_input = $('.message_input');
                    return $message_input.val();
                };
                sendMessage = function(text) {
                    var $messages, message;
                    if (text.trim() === '') {
                        return;
                    }
                    $('.message_input').val('');
                    $messages = $('.messages');
                    message_side = message_side === 'left' ? 'right' : 'left';
                    message = new Message({
                        text: text,
                        message_side: message_side
                    });
                    message.draw();
                    return $messages.animate({
                        scrollTop: $messages.prop('scrollHeight')
                    }, 300);
                };
                $('.send_message').click(function(e) {
                    return sendMessage(getMessageText());
                });
                $('.message_input').keyup(function(e) {
                    if (e.which === 13) {
                        return sendMessage(getMessageText());
                    }
                });
                sendMessage('Hello Welcome to Pracha B-Sliver:)');
                setTimeout(function() {

                }, 1000);
                return setTimeout(function() {

                }, 2000);
            });
        }.call(this));
    </script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/moment.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/plugins/raphael/raphael-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<!--
		<script>
            var popup = document.getElementById("hs_popup");
            function hide_show_popup() {
              if (popup.style.display == "block"){
                popup.style.display = "none"
                }
              else {
                popup.style.display = "block"
              }
            }
            inter=setInterval(hide_show_popup,1000)
        </script>
-->
    </body>
</html>