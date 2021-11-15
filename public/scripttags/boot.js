
console.log('hello 4444')
// var shop = (Shopify.shop);
var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = 'https://fazilchatbot.discountly.app/assets/css/widgetstyle.css';
    link.media = 'all';
    head.appendChild(link);



var getapend = document.querySelector("body");


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
        var faqs = JSON.parse(response).faqs;
        // console.log(faqs);
        var questitons = JSON.parse(faqs).questions;
        var answers = JSON.parse(faqs).answers;
        var parseresponse = JSON.parse(response).widgetapearance;
        var icontext = JSON.parse(parseresponse).btntext;
        var possition= JSON.parse(parseresponse).widgtpossition;
        var btncolor = JSON.parse(JSON.parse(response).widgetapearance).themecolor;
        var avatar = JSON.parse(response).chatopt;
        var avatapars = JSON.parse(avatar);
        // console.log(avatapars);
        var avatarr='';
        for (variable of avatapars){
            var val = (variable.avatar).split('-')[0];
            console.log(val);
            if(val == "facebook" || val == "twitter" ){
                avatarr += ` <a href="${'https://'+variable.link}" class="whatsapp_form marg_t" target="blank">
                <div class="w_img"><img src="https://fazilchatbot.discountly.app/assets/img/${val}.png" alt=""></div>
                <div class="w_head"><p>${val}</p></div>
                </a>`
            }
            else if(val == "whatsapp")
            {
                avatarr += ` <a href="${'https://wa.me/'+variable.link}" class="whatsapp_form marg_t" target="blank">
                <div class="w_img"><img src="https://fazilchatbot.discountly.app/assets/img/${val}.png" alt=""></div>
                <div class="w_head"><p>${val}</p></div>
                </a>`
            }
        }
        var h1 = '';
        for(var key in questitons){

            h1 += `<h1 id="${key}">${questitons[key]}</h1>`
        }

        var buttomcoupen = `
        <div class="wla_background_color wal_form_btn " style="`+possition+`:0; background:`+ btncolor+`" onclick="open_widget()" style="display: block; float:right;">
                    <div class="wla_front_icon"><img class="wal-btn" src="https://widget.abandonedguru.com/img/help-icon.png"></div>
                    <div class="wla_fron_text">`+icontext+`</div>
                </div>

        <div class="form_bg" style="`+possition+`:0">

         <div class="top_form" id="top_form_1" onclick="open_widget_1()"  >
          <h3 ><span id="headertextt">Help</span> <i class="fas fa-times">X</i></h3>

         </div>

         <div class="body_form">

            <div id="helpbody" style="display:block" >
            <input id="besFilter" type="text" placeholder="How can we help?" style="background: url(https://widget.abandonedguru.com/img/search-icon.png) no-repeat !important;background-position: 10px !important;
            background-size: 25px !important;">
                ${h1}

            </div>
            <div id="chatbody" style="display:none">
                ${avatarr}
            </div>
            <div id="contactbody" style="display:none" >
                <h1>Hello to the contact body</h1>
            </div>

            <div id="trackbody" style="display:none" >
            <h1>Hello to the track body</h1>
        </div>


         </div>

         <div class="footer_form" style="background:`+btncolor+`">

          <span class="footer_icon">
           <div class="f_icon" onclick="tabchanger('help')">
            <a href="#"><div class="f_show_icon"><svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm-7.071.929A10 10 0 1 1 17.07 17.07 10 10 0 0 1 2.93 2.93z"/><path d="M11.126 13.002H8.99V11.86c.01-1.966.492-2.254 1.374-2.782.093-.056.19-.114.293-.178.73-.459 1.292-1.038 1.292-1.883 0-.948-.743-1.564-1.666-1.564-.852 0-1.657.398-1.712 1.533H6.305c.06-2.294 1.877-3.487 3.99-3.487 2.306 0 3.894 1.447 3.894 3.488 0 1.382-.695 2.288-1.806 2.952l-.237.144c-.79.475-1.009.607-1.02 1.777v1.142zm.17 2.012a1.344 1.344 0 0 1-1.327 1.328 1.32 1.32 0 0 1-1.227-1.834 1.318 1.318 0 0 1 1.227-.81c.712 0 1.322.592 1.328 1.316h-.001z"/></svg></div>
            <div class="f_icon_title">Help</div></a>
           </div>
          </span>

          <span class="footer_icon">
           <div class="footer_icon_active"></div>
           <div class="f_icon" id="chaticon" onclick="tabchanger('chat')">
            <a href="#"><div class="f_show_icon"> <svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 0C4.486 0 0 4.486 0 10c0 1.728.45 3.42 1.304 4.924L.101 17.965c-.458 1.209.726 2.393 1.935 1.934l3.04-1.204A9.944 9.944 0 0 0 10 20c5.514 0 10-4.486 10-10S15.514 0 10 0zM5.293 9.293a.997.997 0 0 1 1.414 0 .997.997 0 0 1 0 1.414.997.997 0 0 1-1.414 0 .997.997 0 0 1 0-1.414zm4 0a.997.997 0 0 1 1.414 0 .997.997 0 0 1 0 1.414 1.003 1.003 0 0 1-1.414 0 1.003 1.003 0 0 1 0-1.414zM14 9a.997.997 0 0 0-1 1 .997.997 0 0 0 1 1 .997.997 0 0 0 1-1 .997.997 0 0 0-1-1z"/></svg></div>
            <div class="f_icon_title">Chat</div></a>
           </div>
          </span>

          <span class="footer_icon">
           <div class="f_icon" onclick="tabchanger('contact')">
            <a href="#"><div class="f_show_icon"> <svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 5.324V15.5A1.5 1.5 0 0 0 1.5 17h17a1.5 1.5 0 0 0 1.5-1.5V5.324l-9.496 5.54a1 1 0 0 1-1.008 0L0 5.324z"/><path d="M19.443 3.334A1.494 1.494 0 0 0 18.5 3h-17a1.49 1.49 0 0 0-.943.334L10 8.842l9.443-5.508z"/></svg></div>
            <div class="f_icon_title">Contact Us</div></a>
           </div>
          </span>

          <span class="footer_icon">
           <div class="f_icon" onclick="tabchanger('track')">
            <a href="#"><div class="f_show_icon"> <svg height="20" width="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1.5 2A1.5 1.5 0 0 0 0 3.5v11A1.5 1.5 0 0 0 1.5 16H2a3 3 0 1 0 6 0h4a3 3 0 1 0 6 0h.5a1.5 1.5 0 0 0 1.5-1.5v-3.361a1.5 1.5 0 0 0-.214-.772l-2.783-4.639A1.5 1.5 0 0 0 15.717 5H13V3.5A1.5 1.5 0 0 0 11.5 2h-10zM15 17a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM4 16a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm13.234-6H13V7h2.434l1.8 3z"/></svg></div>
            <div class="f_icon_title">Track Order</div></a>
           </div>
          </span>
          <p><a href="#"><i class="fas fa-bolt"></i> Faqprime</a></p>
        </div>
        </div>
        `;
        getapend.insertAdjacentHTML("afterend", buttomcoupen);
         console.log(JSON.parse(response).widgetapearance);
         console.log("response: " + icontext);

         //  console.log((JSON.parse(JSON.parse(response).widgetapearance)).widgtpossition);
     }
 };
 xhttp.send(shop);

function myFunction(Demo1) {
    var x = document.getElementById(Demo1);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }


  function myFunction(Demo2) {
    var x = document.getElementById(Demo2);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }



  function myFunction(Demo3) {
    var x = document.getElementById(Demo3);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }


  function myFunction(Demo4) {
    var x = document.getElementById(Demo4);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }


  function myFunction(Demo5) {
    var x = document.getElementById(Demo5);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }



  document.querySelector('.form_bg').style.display = 'none';

  function open_widget(){
    var x = document.querySelector(".form_bg");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  };
function open_widget_1(){
    var x = document.querySelector(".form_bg");
    x.style.display = "none";
};


function tabchanger(param){
    if(param == "chat"){

        var helpbody = document.querySelector("#helpbody").style.display = "none";
        var helpbody = document.querySelector("#chatbody").style.display = "block";
        var helpbody = document.querySelector("#contactbody").style.display = "none";
        var helpbody = document.querySelector("#trackbody").style.display = "none";
        document.querySelector("#headertextt").textContent = "Chat";

    }
    else if(param == "help"){
        var helpbody = document.querySelector("#helpbody").style.display = "block";
        var helpbody = document.querySelector("#chatbody").style.display = "none";
        var helpbody = document.querySelector("#contactbody").style.display = "none";
        var helpbody = document.querySelector("#trackbody").style.display = "none";
        document.querySelector("#headertextt").textContent = "Help";
    }
    else if(param == "contact"){
        var helpbody = document.querySelector("#helpbody").style.display = "none";
        var helpbody = document.querySelector("#chatbody").style.display = "none";
        var helpbody = document.querySelector("#contactbody").style.display = "block";
        var helpbody = document.querySelector("#trackbody").style.display = "none";
        document.querySelector("#headertextt").textContent = "Contact";
    }
    else if(param == "track"){
        var helpbody = document.querySelector("#helpbody").style.display = "none";
        var helpbody = document.querySelector("#chatbody").style.display = "none";
        var helpbody = document.querySelector("#contactbody").style.display = "none";
        var helpbody = document.querySelector("#trackbody").style.display = "block";
        document.querySelector("#headertextt").textContent = "Track";
    }
};
