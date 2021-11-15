var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = 'https://fazilchatbot.discountly.app/assets/css/component.css';
    link.media = 'all';
    head.appendChild(link);

    var getapend = document.querySelector("body");

    var html =`<div class="md-modal md-show md-effect-1" id="modal-1">
    <div class="md-content">

        <div class="popup-logo-wrap">
            <img class="popup-logo" src="https://static.ruelala.com/35ec160d3486dd8492f58b80da474876a299ec0c/img/ruelala_logo.svg" alt="">
        </div>
        <div>
            <h1>Up to 70% off Must-Have Brands</h1>
            <ul class="model-bullets">
                <li>New sales every day</li>
                <li>Valentino, Vince & more</li>
                <li>FREE membership</li>
            </ul>

            <div class="lead-capture">
                <input class="lead-email" type="text" placeholder="Email" required>
                <button class="lead-button" onclick = "submitbtn()">Continue</button>
                <p class="already">Already a member? <a href="#">Log in</a></p>
            </div>

        </div>
    </div>
    </div>

    `;
    var modal = document.getElementById("modal-1");
    getapend.insertAdjacentHTML("afterend", html);
    function submitbtn(){
        var xhttp = new XMLHttpRequest();
        var email= document.querySelector('.lead-email').value;
        var param = 'email='+email;
        var url = "/apps/datarequest/newsletter";

        xhttp.open("POST", url, true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = this.response;
            }
        };
        xhttp.send(email);
}
