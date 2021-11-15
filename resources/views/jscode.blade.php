<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script id="faziljs">
    $(function() {
        // @if(count(json_decode($user->chatopt)))
        //     var inputObjectsArray = [
        //         @foreach (json_decode($user->chatopt) as $value)
        //             {
        //                 avatar: "{{ $value->avatar }}" ,
        //                 agent: "{{ $value->agent }}",
        //                 link: "{{ $value->link }}"
        //             },
        //         @endforeach
        //     ];
        //     console.log(inputObjectsArray);
        // @else
        //     var inputObjectsArray = [
        //         {
        //             avatar: '',
        //             agent: '',
        //             link : ''
        //         }
        //     ];
        // @endif
        // console.log(inputObjectsArray);

            /*===============================================
                    Hide Show Div's
            ================================================*/
            //----------chat options-----------//
            var chatoptionsflag = 0;
            $('#chatoptions').click(function () {
                if (chatoptionsflag == 0) {
                    $('#chatoptionstoggle').show(500);
                    $("#chatoptionsbtn").toggleClass('fas fa-plus fas fa-minus');
                    chatoptionsflag = 1;
                } else {
                    $('#chatoptionstoggle').hide(500);
                    $("#chatoptionsbtn").toggleClass('fas fa-minus fas fa-plus');
                    chatoptionsflag = 0;
                }
            });
            //----------Helpbot Apearacne-----------//
            var helpbootapearanceflag = 0;
            $('#helpbootapearance').click(function () {
                if (helpbootapearanceflag == 0) {
                    $('#helpbootapearancetoggle').show(500);
                    $("#helpbootapearancebtn").toggleClass('fas fa-plus fas fa-minus');
                    helpbootapearanceflag = 1;
                } else {
                    $('#helpbootapearancetoggle').hide(500);
                    $("#helpbootapearancebtn").toggleClass('fas fa-minus fas fa-plus');
                    helpbootapearanceflag = 0;
                }
            });
            //----------Faqs Templates-----------//
            var faqstemplateflag = 0;
            $('#faqstemplate').click(function () {
                if (faqstemplateflag == 0) {
                    $('#faqstemplatetoggle').show(500);
                    $("#faqstemplatebtn").toggleClass('fas fa-plus fas fa-minus');

                    faqstemplateflag = 1;
                } else {
                    $('#faqstemplatetoggle').hide(500);
                    $("#faqstemplatebtn").toggleClass('fas fa-minus fas fa-plus');

                    faqstemplateflag = 0;
                }
            });
            //----------Contact us Options-----------//
            var contactusoptionsflag = 0;
            $('#contactusoptions').click(function () {
                if (contactusoptionsflag == 0) {
                    $('#contactusoptionstoggle').show(500);
                    $("#contactusoptionsbtn").toggleClass('fas fa-plus fas fa-minus');
                    contactusoptionsflag = 1;
                } else {
                    $('#contactusoptionstoggle').hide(500);
                    $("#contactusoptionsbtn").toggleClass('fas fa-minus fas fa-plus');
                    contactusoptionsflag = 0;
                }
            });
            //----------Track Order-----------//
            var trackorderglag = 0;
            $('#trackorder').click(function () {
                if (trackorderglag == 0) {
                    $('#trackordertoggle').show(500);
                    $("#trackorderbtn").toggleClass('fas fa-plus fas fa-minus');
                    trackorderglag = 1;
                } else {
                    $('#trackordertoggle').hide(500);
                    $("#trackorderbtn").toggleClass('fas fa-minus fas fa-plus');
                    trackorderglag = 0;
                }
            });

            /*===============================================
                    Social Avator Code
            ================================================*/

            //----------Append New Avator Row------//
            var addavatorflag = false;
            var countapend = 0;
            $("#addavatorrow").click(function () {
                if (flag == false) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('countchatavavtor') }}",
                        data: {

                        },
                        success: function (response) {
                            console.log("response count:" +response)
                            var no = parseInt(response);
                            countapend = no + countapend;
                            console.log("after calc:" + countapend);
                            appenmorechatoptions();
                            flag = true;
                         }
                    });

                } else {
                    countapend = countapend + 1;
                    console.log("else count:"+ countapend);
                    appenmorechatoptions();
                }
            });

            function appenmorechatoptions(){
                $('#avatortable tr:last').before(`<tr class="tablerow">
                                            <td class="table_img">
                                            <select id="" class="cmbIdioma" name="dropdonw[]">
                                            <option value="whatsapp"  data-id="`+countapend+`">Whatsapp</option>
                                            <option value="twitter" data-id="`+countapend+`">Twitter</option>
                                            <option value="facebook" data-id="`+countapend+`">facebook</option>
                                            </select>
                                            </td>
                                            <td class="table_textarea">
                                                <input type="text"  data-id="avatoragent-`+ countapend +`"  class="form-control avataragent"  placeholder ="Whatsapp" value="" name="avatoragent[]" id="avatoragenid">
                                            </td>
                                            <td class="table_textarea"> <input  data-id="avatorlink-`+ countapend +`" class="form-control avatarlink" type="text" placeholder="+923087506036" name="avatorlink[]" id="avatorlnkidd">
                                            </td>
                                            <td class="table_icon btnDelete" data-id="delbtn-`+ countapend +`" ><i class="fas fa-trash-alt"></i></td>
                                        </tr>`);
                                        initialize();
                                        inputObjectsArray.push({
                                            avatar : "whatsapp-"+countapend,
                                            agent : "",
                                            link : ""
                                        });
                                        // console.log(inputObjectsArray);

            }
            //-------------Delete Avator-----------------//

            $(".chat_table").on('click', '.btnDelete', function () {
                countapend = countapend - 1;
                    $(this).closest('tr').remove();
                    var index = $(this).attr('data-id').split('-')[1];
                    inputObjectsArray.splice(index,1);

                    for (let index = 0; index <= countapend; index++) {
                    // console.log($('.quest')[index].innerHTML='a');

                    $($('.avataragent')[index]).attr("data-id","avatoragent-"+index);
                    $($('.avatarlink')[index]).attr("data-id","avatoragent-"+index);
                    $($('.dd-container')[index]).attr("id","selectoption-"+index);

                    // console.log($('.dd-select'));
                    var optionn = $($('.dd-options')[index]).find('.dd-option')
                    for (let opt = 0; opt < optionn.length; opt++) {

                        var optval = ($(optionn[opt]).find('.dd-option-value').val()).split('-')[0];
                        $($('.dd-select')[opt]).find('.dd-selected-value').attr('value',optval+"-"+index)
                        console.log(optval);
                        // console.log($(optionn[opt]).find('.dd-selected-value'));

                        ($(optionn[opt]).find('.dd-option-value')).attr('value',optval+"-"+index);
                        // ($(optionn[opt]).find('.dd-selected-value')).attr('value',optval+"-"+index);
                        // $(optionn[opt]).find('.dd-selected-value').attr("value",optval+"-"+index)
                        // if(optval == "facebook") {
                        //     $(optionn[opt]).find('.dd-option-value').val(optval+"-"+index)
                        //     console.log($(optionn[opt]).find('.dd-option-value').val(optval+"-"+index))
                        // }
                        // else if(optval == "twitter") {
                        //     $(optionn[opt]).find('.dd-option-value').val(optval+"-"+index)
                        //     console.log($(optionn[opt]).find('.dd-option-value').val(optval+"-"+index))

                        // }
                        // else if(optval == "whatsapp") {
                        //     $(optionn[opt]).find('.dd-option-value').val(optval+"-"+index)
                        //     console.log($(optionn[opt]).find('.dd-option-value').val(optval+"-"+index))

                        // }
                    }
                }
                    // console.log(inputObjectsArray);
                });
            //-----------image Dropdown avator------------//
            // $('#savechatavatordata').click(function (e) {
            //     e.preventDefault();
            //     var avatoragentid = $('#avatoragenid').val();
            //     var avatorlinkid = $('#avatorlnkidd').val();
            //     var values = $("input[name='avatoragent[]']").map(function () {
            //         return $(this).val();
            //     }).get();
            //     console.log(JSON.stringify(values));
            // });

            initialize()

            // @foreach (json_decode($user->chatopt) as $key => $value)
            //     var avatarr = "{{ $value->avatar}}";
            //     var i = {{ $key}};
            //     var avatarval = avatarr.split('-')[0];
            //     console.log(i);
            //     if(avatarval == "facebook"){
            //         $( '#selectoption-'+i ).ddslick( 'select', { index: 0, disableTrigger: true } );
            //     }
            //     else if(avatarval == "twitter"){
            //         $( '#selectoption-'+i ).ddslick( 'select', { index: 1, disableTrigger: true } );
            //     }
            //     else if(avatarval == "whatsapp"){
            //         $( '#selectoption-'+i ).ddslick( 'select', { index: 2, disableTrigger: true } );
            //     }

            // @endforeach


            function initialize() {

                $(".cmbIdioma").select2({
                    templateResult: function (idioma) {
                        var image = "{{ asset('assets/img/')}}";
                    var $span = $('<span><img height="30pg" width="30px" src="'+image+'/'+idioma.id+'.png"/>'+idioma.text+'</span>');
                    return $span;
                    },
                    templateSelection: function (idioma) {
                        var image = "{{ asset('assets/img/')}}";
                    var $span = $('<span><img height="30pg" width="30px" src="'+image+'/'+idioma.id+'.png"/>'+idioma.text+'</span>');
                    return $span;
                    }
                });

                $(".cmbIdioma").on('change', function(){
                    row = $(this).find('option:selected').attr('data-id');
                    console.log(row);
                    var avatarval = $(this).val();
                    var avatorlink = $('.avatarlink')[row];
                    var avatoragnet =  $('.avataragent')[row];

                        if (avatarval == 'facebook') {
                            avatoragnet.placeholder = "Facebook"
                            avatorlink.placeholder = "Enter Facebook Link"
                        }else if (avatarval == 'whatsapp') {
                            avatoragnet.placehoder = "WhatsApp"
                            avatorlink.placeholder = "+923087506036"
                        }else if (avatarval == 'twitter') {
                            avatoragnet.placeholder = "Twitter"
                            avatorlink.placeholder = "Enter Twitter Link"
                        }

                });

                // $('.demo-htmlselect').ddslick({
                //     onSelected: function (selectedData) {
                //         // console.log(selectedData);
                //         var row = document.querySelectorAll('.tablerow')[selectedData.selectedData.value
                //             .split('-')[1]];
                //         var avatorlink  = row.querySelector("input[id=avatorlnkidd]")
                //         var avatoragnet = row.querySelector("input[id=avatoragenid]")

                //         if (selectedData.selectedData.value.split('-')[0] == 'facebook') {
                //             avatoragnet.placeholder = "Facebook"
                //             avatorlink.placeholder = "Enter Facebook Link"
                //         }
                //         if (selectedData.selectedData.value.split('-')[0] == 'whatsapp') {
                //             avatoragnet.placehoder = "WhatsApp"
                //             avatorlink.placeholder = "+923087506036"
                //         }
                //         if (selectedData.selectedData.value.split('-')[0] == 'twitter') {
                //             avatoragnet.placeholder = "Twitter"
                //             avatorlink.placeholder = "Enter Twitter Link"
                //         }

                //         if(typeof(inputObjectsArray[selectedData.selectedData.value.split('-')[1]])  != 'undefined'){
                //             inputObjectsArray[selectedData.selectedData.value.split('-')[1]].avatar = selectedData.selectedData.value;
                //         }


                //     }
                // });

            }


                $(document).on('input','#avatoragenid',function(){
                    var index = $(this).attr('data-id').split("-")[1];
                    inputObjectsArray[index].agent = this.value;


                })

                $(document).on('input','#avatorlnkidd',function(){
                    var index = $(this).attr('data-id').split("-")[1];
                    inputObjectsArray[index].link = this.value;


                })




            // $(document).on('change','.demo-htmlselect', function(){
            //     console.log('hello');
            // });

            /*===============================================
                    Add And Remove Faqs Questitons
            ================================================*/
            var questno = 1;
            var flag = false;
            $(".addnewqst").click(function (e) {
                event.preventDefault(e);
                if (flag == false) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('countquestions') }}",
                        data: {

                        },
                        success: function (response) {
                            var no = parseInt(response);
                            questno = no + 1;
                            console.log("ajax:" + questno);
                            flag = true;
                            appendqst();


                        }
                    });

                } else {
                    questno = questno + 1;
                    console.log("else:" + questno);
                    appendqst();

                }

            });

            function appendqst() {
                $("#qstsecction").append(`<div class="qstpart" id="qstpart-` + questno +`"><label class="quest">Question ` + questno + `.</label><span id="trashqst-` + questno + `" class="trashqst"><i class="fas fa-trash-alt"></i></span>
                                            <input type="text"  name="questions[]" placeholder="What is the status of my order?">
                                            <label class="ans">Answer.</label>
                                            <textarea name="answers[]" rows="3">Once you have placed your order, we will send you a confirmation email to track the status of your order.Once your order is shipped we will send you another email along with the link to track your order.Or, you can track the status of your order from your "order history" section on your account page on the website.
                                            </textarea></div>`);
            }

            $(document).on('click', '.trashqst', function () {
                questno = questno - 1;
                console.log("delpart:" + questno);
                var id = (this.id).split("-")[1];
                $("#qstpart-" + id).remove();
                console.log($('.quest'));
                for (let index = 1; index <= questno; index++) {
                    console.log($('.quest')[index-1].innerHTML='a');
                    $($('.quest')[index-1]).text("Question:"+index);
                }

            });


            /*===============================================
                    Enable Disabel Application
            ================================================*/
            $('.toggle-class').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "{{ route('changeappstatus') }}",
                    data: {
                        status: status,
                        user_id: user_id,
                    },
                    success: function (response) {
                        if (response == 1) {
                            toastr.success("App Is Enabled");
                        } else {
                            toastr.success("App Is Disabled");

                        }
                    }
                });
            })
            /*===============================================
                    Change Apearance
            ================================================*/
            $("#changeapearance").click(function (e) {
                var widgtpossition = $('input[name="widgtpossition"]:checked').val();
                var btntext = $("input[name=btntext]").val();
                var themecolor = $("input[name=themecolor]").val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('changeapearance') }}",
                    data: {
                        widgtpossition: widgtpossition,
                        btntext: btntext,
                        themecolor: themecolor
                    },
                    success: function (response) {
                        if (response == 'true') {
                            toastr.success('Save Changes');
                        } else {
                            toastr.error('error')
                        }
                    }
                });
            });

            /*===============================================
                    Enable Disbale Chat Options
            ================================================*/
            $('.chatopttoggle').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "{{ route('changechatoptstatus') }}",
                    data: {
                        status: status,
                        user_id: user_id,
                    },
                    success: function (response) {
                        if (response == 1) {
                            toastr.success("ChatOption Is Enabled");
                        } else {
                            toastr.success("ChatOption Is Disabled");

                        }
                    }
                });
            })

            $('#chatformbtn').click(function() {
                // console.log(document.querySelectorAll('.tablerow')[0].querySelectorAll('td')[0].querySelectorAll('demo-htmlselect option:selected').text());

                // var str = JSON.stringify(jQuery('.chatform').serializeArray());


                $.ajax({
                    type: "POST",
                    url: "{{ route('chatoptiondatat') }}",
                    data: {
                    data : inputObjectsArray,
                    },
                    success: function (response) {
                        if (response == 1) {
                            toastr.success('data saved');
                        }
                        else {
                            toastr.error('error');

                        }
                    }
                });
            });

        /*===============================================
                Enable Or Disbale Contact Us Form Options
        ================================================*/
            $('#customSwitch6').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "{{ route('changecontactusoptions') }}",
                    data: {
                        status: status,
                        user_id: user_id,
                    },
                    success: function (response) {
                        if (response == 1) {
                            toastr.success("Chatoption Is Enabled");
                        } else {
                            toastr.success("Chatoption Is Disabled");

                        }
                    }
                });
            })

            $('#contactusoptionbtn').click(function() {

                var inquireemail = $("input[name='inquireemail']").val();
                var vistorname = $("input[name='vistorname']:checked").val();
                var visitoremail = $("input[name='visitoremail']:checked").val();
                var vistorphoneno = $("input[name='vistorphoneno']:checked").val();
                var visitorquestion= $("input[name='visitorquestion']:checked").val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('requiredformdata') }}",
                    data: {
                        inquireemail : inquireemail,
                    vistorname : vistorname,
                    visitoremail : visitoremail,
                    vistorphoneno : vistorphoneno,
                    visitorquestion : visitorquestion

                    },
                    success: function (response) {
                        if (response == 1) {
                            toastr.success("Store Datat");
                        } else {
                            toastr.success("Store Dataterror");

                        }
                    }
                });

            });
    })


</script>
