<!DOCTYPE html>
<html>
    <head>
        <title>在线小工具</title>

        
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/css/base.css" rel="stylesheet">
        <script src="/js/jquery-1.12.2.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
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
            var lineObjOffsetTop = 6;
            function createTextAreaWithLines(id){
                var el = document.createElement('DIV');
                var ta = document.getElementById(id);
                ta.parentNode.insertBefore(el,ta);
                el.appendChild(ta);
                el.className='textAreaWithLines';
                el.style.width = (ta.offsetWidth + 30) + 'px';
                ta.style.position = 'absolute';
                ta.style.left = '30px';
                el.style.height = (ta.offsetHeight + 2) + 'px';
                el.style.overflow='hidden';
                el.style.position = 'relative';
                el.style.width = (ta.offsetWidth + 30) + 'px';
                var lineObj = document.createElement('DIV');
                lineObj.style.position = 'absolute';
                lineObj.style.top = lineObjOffsetTop + 'px';
                lineObj.style.left = '0px';
                lineObj.style.width = '27px';
                el.insertBefore(lineObj,ta);
                lineObj.style.textAlign = 'right';
                lineObj.className='lineObj';
                var string = '';
                for(var no=1;no<parseInt($("#"+id).height()/12);no++){
                    if(string.length>0)string = string + '<br>';
                    string = string + no;
                }
                ta.onkeydown = function() { positionLineObj(lineObj,ta); };
                ta.onmousedown = function() { positionLineObj(lineObj,ta); };
                ta.onscroll = function() { positionLineObj(lineObj,ta); };
                ta.onblur = function() { positionLineObj(lineObj,ta); };
                ta.onfocus = function() { positionLineObj(lineObj,ta); };
                ta.onmouseover = function() { positionLineObj(lineObj,ta); };
                lineObj.innerHTML = string;
            }
            function positionLineObj(obj,ta)
            {
                obj.style.top = (ta.scrollTop * -1 + lineObjOffsetTop) + 'px';
            }
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
                    <textarea class="form-control heightele jsontext" id="codeTextarea">

                    </textarea>
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

                    <textarea class="form-control heightele" id="codeTextarea1" readonly>

                    </textarea>
                </div>
            </div>
    </div>


    </body>

    <script type="text/javascript">
        $(function () {
           $("#jsondecode").click(function () {
               var text = $(".jsontext").eq(0).html();
               $.ajax({
                   type:'get',
                   data:text,
                   url:'/json/decode',
                   success: function (data) {
                       alert(data.data);
                   }
               })
           }) 
        });
    </script>
</html>
