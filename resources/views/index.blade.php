<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Chat</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>


</head>

<body id="page-top">
    <!-- <div id="wrapper"> -->
    <!-- <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"> -->


    <!---------Sidebar-------->
    <!-- <ul class="nav navbar-nav text-light nav-tabs" id="accordionSidebar">

                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><span><i class="fa fa-tachometer-alt"></i>
                                Dashboard</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="automation.html"><span><i class="fas fa-snowflake"></i>
                                Automation</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="chat.html"><span><i class="fa fa-comments"></i>
                                Conversation</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="chat-widget.html"><span><i class="fa fa-comment-alt"></i> Chat
                                Widget</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="business-tool.html"><span><i class="fa fa-toolbox"></i> Business
                                Tools</span></a>
                    </li>

                    <div class="botom_links">
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html"><span><i class="fa fa-question-circle"></i>
                                    FAQ's</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="payment.html"><span><i class="fas fa-file-invoice-dollar"></i>
                                    Payment</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><span><i class="fa fa-cog"></i> Settings</span></a>
                        </li>

                    </div>

                </ul> -->
    <!---------Sidebar-close-------->

    <!-- <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button">
                    </button></div>
            </div>
        </nav> -->

    <!-- <div class="d-flex flex-column content_width" id="content-wrapper"> -->
    <div id="content">

        <!------------------page-start------------------->


        <div class="container">
            <div class="row">

                <div class="offset-1 col-md-10 chat_widg_bg">

                    <div class="chat_wid_head" id="helbootappearance">
                        <div class="custom-control custom-switch p-0 top_radio_w"><label>Enable</label>
                            <input type="checkbox" data-id="@php
                            $user->id
                            @endphp" class="custom-control-input toggle-class"
                                id="customSwitch1" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                data-on="Active" data-off="InActive" {{ $user->appstatus ? 'checked' : '' }}>

                            <!-- <input  class="toggle-class" type="checkbox" data-onstyle="success"
                                data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                {{ $user->status ? 'checked' : '' }}> -->
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>

                        <form class="top_form">
                            <label>App Language:</label>

                            <select>
                                <option>ENGLISH</option>
                                <option>FRENCH</option>
                                <option>ITALIAN</option>
                                <option>GERMAN</option>
                                <option>PORTUGUESE</option>
                                <option>DUTCH</option>
                                <option>SPANISH</option>
                            </select>

                        </form>

                        <button type="button" id="howareyou" class="preview_btn"><a href="#">preview
                                changes</a></button>

                    </div>

                </div>

                <div class="offset-1 col-md-10 chat_widg_bg chat_widget_review">

                    <div class="chat_widget_experience">
                        <h3>How’s your experience with Faqprime</h3>
                        <p>Go ahead and rate us</p>
                    </div>

                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>


                </div>

                <div class="offset-1 col-md-10 faq_prime">
                    <div class="row">

                        <div class="faq_prime_box">
                            <div class="faq_prime_box_inner">
                                <p>0</p>
                                <h3>FAQ Interactions</h3>
                            </div>
                        </div>


                        <div class="faq_prime_box">
                            <div class="faq_prime_box_inner">
                                <p>0</p>
                                <h3>Live Chats</h3>
                            </div>
                        </div>


                        <div class="faq_prime_box">
                            <div class="faq_prime_box_inner">
                                <p>0</p>
                                <h3>Contact Received</h3>
                            </div>
                        </div>


                        <div class="faq_prime_box">
                            <div class="faq_prime_box_inner">
                                <p>0</p>
                                <h3>Track Order</h3>
                            </div>
                        </div>


                        <div class="faq_prime_box p-0">
                            <div class="faq_prime_box_inner">
                                <p>0</p>
                                <h3>Social Share</h3>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="offset-1 col-md-10 chat_widg_bg">

                    <div class="chat_wid_head " id="helpbootapearance">
                        <div class="chat_emoji"><i class="fas fa-hands-helping"></i></div>
                        <div class="chat_txt">
                            <h3>Helpbot Appearance <span><button type="button"><i id="helpbootapearancebtn"
                                            class="fas fa-plus"></i></button></span>
                            </h3>
                            <p>Theme Color: #00bd74 Position: Bottom Right</p>
                        </div>
                    </div>

                    <div class="chat_hide_section" style="display:none" id="helpbootapearancetoggle">
                        @php
                        $data = json_decode($user->widgetapearance);
                        @endphp
                        <h3>Position</h3>


                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline1" name="widgtpossition"
                                value="left" @if (isset($data->widgtpossition) ? $data->widgtpossition :
                            config('appdefaultsettings.widgtpossition') == "left" )
                            checked
                            @endif
                            >
                            <label class="custom-control-label tog_lable" for="defaultInline1">
                                Left</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" value="right" id="defaultInline2"
                                name="widgtpossition" @if(isset($data->widgtpossition) ? $data->widgtpossition :
                            config('appdefaultsettings.widgtpossition') == "right" )
                            checked
                            @endif>
                            <label class="custom-control-label tog_lable" for="defaultInline2">Right</label>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <!-- <form class="chat_form chat_input_w"> -->
                                <label>Button Text:</label>
                                <input type="text"
                                    value="{{ isset($data->btntext) ? $data->btntext :  config('appdefaultsettings.btntext')  }}"
                                    name="btntext" value="Help" placeholder="Aidez">
                                <!-- </form> -->
                            </div>

                            <div class="col-md-6">
                                <!-- <form class="chat_form chat_input_w2"> -->
                                <label>Theme Color:</label>
                                <input type="color" name="themecolor"
                                    value="{{ isset($data->themecolor) ? $data->themecolor :  config('appdefaultsettings.themecolor')  }}">
                                <!-- </form> -->
                            </div>

                        </div>
                        <div class="save_btn">
                            <button id="changeapearance" type="submit">Save</button>
                        </div>

                    </div>

                </div>
                <div class="offset-1 col-md-10 chat_widg_bg">

                    <div class="chat_wid_head " id="chatoptions">
                        <div class="chat_emoji"><i class="fab fa-whatsapp-square"></i></div>
                        <div class="chat_txt">
                            <h3>Chat & Social Media Options<span><button type="button"><i id="chatoptionsbtn"
                                            class="fas fa-plus"></i></button></span>
                            </h3>
                            <p>Theme Color: #00bd74 Position: Bottom Right</p>
                        </div>
                    </div>

                    <div class="chat_hide_section" style="display:block" id="chatoptionstoggle">
                        <form action="" class="chatform" method="POST" enctype="multipart/form">

                            <h3>Enable or Disable Whatsapp Chat Option on Faqprime Helpbot</h3>

                            <div class="custom-control custom-switch tog_w">
                                <input type="checkbox" data-id="{{ $user->id }}"
                                    class="custom-control-input tog_c chatopttoggle" id="customSwitch3"
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                    data-off="InActive" {{ $user->chatoptstatus ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customSwitch3">Enable</label>
                            </div>

                            <h4>Add the whatsapp configuration by adding multiple agents and their numbers.</h4>

                            <table border="0" width="100%" class="chat_table">
                                <thead>
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Agent/Department Name</th>
                                        <th>Phone Number / Link</th>
                                        <th class="table_icon_h">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="caht_table_body" id=avatortable>
                                    @foreach (json_decode($user->chatopt) as $key => $value)
                                    <tr class="tablerow">
                                        <td class="table_img">
                                            @php
                                               $splitt =   $value->avatar;
                                               $optionval = explode("-",$splitt)[0];

                                            @endphp
                                            <select id="" class="cmbIdioma" name="dropdonw[]">

                                            <option value="whatsapp" {{ $optionval == 'whatsapp' ? 'selected' : ''}} data-id="0"  >Whatsapp</option>
                                            <option value="twitter" {{ $optionval == 'twitter' ? 'selected' : ''}} data-id="0" >Twitter</option>
                                            <option value="facebook" {{ $optionval == 'facebook' ? 'selected' : ''}} data-id="0">facebook</option>
                                            </select>

                                        </td>
                                        <td class="table_textarea">
                                            <input type="text"  data-id="avatoragent-{{$key}}" class="form-control avataragent"  placeholder="Whatsapp" value="{{ $value->agent}}"
                                                name="avatoragent[]" id="">
                                        </td>
                                        <td class="table_textarea"> <input data-id="avatorlink-{{$key}}" class="form-control avatarlink" type="text" value="{{ $value->link}}"
                                                placeholder="+923087506036" name="avatorlink[]" id="">
                                        </td>
                                        <td class="table_icon btnDelete" data-id="delbtn-{{$key}}"><i class="fas fa-trash-alt"></i></td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="table_btn"><button type="button" id="addavatorrow" class="unsub"><i
                                                    class="fa fa-plus"></i>Add A New Number</button></td>
                                    </tr>
                                </tbody>

                            </table>

                            <div class="save_btn"><button id="chatformbtn" type="button">Save</button></div>
                        </form>

                    </div>

                </div>

                <div class="offset-1 col-md-10 chat_widg_bg">

                    <div class="chat_wid_head" id="faqstemplate">
                        <div class="chat_emoji"><i class="fas fa-question-circle"></i></div>
                        <div class="chat_txt">
                            <h3>FAQ Templates <span><button type="button"><i id="faqstemplatebtn"
                                            class="fas fa-plus"></i></button></span>
                            </h3>
                            <p>5 Questions</p>
                        </div>
                    </div>

                    <div class="chat_hide_section" style="display:none" id="faqstemplatetoggle">

                        <form action="{{route('questionsdaatta')}}" method="post" class="chat_form chat_input_w">
                            <div calass="qstsecction-1" id="qstsecction">
                                @foreach(isset(json_decode($user->faqs)->questions) ? json_decode($user->faqs)->questions : json_decode(config('appdefaultsettings.faqs'))->questions as $key => $value)
                                <div class="qstpart" id="qstpart-{{ $key }}">
                                    <label class="quest">Question {{$key+1}}.</label>
                                    <span class="trashqst" id="trashqst-{{$key}}"><i class="fas fa-trash-alt"></i></span>
                                    <input type="text" name="questions[]" value="{{ isset(json_decode($user->faqs)->questions[$key]) ? json_decode($user->faqs)->questions[$key] : json_decode(config('appdefaultsettings.faqs'))->questions[$key] }}" placeholder="What is the status of my order?">
                                    <label class="ans">Answer.</label>
                                    <textarea name="answers[]" rows="3">{{ isset(json_decode($user->faqs)->answers[$key]) ? json_decode($user->faqs)->answers[$key] : json_decode(config('appdefaultsettings.faqs'))->answers[$key]  }}</textarea>
                                    </textarea>
                                </div>
                                @endforeach
                            </div>
                            <button class="btn-sm btn-default addnewqst">Add New Question</button>
                            <div class="save_btn"><button type="submit">Save</button></div>
                        </form>
                    </div>

                </div>

                <div class="offset-1 col-md-10 chat_widg_bg">

                    <div class="chat_wid_head" id="contactusoptions">
                        <div class="chat_emoji"><i class="fas fa-phone-square-alt"></i></div>
                        <div class="chat_txt">
                            <h3>Contact Us Form Options <span><button type="button"><i id="contactusoptionsbtn"
                                            class="fas fa-plus"></i></button></span>
                            </h3>
                            <p>ENABLED; Name, Email and 2 other fields</p>
                        </div>
                    </div>

                    <div class="chat_hide_section" style="display:none" id="contactusoptionstoggle">
                        <h3>Enable or Disable Contactus Option on Faqprime Helpbot</h3>

                        <div class="custom-control custom-switch tog_w">
                            <!-- <input type="checkbox" class="custom-control-input tog_c" id="customSwitch6" checked> -->

                            <input type="checkbox" id="customSwitch6" data-id="{{ $user->id }}"
                                    class="custom-control-input tog_c" id="customSwitch3"
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                    data-off="InActive" {{ $user->contactusoption ? 'checked' : '' }}>

                            <label class="custom-control-label" for="customSwitch6">Enable</label>
                        </div>

                        <form class="chat_form">
                            <label>Email id where you wish to receive all the inquiries:</label>
                            <input type="text" name="inquireemail" value="{{json_decode($user->formsubmitreq)->inquireemail}}" placeholder="ecomzier@gmail.com">
                        </form>

                        <h5 class="h5_style">Select the information you want end users to enter before
                            they can
                            submit:</h5>

                        <div class="chat_radio">
                            <h5>Visitor Name</h5>
                          @php
                          $optionss = json_decode($user->formsubmitreq);
                          @endphp
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" class="custom-control-input" id="defaultInline3"
                                    name="vistorname" value="required" @if ($optionss->vistorname == 'required')
                                    checked
                                    @endif >
                                <label class="custom-control-label tog_lable" for="defaultInline3">Name is
                                    Required</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" @if ($optionss->vistorname == 'optional')
                                    checked
                                    @endif value="optional" class="custom-control-input" id="defaultInline4"
                                    name="vistorname">
                                <label class="custom-control-label tog_lable" for="defaultInline4">Name is
                                    Optional</label>
                            </div>
                        </div>

                        <div class="chat_radio">
                            <h5>Visitor Email Address</h5>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" @if ($optionss->visitoremail == 'required')
                                    checked
                                    @endif class="custom-control-input" value="required" id="defaultInline5"
                                    name="visitoremail" checked>
                                <label class="custom-control-label tog_lable" for="defaultInline5">Email
                                    Address
                                    is Required</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" @if ($optionss->visitoremail == 'optional')
                                    checked
                                    @endif class="custom-control-input" value="optional" id="defaultInline6"
                                    name="visitoremail">
                                <label class="custom-control-label tog_lable" for="defaultInline6">Email
                                    Address
                                    is Optional</label>
                            </div>
                        </div>

                        <div class="chat_radio">
                            <h5>Visitor Phone Number</h5>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio"  class="custom-control-input" value="required" id="defaultInline7"
                                    name="vistorphoneno">
                                <label class="custom-control-label tog_lable" for="defaultInline7">Phone Number
                                    is Required</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" class="custom-control-input" value="optional" id="defaultInline8"
                                    name="vistorphoneno">
                                <label class="custom-control-label tog_lable" for="defaultInline8">Phone Number
                                    is Optional</label>
                            </div>
                        </div>

                        <div class="chat_radio">
                            <h5>Visitor Question</h5>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" @if ($optionss->visitorquestion == 'required')
                                    checked
                                    @endif class="custom-control-input" value="required" id="defaultInline9"
                                    name="visitorquestion" checked>
                                <label class="custom-control-label tog_lable" for="defaultInline9">Question is
                                    Required</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline radio_w">
                                <input type="radio" @if ($optionss->visitorquestion == 'optional')
                                    checked
                                    @endif class="custom-control-input" value="optional" id="defaultInline10"
                                    name="visitorquestion">
                                <label class="custom-control-label tog_lable" for="defaultInline10">Question is
                                    Optional</label>
                            </div>
                        </div>
                        <div class="save_btn"><button id="contactusoptionbtn" type="button">Save</button></div>

                    </div>

                </div>

                <div class="offset-1 col-md-10 chat_widg_bg mb-5">

                    <div class="chat_wid_head" id="trackorder">
                        <div class="chat_emoji"><i class="fas fa-map-marked-alt"></i></div>
                        <div class="chat_txt">
                            <h3>Track Order <span><button type="button"><i id="trackorderbtn"
                                            class="fas fa-plus"></i></button></span></h3>
                            <p>ENABLED</p>
                        </div>
                    </div>

                    <div class="chat_hide_section" style="display:none" id="trackordertoggle">
                        <h3>Enable or Disable Track Order Option on Faqprime Helpbot</h3>

                        <div class="custom-control custom-switch tog_w">
                            <input type="checkbox" class="custom-control-input tog_c" id="customSwitch7" checked>
                            <label class="custom-control-label" for="customSwitch7">Enable</label>
                        </div>

                        <div class="save_btn"><button type="button">Save</button></div>

                    </div>

                </div>

            </div>
        </div>





        <!----------Top-bg-close----------->

    </div>
    <!------------------Main-content-close------------------->
    </div>



    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    $(function() {

        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
        @endif
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
    </script>
    @include('jscode');
    <script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            data: [{
                type: "splineArea",
                color: "rgba(9,102,141,1)",
                markerSize: 5,
                xValueFormatString: "YYYY",
                yValueFormatString: "$#,##0.##",
                dataPoints: [{
                        x: new Date(2000, 0),
                        y: 3289000
                    },
                    {
                        x: new Date(2001, 0),
                        y: 3830000
                    },
                    {
                        x: new Date(2002, 0),
                        y: 2009000
                    },
                    {
                        x: new Date(2003, 0),
                        y: 2840000
                    },
                    {
                        x: new Date(2004, 0),
                        y: 2396000
                    },
                    {
                        x: new Date(2005, 0),
                        y: 1613000
                    },
                    {
                        x: new Date(2006, 0),
                        y: 2821000
                    },
                    {
                        x: new Date(2007, 0),
                        y: 2000000
                    },
                    {
                        x: new Date(2008, 0),
                        y: 1397000
                    },
                    {
                        x: new Date(2009, 0),
                        y: 2506000
                    },
                    {
                        x: new Date(2010, 0),
                        y: 2798000
                    },
                    {
                        x: new Date(2011, 0),
                        y: 3386000
                    },
                    {
                        x: new Date(2012, 0),
                        y: 6704000
                    },
                    {
                        x: new Date(2013, 0),
                        y: 6026000
                    },
                    {
                        x: new Date(2014, 0),
                        y: 2394000
                    },
                    {
                        x: new Date(2015, 0),
                        y: 1872000
                    },
                    {
                        x: new Date(2016, 0),
                        y: 2140000
                    }
                ]
            }]
        });
        chart.render();

    }
    </script>



</body>

</html>
