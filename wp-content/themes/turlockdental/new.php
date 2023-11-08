<?php 
/*
	Template Name: modal
*/
?>
<!DOCTYPE html>
<html>
<head>
 <title> Popup </title>
 <style>
     body {
    font-family:Arial, Helvetica, sans-serif;
}
 
p {
    font-size: 16px;
    line-height: 26px;
    letter-spacing: 0.5px;
    color: #484848;
}
 
/* Popup Open button */ 
.open-button{
    color:#FFF;
    background:#0066CC;
    padding:10px;
    text-decoration:none;
    border:1px solid #0157ad;
    border-radius:3px;
}
 
.open-button:hover{
    background:#01478e;
}
 
.popup {
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.75);
    width:100%;
    height:100%;
    display:none;
}
 
/* Popup inner div */
.popup-content {
    width: 500px;
    margin: 0 auto;
    box-sizing: border-box;
    padding: 40px;
    margin-top: 20px;
    box-shadow: 0px 2px 6px rgba(0,0,0,1);
    border-radius: 3px;
    background: #fff;
    position: relative;
}
 
/* Popup close button */
.close-button {
    width: 25px;
    height: 25px;
    position: absolute;
    top: -10px;
    right: -10px;
    border-radius: 20px;
    background: rgba(0,0,0,0.8);
    font-size: 20px;
    text-align: center;
    color: #fff;
    text-decoration:none;
}
 
.close-button:hover {
    background: rgba(0,0,0,1);
}
 
@media screen and (max-width: 720px) {
.popup-content {
    width:90%;
    } 
}
 </style>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head> 

<body>
    <a class="open-button" popup-open="popup-1" href="javascript:void(0)"> Popup 
        Preview</a>
         
        <div class="popup" popup-name="popup-1">
            <div class="popup-content">
            <h2>Model </h2>
        <p>Model content will be here. Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Aliquam consequat diam ut tortor 
        dignissim, vel accumsan libero venenatis. Nunc pretium volutpat 
        convallis. Integer at metus eget neque hendrerit vestibulum. 
        Aenean vel mattis purus. Fusce condimentum auctor tellus eget 
        ullamcorper. Vestibulum sagittis pharetra tellus mollis vestibulum. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a class="close-button" popup-close="popup-1" href="javascript:void(0)">x</a>
            </div>
        </div> 

        <div class="popup" popup-name="popup-1">
            <div class="popup-content">
            <h2>Model2 </h2>
        <p>Model content will be here. Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Aliquam consequat diam ut tortor 
        dignissim, vel accumsan libero venenatis. Nunc pretium volutpat 
        convallis. Integer at metus eget neque hendrerit vestibulum. 
        Aenean vel mattis purus. Fusce condimentum auctor tellus eget 
        ullamcorper. Vestibulum sagittis pharetra tellus mollis vestibulum. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a class="close-button" popup-close="popup-1" href="javascript:void(0)">x</a>
            </div>
        </div> 
        <div class="popup" popup-name="popup-1">
            <div class="popup-content">
            <h2>Model3 </h2>
        <p>Model content will be here. Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Aliquam consequat diam ut tortor 
        dignissim, vel accumsan libero venenatis. Nunc pretium volutpat 
        convallis. Integer at metus eget neque hendrerit vestibulum. 
        Aenean vel mattis purus. Fusce condimentum auctor tellus eget 
        ullamcorper. Vestibulum sagittis pharetra tellus mollis vestibulum. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a class="close-button" popup-close="popup-1" href="javascript:void(0)">x</a>
            </div>
        </div> 
        <script>
            $(function() {
    // Open Popup
    $('[popup-open]').on('click', function() {
        var popup_name = $(this).attr('popup-open');
 $('[popup-name="' + popup_name + '"]').fadeIn(300);
    });
 
    // Close Popup
    $('[popup-close]').on('click', function() {
 var popup_name = $(this).attr('popup-close');
 $('[popup-name="' + popup_name + '"]').fadeOut(300);
    });
 
    // Close Popup When Click Outside
    $('.popup').on('click', function() {
 var popup_name = $(this).find('[popup-close]').attr('popup-close');
 $('[popup-name="' + popup_name + '"]').fadeOut(300);
    }).children().click(function() {
 return false;
    });
 
});
        </script> 
</body>
</html>