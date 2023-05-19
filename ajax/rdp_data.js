
function o(){$.ajax({type:"GET",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(1,"RDP - JeruxShop","rdp.html",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
  $('#filterbutton').click(function() {
                $("#table tbody tr").each(function() {
                    var ck1 = $.trim($(this).find("#rdp_country").text().toLowerCase());
                    var ck2 = $.trim($(this).find("#rdp_windows").text().toLowerCase());
                    var ck3 = $.trim($(this).find("#rdp_access").text().toLowerCase());
                    var ck4 = $.trim($(this).find("#rdp_hosting").text().toLowerCase());
                    var ck5 = $.trim($(this).find("#rdp_seller").text().toLowerCase());
                    var val1 = $.trim($('select[name="rdp_country"]').val().toLowerCase());
                    var val2 = $.trim($('select[name="rdp_windows"]').val().toLowerCase());
                    var val3 = $.trim($('select[name="rdp_access"]').val().toLowerCase());
                    var val4 = $.trim($('input[name="rdp_hosting"]').val().toLowerCase());
                    var val5 = $.trim($('select[name="rdp_seller"]').val().toLowerCase());
                    if ((ck1 != val1 && val1 != '') || (ck2 != val2 && val2 != '') || (ck3 != val3 && val3 != '') || ck4.indexOf(val4) == -1 || (ck5 != val5 && val5 != '')) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
                $('#filterbutton').prop('disabled', true);
            });
            $('.filterselect').change(function() {
                $('#filterbutton').prop('disabled', false);
            });
            $('.filterinput').keyup(function() {
                $('#filterbutton').prop('disabled', false);
            });
 
            function buythistool(id) {
                bootbox.confirm("Are you sure?", function(result) {
                    if (result == true) {
                        $.ajax({
                            method: "GET",
                            url: "buytool.php?id=" + id + "&t=rdps",
                            dataType: "text",
                            success: function(data) {
                                if (data.match(/<button/)) {
                                    $("#rdp" + id).html(data).show();
                                } else {
                                    bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
                                }
                            },
                        });;
                    }
                });
            }
 
            function openitem(order) {
                $("#myModalLabel").text('Order #' + order);
                $('#myModal').modal('show');
                $.ajax({
                    type: 'GET',
                    url: 'showOrder' + order + '.html',
                    success: function(data) {
                        $("#modelbody").html(data).show();
                    }
                });
 
            }
        </script>