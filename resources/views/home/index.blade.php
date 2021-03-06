<!DOCTYPE html>
<html>
<head>
    <title>在线小工具</title>


    @include('layout.head')
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

        .heightele {
            font-size: 11px;
        }

        .textAreaWithLines {
            font-family: courier;
            border: 1px solid #ddd;
        }

        .textAreaWithLines textarea, .textAreaWithLines div {
            border: 0px;
            line-height: 120%;
            font-size: 16px;
            background-color: #484747;
            color: #1ab7ea;
        }

        #codeTextarea1 {
             background-color: #484747;
             color: #1ab7ea;
             font-size: 15px;
        }

        .lineObj {
            color: #666;
        }

        .wider {
            margin: 0px;
        }

        .widarea {
            width: 100%;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            bodyH = $("body").height();
            $(".heightele").height(bodyH * 0.37);
            createTextAreaWithLines('codeTextarea');
            createTextAreaWithLines('codeTextarea1');
        });

    </script>
</head>
<body>
<div id="wrapper">
    @include('layout.top')
    <div class="bs-docs-header" id="page-wrapper">
        <br>
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
                 <pre class="form-control heightele" id="codeTextarea1" style="overflow-y: auto;">

                    </pre>
            </div>
        </div>
    </div>

</div>
</body>

<script type="text/javascript">
    $(function () {
        $("#jsondecode").click(function () {
            /* var jv = $(".jsontext").eq(0).val();
             alert(jv);
             $.ajax({
             type: "post",
             url: '/json/decode',
             data: 'text=' + encodeURIComponent(jv) + '&_token={{csrf_token()}}',
             dataType: "json",
             cache: false,
             success: function (j) {
             alert(JSON.stringify(j));
             $("#codeTextarea1").html(JSON.stringify(j));
             },
             error: function (err) {
             alert(err);
             }
             });*/


            var text = $(".jsontext").eq(0).val();
            $.ajax({
                type: 'post',
                data: 'text=' + encodeURIComponent(text) + '&_token={{csrf_token()}}',
                url: '/json/decode',
                success: function (data) {
                    str = JSON.stringify(data);
                    str = str.replace(/\,/g,'</br>');
                    str = str.replace(/\{/g,'{<p>');
                    str = str.replace(/\}/g,'</p>}');
                    $("#codeTextarea1").html(str);
                    $(".sf-dump-compact").removeClass("sf-dump-compact").addClass("sf-dump-expanded");
                }
            })
        })
    });
</script>

@include('layout.foot')
</html>
