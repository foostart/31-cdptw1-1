<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-31">

        <div class="container contact-form">
                    <div class="contact-image">
                        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                    </div>
                    <form method="post"  name="myForm" onsubmit="return validateForm()" >
                        <h3>Drop Us a Message</h3>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="yourName" class="form-control" placeholder="Your Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sdt" class="form-control" placeholder="Your Phone Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>
</div>
