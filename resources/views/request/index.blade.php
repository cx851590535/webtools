<!DOCTYPE html>
<html>
    <head>
        <title>模拟请求</title>



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
                $(".heightele").height(bodyH*0.57);
                $(".heightdata").height(bodyH*0.1);
                createTextAreaWithLines('codeTextarea1');
            });

        </script>
    </head>
    <body>
    @include('layout.top')
    <div class="bs-docs-header">
            <div class="row wider">
                <div class="col-md-11">
                    <input type="text"  class="form-control" id="url" placeholder="链接地址">
                </div>

                <div class="col-md-11">
                    <br>
                    <textarea  class="form-control heightdata" id="data" placeholder="数据"></textarea>
                </div>
                <div class="col-md-11">
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                                <select class="form-control" id="type">
                                    <option value="">请选择请求方式</option>
                                    <option value="get">GET</option>
                                    <option value="post">POST</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                                <a id="jsonencode" class="btn btn-success" role="button">发送请求</a>
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
           $("#jsonencode").click(function () {
               var url = $("#url").val();
               var data = $("#data").val();
               var type = $("#type").val();
               if(!url){
                   alert('请输入请求地址！');
                   return false;
               }
               if(type){
                   $.ajax({
                       type:type,
                       data:data,
                       dataType : "jsonp",
                       contentType: "application/jsonp; charset=utf-8",
                       url:url,
                       success: function (data) {
                           alert(data);
                           str=JSON.stringify(data);
                           str = str.replace(/\,/g,'</br>');
                           str = str.replace(/\{/g,'<p>{');
                           str = str.replace(/\}/g,'</p>}');
                           $("#codeTextarea1").html(str);
                       },
                       error: function (XMLHttpRequest, textStatus, errorThrown) {
                           alert(errorThrown);
                       }
                   })
               }else{
                   alert('请选择请求方式！');
               }

           })
        });
    </script>
</html>
