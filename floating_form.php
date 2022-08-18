<html>
<head>
<style>
.form-parent {
  width:323px;height:auto;
  background: transparent url('https://3.bp.blogspot.com/-gvfHlb6JnY4/VPnwlkELmhI/AAAAAAAAKDU/9lgOeCd279E/s1600/contact-button.png') no-repeat right 10px;position:fixed;top:150px;left: -275px;z-index:9999999;transition:all ease .6s;-moz-transition:all ease .6s;-webkit-transition:all ease .6s;-o-transition:all ease .6s;}
.form-parent:hover {left:0;}
.cc-float-form {
	color:#000;
	padding:10px;
	width:250px;
	border:2px solid #000;
	border-radius: 15px;
	}
#ContactForm1 {display:none;}
.contact-form-area {
	background: #b99999;
	width: 245px;padding: 10px 0px;border: 1px solid #111;box-shadow: 2px 2px 2px #111 inset;    -webkit-box-shadow: 2px 2px 2px #111 inset;font-family:Verdana, Geneva, sans-serif;color:#fafafa;font-size: 12px;}
#cc {float:right;font-size:9px;margin-top:-10px;color:#777;}#cc a {    color: #777;text-decoration:none;}
</style>
</head>
<body>
<!---floating form-->
<div class='form-parent'>
<form name="contact-form" class="cc-float-form">
<p></p>
Name:<br />
<input class="contact-form-area" id="ContactForm1_contact-form-name" name="name" size="30" value="" type="text" />
<p></p>
Email Address:
<span style="color:red;">*</span><br />
<input class="contact-form-area" id="ContactForm1_contact-form-email" name="email" size="30" value="" type="text" />
<p></p>
Mobile Number: <span style="color:red;">*</span><br />
<input class="contact-form-area" id="ContactForm1_contact-form-mobile" name="mobile" size="30" value="" type="number" />
<p></p>
<input class="contact-form-button contact-form-button-submit" id="ContactForm1_contact-form-submit" value="Send" type="button" />
<p></p>
<div style="text-align: center; max-width: 222px; width: 100%">
<p class="contact-form-error-message" id="ContactForm1_contact-form-error-message"></p>
<p class="contact-form-success-message" id="ContactForm1_contact-form-success-message"></p>
</div>
<div id="cc">
By <a href="https://drgalen.org/" target="_blank">Dr.Galen</a>
</div>
</form>
</div>
</body>
</html>
