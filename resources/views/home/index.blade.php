<!DOCTYPE html>
<html>
    <head>
        <title>在线小工具</title>

        
        @include('layout.header')
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .heightele{
                font-size: 11px;
            }
            .textAreaWithLines{font-family: courier;border: 1px solid #ddd;}
            .textAreaWithLines textarea,.textAreaWithLines div{border: 0px;line-height: 120%;font-size: 12px;}
            .lineObj{color: #666;}
            .wider{
                margin: 0px;
            }
            .widarea{
                width:100%;
            }
        </style>
        <script type="text/javascript">
            $(function () {
                bodyH = $("body").height();
                $(".heightele").height(bodyH*0.37);
                createTextAreaWithLines('codeTextarea');
                createTextAreaWithLines('codeTextarea1');
            });

        </script>
    </head>
    <body>
    @include('layout.top')
    <div class="bs-docs-header">
            <div class="row wider">
                <div class="col-md-11">
                    <textarea class="form-control heightele jsontext" id="codeTextarea"></textarea>
                </div>
                <div class="col-md-11">
                    <br>
                    <div class="row">

                        <div class="col-md-5 col-md-offset-1">
                            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                                <a id="jsondecode" class="btn btn-default" role="button">json解码</a>
                            </div>

                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                                <a id="jsonencode" class="btn btn-default" role="button">json编码</a>
                            </div>

                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-11">

                    <div class="form-control heightele" id="codeTextarea1" style="overflow-y: auto;">

                    </div>
                </div>
            </div>
    </div>


    </body>

    <script type="text/javascript">
        $(function () {
           $("#jsondecode").click(function () {
               var text = $(".jsontext").eq(0).val();
               $.ajax({
                   type:'get',
                   data:'text='+text,
                   url:'/json/decode',
                   success: function (data) {
                       str=JSON.stringify(data.data);
                       str = str.replace(/\,/g,'</br>');
                       str = str.replace(/\{/g,'<p>{');
                       str = str.replace(/\}/g,'</p>}');
                       $("#codeTextarea1").html(str);
                   }
               })
           }) 
        });
    </script>
</html>
