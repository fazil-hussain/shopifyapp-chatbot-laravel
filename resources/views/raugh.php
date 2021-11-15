chatopt data
----------------------------------------------------------------
[{"avatar":"facebook-0","agent":"facebook","link":"fb.com"}]
----------------------------------------------------------------

form sumit rquirements

{"inquireemail":"fazil hussasin","vistorname":"optional","visitoremail":"optional","visitorquestion":"optional"}
-------------------------------
widget paearance rqu
{"widgtpossition":"left","btntext":"Help","themecolor":"#a80b0b"}

-------------------------------
faqs
{"questions":["what is order",null],"answers":["order data","Once you have placed your order, we will send you a confirmation email to track the status of your order.Once your order is shipped we will send you another email along with the link to track your order.Or, you can track the status of your order from your \"order history\" section on your account page on the website."]}

-------


/**===================================================
 *      Variables Declaration
 * ===================================================
 */
var possition = "left";
var icontext = "Help";
var btncolor = "#a80b0b";

/**===================================================
 *      Request To Database
 * ===================================================
 */

var xhttp = new XMLHttpRequest();
var url = "/apps/datarequest";
var shop = Shopify.shop;

xhttp.open("POST", url, true);
xhttp.setRequestHeader("Content-Type", "application/json");
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var response = this.response;
        possition = JSON.parse(
            JSON.parse(response).widgetapearance
        ).widgtpossition;
        icontext = JSON.parse(JSON.parse(response).widgetapearance).btntext;
        btncolor = JSON.parse(JSON.parse(response).widgetapearance).themecolor;
        console.log(JSON.parse(response).widgetapearance);
        console.log("response: " + icontext);
        cssfucntion();
        //  console.log((JSON.parse(JSON.parse(response).widgetapearance)).widgtpossition);
    }
};
xhttp.send(shop);
console.log("after request" + possition);

/**===================================================
 *      Appending Css
 * ===================================================
 */

function cssfucntion() {
    var css =
            `.form_btn {
        background:    ` +
            btncolor +
            `;
        color: #fff;
        display: inline-block;
        position: fixed;
        // position: absolute;
        ` +
            possition +
            `: 0;
        bottom: 0;
        margin: 0px 10px 10px 0px;
        font-size: 16px;
        border: none;
        padding: 10px 15px;
        border-radius: 50px;
        cursor: pointer;
        font-family: 'Roboto', sans-serif;
    }
    .form_btn i{
        font-size: 17px;
        margin-right: 5px;
    }
    .form_btn:focus{
        outline: none;
    }
    .form_bg {
        position: fixed;
        right: 10px;
        font-family: 'Roboto', sans-serif;
        background: #FFFFFF;
        box-shadow: 0 0 0 0px rgba(63,63,68,.05), 0 1px 3px 0 rgb(183 183 183);
        height: 500px;
        width: 417px;
        margin: 170px 10px 0px 0px;
    }
    .top_form{
        height: 10%;
        box-shadow: 0 0 0 0px rgba(63,63,68,.05), 0 1px 1px 0 rgb(183 183 183);
    }
    .top_form h3 {
        text-align: center;
        margin: 0px;
        padding: 15px;
        color: #09668d;
        font-size: 18px;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
    }
    .top_form h3 i {
        font-size: 11px;
        float: right;
        margin-top: 6px;
        color: #000000;
        cursor: pointer;
    }
    .a_left{
        float: left !important;
    }
    .body_form{
        height: 73%;
        overflow-y: scroll;
    }
    ::-webkit-scrollbar {
      width: 3px;
    }
    ::-webkit-scrollbar-track {
      background: #fff;
        border-top: 1px solid #c3c3c3;
    }
    ::-webkit-scrollbar-thumb {
      background: #D4D4D4;
        height: 20px;
    }
    .body_form h2 {
        color: #16c984;
        font-size: 16px;
        font-weight: 500;
        margin: 10px 20px 0px;
    }
    .faq_quest{
        width: 90%;
        margin-left: 5%;
        padding: 20px 0px;
    }
    .quest_bg {
        border: none;
        background: no-repeat;
        font-size: 15px;
        cursor: pointer;
        font-weight: 500;
        padding: 8px 0px;
        font-family: 'Roboto', sans-serif;
    }
    .quest_bg:focus {
        outline: none;
    }
    .ans_bg p {
        margin: 0px;
        padding: 10px 0px;
        font-size: 12px;
        line-height: 1.6;
    }

    .footer_form{
        height: 17%;
        background: #00bf55;
    }
    .footer_icon {
        width: 24%;
        height: 55px;
        margin: 5px auto 0 auto;
        display: inline-block;
        text-align: center;
    }
    .footer_icon_active {
        height: 30px;
        width: 30px;
        position: absolute;
        margin: -20px 0 0 calc(12% - 15px);
        -webkit-border-radius: 40px 0;
        -moz-border-radius: 40px 0;
        border-radius: 40px 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        display: block;
        background: #00bf55;
    }
    .footer_icon_active::after {
        color: #fff;
        text-align: center;
        font-size: 18px;
        margin-left: -3px;
    }
    .f_icon {
        width: 24%;
        height: 60px;
        cursor: pointer;
        margin: auto;
        position: absolute;
    }
    .f_icon:hover {
        filter: invert(.5);
    }
    .f_icon a{
        text-decoration: none;
    }
    .f_show_icon {
        width: 30px;
        height: 30px;
        margin: 10px auto 0px;
    }
    .f_show_icon i{
       font-size: 22px;
       color: #FFFFFF;
    }
    .f_icon_title {
        font-size: 9px;
        line-height: 1;
        height: 20px;
        color: #fff;
        width: 100%;
    }
    .whatsapp_form{
        display: flex;
        width: 90%;
        padding: 10px;
        border-bottom: 1px solid #dadada;
        cursor: pointer;
        margin: 0% 5% 0%;
        text-decoration: none;
    }
    .marg_t{
        margin-top: 20px;
    }
    .whatsapp_form:hover{
        background: #fbfcfc;
    }
    .w_img{
        width: 20%;
    }
    .w_img img {
        width: 100%;
        background: #f2f2f2;
        padding: 5px;
        border-radius: 50px;
    }
    .w_head{
        width: 90%;
    }
    .w_head p {
        margin: 0px;
        padding: 15px 10px;
        color: #09668d;
        font-size: 14px;
        font-weight: 500;
    }
    .contact_form{
        width: 90%;
        margin: 5%;
    }
    .contact_form label {
        color: #09668d;
        font-size: 12px;
        font-weight: 500;
    }
    .contact_form label span {
        color: #f24239;
    }
    .contact_form input {
        width: 100%;
        box-shadow: 0 0 5px #eff1f4 !important;
        padding: 10px 5px;
        border: 1px solid #e3e4e5 !important;
        margin: 3px 0px 15px;
        border-radius: 3px;
        font-size: 10px;
        color: #979797;
        font-weight: 300;
    }
    .contact_form input:focus{
        outline: none;
    }
    .contact_form textarea {
        width: 100%;
        box-shadow: 0 0 5px #eff1f4 !important;
        padding: 8px;
        border: 1px solid #e3e4e5 !important;
        margin: 3px 0px 15px;
        border-radius: 3px;
    }
    .contact_form textarea:focus{
        outline: none;
    }
    .contact_form p {
        font-size: 9px;
        margin: 2px 0px;
        color: #f41600;
        font-weight: 500;
    }
    .marg_0{
        margin-bottom: 0px !important;
    }
    .contact_form button{
        width: 100%;
        background: #09668d;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 3px;
        margin: 20px 0px;
        font-size: 14px;
        cursor: pointer;
    }
    .contact_form button:focus{
        outline: none;
    }
    .contact_form h3 {
        font-size: 12px;
        margin: 10px 0px 0px;
        font-weight: 500;
    }
    .marg_b {
        margin-bottom: 10px !important;
    }
    .footer_form p{
        margin: 0px;
       text-align: center;
        color: #FFFFFF;
        font-size: 10px;
    }
    .footer_form p i{
        margin-right: 2px;
        color: #FFFFFF;
        font-size: 10px;
    }
    .footer_form p a{
        text-decoration: none;
    }
    .notification_main {
        display: inline-block;
        position: fixed;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 6px 0 rgba(0,0,0,.4);
        color: #4f4f4f;
        bottom: 12px;
        right: 115px;
    }
    .notification_main_cross {
        width: 25px;
        margin-left: -25px;
        height: 50px;
        position: absolute;
    }
    .notification_main_cross i {
        background: #b2b2b2;
        color: white;
        padding: 3px 4px;
        font-size: 9px;
        border-radius: 50px;
        width: 15px;
        text-align: center;
        height: 15px;
        cursor: pointer;
    }
    .notification_main_text {
        padding: 10px 15px;
        max-width: 200px;
        font-size: 14px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }
    .notification_main j {
        display: block;
        position: absolute;
        bottom: 10px;
        right: -10px;
        margin-top: -10px;
        width: 10px;
        height: 20px;
        overflow: hidden;
    }
    .notification_main j::after {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        left: 0;
        top: 50%;
        transform: translate(-50%,-50%) rotate(-45deg);
        background-color: #FFF;
        box-shadow: 0 2px 6px 0 rgba(0,0,0,.4);
    }
    @media screen and (max-width: 1230px) and (min-width: 992px){

    }

    @media screen and (max-width: 991px) and (min-width: 825px){

    }

    @media screen and (max-width: 824px) and (min-width: 651px) {

    }
    @media only screen  and (max-width: 650px) and (min-width: 401px){
        .form_bg {
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
        }
        .top_form {
            height: 8%;
        }
        .body_form {
            height: 77%;
        }
        .footer_form {
            height: 15%;
        }
        }
        @media only screen and (max-width: 400px){
            .form_bg {
                height: 100%;
                width: 100%;
                top: 0;
                right: 0;
            }
            .top_form {
                height: 7%;
            }
            .body_form {
                height: 78%;
            }
            .footer_form {
                height: 15%;
            }
            }
            `,
            //---------------adding css to head file----------//
            head = document.head || document.getElementsByTagName("head")[0],
            style = document.createElement("style");
            head.appendChild(style);
            style.type = "text/css";
            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            }
            else {
                style.appendChild(document.createTextNode(css));
            }

/**===================================================
*   Chat Icon
* ===================================================
*/
    document.body.innerHTML +=
        `<button  class="form_btn" id="formbtnid"><span style=" fill: white;" >
            <svg height="12" width="12" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm-7.071.929A10 10 0 1 1 17.07 17.07 10 10 0 0 1 2.93 2.93z"/><path d="M11.126 13.002H8.99V11.86c.01-1.966.492-2.254 1.374-2.782.093-.056.19-.114.293-.178.73-.459 1.292-1.038 1.292-1.883 0-.948-.743-1.564-1.666-1.564-.852 0-1.657.398-1.712 1.533H6.305c.06-2.294 1.877-3.487 3.99-3.487 2.306 0 3.894 1.447 3.894 3.488 0 1.382-.695 2.288-1.806 2.952l-.237.144c-.79.475-1.009.607-1.02 1.777v1.142zm.17 2.012a1.344 1.344 0 0 1-1.327 1.328 1.32 1.32 0 0 1-1.227-1.834 1.318 1.318 0 0 1 1.227-.81c.712 0 1.322.592 1.328 1.316h-.001z"/></svg></span></i>` +
            icontext +
        `</button>

    <div class="notification_main" >
    <div class="notification_main_cross" onclick="hidecrosicon()">
        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zM7.707 6.293a1 1 0 0 0-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 1 0 1.414 1.414L10 11.414l2.293 2.293a1 1 0 1 0 1.414-1.414L11.414 10l2.293-2.293a1 1 0 0 0-1.414-1.414L10 8.586 7.707 6.293z"/></svg></i></div>
        <div class="notification_main_text">I'm right here if you need any help or talk to someone :)</div>
        <j></j>
    </div>	`;

/**===================================================
*   Chat Box HTML
* ===================================================
*/
    document.body.innerHTML += `<div style="display:block" class="form_bg">

    <div class="top_form">
    <h3>Whatsapp <i class="fas fa-times"></i></h3>
    </div>

    <div class="body_form">

    <a href="../chat.html" class="whatsapp_form marg_t" target="blank">
    <div class="w_img"><img src="assets/user-female.png" alt=""></div>
    <div class="w_head"><p>Customer Support</p></div>
    </a>

    <a href="../chat.html" class="whatsapp_form" target="blank">
    <div class="w_img"><img src="assets/user-male.png" alt=""></div>
    <div class="w_head"><p>Sales Support</p></div>
    </a>

    </div>

    <div class="footer_form">

    <span class="footer_icon">
        <div class="f_icon">
        <a href="help-form.html"><div class="f_show_icon" ><svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm-7.071.929A10 10 0 1 1 17.07 17.07 10 10 0 0 1 2.93 2.93z"/><path d="M11.126 13.002H8.99V11.86c.01-1.966.492-2.254 1.374-2.782.093-.056.19-.114.293-.178.73-.459 1.292-1.038 1.292-1.883 0-.948-.743-1.564-1.666-1.564-.852 0-1.657.398-1.712 1.533H6.305c.06-2.294 1.877-3.487 3.99-3.487 2.306 0 3.894 1.447 3.894 3.488 0 1.382-.695 2.288-1.806 2.952l-.237.144c-.79.475-1.009.607-1.02 1.777v1.142zm.17 2.012a1.344 1.344 0 0 1-1.327 1.328 1.32 1.32 0 0 1-1.227-1.834 1.318 1.318 0 0 1 1.227-.81c.712 0 1.322.592 1.328 1.316h-.001z"/></svg></i></div>
        <div class="f_icon_title">Help</div></a>
        </div>
    </span>

    <span class="footer_icon">
        <div class="footer_icon_active"></div>
        <div class="f_icon">
        <a href="whatsapp.html"><div class="f_show_icon">
        <svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 0C4.486 0 0 4.486 0 10c0 1.728.45 3.42 1.304 4.924L.101 17.965c-.458 1.209.726 2.393 1.935 1.934l3.04-1.204A9.944 9.944 0 0 0 10 20c5.514 0 10-4.486 10-10S15.514 0 10 0zM5.293 9.293a.997.997 0 0 1 1.414 0 .997.997 0 0 1 0 1.414.997.997 0 0 1-1.414 0 .997.997 0 0 1 0-1.414zm4 0a.997.997 0 0 1 1.414 0 .997.997 0 0 1 0 1.414 1.003 1.003 0 0 1-1.414 0 1.003 1.003 0 0 1 0-1.414zM14 9a.997.997 0 0 0-1 1 .997.997 0 0 0 1 1 .997.997 0 0 0 1-1 .997.997 0 0 0-1-1z"/></svg></i></div>
        <div class="f_icon_title">Chat</div></a>
        </div>
    </span>

    <span class="footer_icon">
        <div class="f_icon">
        <a href="contact.html"><div class="f_show_icon">
        <svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 5.324V15.5A1.5 1.5 0 0 0 1.5 17h17a1.5 1.5 0 0 0 1.5-1.5V5.324l-9.496 5.54a1 1 0 0 1-1.008 0L0 5.324z"/><path d="M19.443 3.334A1.494 1.494 0 0 0 18.5 3h-17a1.49 1.49 0 0 0-.943.334L10 8.842l9.443-5.508z"/></svg></i></div>
        <div class="f_icon_title">Contact Us</div></a>
        </div>
    </span>

    <span class="footer_icon">
        <div class="f_icon">
        <a href="track.html"><div class="f_show_icon">
        <svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1.5 2A1.5 1.5 0 0 0 0 3.5v11A1.5 1.5 0 0 0 1.5 16H2a3 3 0 1 0 6 0h4a3 3 0 1 0 6 0h.5a1.5 1.5 0 0 0 1.5-1.5v-3.361a1.5 1.5 0 0 0-.214-.772l-2.783-4.639A1.5 1.5 0 0 0 15.717 5H13V3.5A1.5 1.5 0 0 0 11.5 2h-10zM15 17a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM4 16a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm13.234-6H13V7h2.434l1.8 3z"/></svg></div>
        <div class="f_icon_title">Track Order</div></a>
        </div>
    </span>

    <p><a href="#"><i class="fas fa-bolt"></i> Faqprime</a></p>

    </div>	`;

/**===================================================
*   Hiding Notification
* ===================================================
*/
    function hidecrosicon() {
        document.getElementsByClassName(
            "notification_main"
        )[0].style.visibility = "hidden";
    }
/**===================================================
*   Toggle Chat Widget
* ===================================================
*/
    setTimeout(()=>{
        var togglebtn = document.getElementsByClassName("form_btn");
        var chatboxflag = 0;
        var boxselector = document.getElementsByClassName("form_bg")[0];
        togglebtn[0].addEventListener("click", function () {
            console.log("togglebtn clicked");
            if (chatboxflag == 0) {
                boxselector.style.display = "block";
                chatboxflag = 1;
            } else {
                boxselector.style.display = "none";
                chatboxflag = 0;
            }
        });
    },1000)
}
