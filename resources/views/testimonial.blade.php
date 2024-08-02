@include('header')
<!-- <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet"> -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Chatbot Container Start -->
                    <div class="chatbot-container">
                        <div class="chatbot-header">
                            <div class="chatbot-title">
                                <h5>Chat with top experts now, available 24/7</h5>
                                <div class="expert-details">                                
                                    <div style="width:35%">
                                    <div class="sc-a1qley-0 dMYGfQ">
                                        <div class="sc-1xtsbh6-0 fVWYqm">
                                            <img loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="sc-11ya23k-0 efqaKo" src="/images/MariaS.webp" style="color: transparent;"></div>
                                        <div class="sc-1xtsbh6-0 fVWYqm">
                                            <img loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="sc-11ya23k-0 efqaKo" src="/images/MaxP.webp" style="color: transparent;"></div>
                                        <div class="sc-1xtsbh6-0 fVWYqm">
                                            <img loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="sc-11ya23k-0 efqaKo" src="/images/SophiaT.webp" style="color: transparent;"></div>
                                        </div>
                                    </div>                          
                                    <div id="cert"><p>16 certified experts available</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="chatbot-messages" id="chat-content">
                            <!-- Chat messages will be dynamically inserted here -->
                        </div>
                        <div class="chatbot-input">
                            <input type="text" id="chat-input-text" placeholder="Type your message here..." />
                            <button id="chat-send">Send</button>
                        </div>
                    </div>
                    <!-- Chatbot Container End -->

                    <!-- Chatbot Button Start -->
                    <!-- <div class="chatbot-button" id="open-chatbot">
                        <img src="{{ asset('images/chat-icon.png') }}" alt="Chat with us">
                    </div> -->
                    <!-- Chatbot Button End -->
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid mb-4" src="{{ asset('images/testimonial-1.jpg') }}"alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-4" src="{{ asset('images/testimonial-2.jpg') }}"alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    @include('footer')
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom Javascript -->
<script>
    $(document).ready(function() {
        // $('#open-chatbot').click(function() {
        //     $('.chatbot-container').toggleClass('active');
        // });

        // $('.close-chatbot').click(function() {
        //     $('.chatbot-container').removeClass('active');
        // });
        $('#chat-content').append('<div class="chat-message bot-message">"Welcome! How can I help you with your question?"</div>');
        $('#chat-send').click(function() {
            var message = $('#chat-input-text').val();
            console.log("==========",message);
            if(message) {
                $('#chat-content').append('<div class="chat-message user-message">' + message + '</div>');
                $('#chat-input-text').val('');
                // Simulate bot response
                if(message == 'hi' || message == 'Hi' || message == 'hello' || message == 'Hello' || message == 'Hey' || message == 'hey') {
                    setTimeout(function() {
                        $('#chat-content').append('<div class="chat-message bot-message">Hello! I am here to help. Can you please provide me with more details about the issue you are facing?</div>');
                    }, 1000);
                }else if(message.includes('service')) {
                    setTimeout(function() {
                        $('#chat-content').append('<div class="chat-message bot-message">Our service, Expert Squad, offers a question and answer service where you can ask any questions you may have and receive expert advice and guidance. How can I assist you today?</div>');
                    }, 1000);
                }else if(message.includes('Service')) {
                    setTimeout(function() {
                        $('#chat-content').append('<div class="chat-message bot-message">Our service, Expert Squad, offers a question and answer service where you can ask any questions you may have and receive expert advice and guidance. How can I assist you today?</div>');
                    }, 1000);
                }else if(message.includes('tell')) {
                    setTimeout(function() {
                        $('#chat-content').append('<div class="chat-message bot-message">Our service, Expert Squad, offers a question and answer service where you can ask any questions you may have and receive expert advice and guidance. How can I assist you today?</div>');
                    }, 1000);
                }else if(message.includes('Tell')) {
                    setTimeout(function() {
                        $('#chat-content').append('<div class="chat-message bot-message">Our service, Expert Squad, offers a question and answer service where you can ask any questions you may have and receive expert advice and guidance. How can I assist you today?</div>');
                    }, 1000);
                }else {
                    setTimeout(function() {
                        $('#chat-content').append('<div class="chat-message bot-message">Ok, got it! I am sending you to a secure page to join Expert-Squad for only $1 (fully refundable). Meanwhile, I will tell the Expert about your situation.</div>');
                    }, 1000);
                }
            }
        });
    });
</script>