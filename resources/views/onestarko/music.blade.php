@extends('layouts.app   ')

@section('content')
    <script src="https://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <style type="text/css">
        #panel1,#flip1,#panel2,#flip2,#panel3,#flip3,#panel4,#flip4,#panel5,#flip5,#panel6,#flip6,#panel7,#flip7,#panel8,#flip8,#panel9,#flip9,#panel10,#flip10,#panel11,#flip11,#panel12,#flip12
        {
            text-align:center;
            padding:5px;
            width:400px;

            background-color:#e5eecc;
            border:solid 1px #c3c3c3;
        }
        #panel1,#panel2,#panel3,#panel4,#panel5,#panel6,#panel7,#panel8,#panel9,#panel10,#panel11,#panel12
        {   height:100px;
            padding:5px;
            display:none;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#flip1").click(function(){
                $("#panel1").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip2").click(function(){
                $("#panel2").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip3").click(function(){
                $("#panel3").slideToggle("slow");
            });
        });
     </script>

    <script>
        $(document).ready(function(){
            $("#flip4").click(function(){
                $("#panel4").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip5").click(function(){
                $("#panel5").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip6").click(function(){
                $("#panel6").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip7").click(function(){
                $("#panel7").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip8").click(function(){
                $("#panel8").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip9").click(function(){
                $("#panel9").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip10").click(function(){
                $("#panel10").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip11").click(function(){
                $("#panel11").slideToggle("slow");
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#flip12").click(function(){
                $("#panel12").slideToggle("slow");
            });
        });
    </script>

    <div style="margin:30px 250px 200px 250px">
    <table class="table">
        <tr>
            <td class="info" width="400px">
                <center>Listen attentively</center>
            </td>
            <td class="danger">
                <center>Make some noise</center>
            </td>
        </tr>
        <tr>
            <td>
    <div id="flip1" class="info">小幸运 -- 费玉清</div>
    <div id="panel1">
    <embed src="//music.163.com/style/swf/widget.swf?sid=441489800&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
    </div>
            </td>
            <td>
                <div id="flip2" class="info">Romeo's Tune -- LUCKY SUNRISE</div>
                <div id="panel2">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=17950509&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="flip3" class="info">我最亲爱的 -- 苏打绿</div>
                <div id="panel3">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=26075399&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
            <td>
                <div id="flip4" class="info">See the Loco -- Blue Eyelids</div>
                <div id="panel4">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=426852746&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="flip5" class="info">在雨中 -- 韩寒/亭东小伙伴</div>
                <div id="panel5">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=453268744&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
            <td>
                <div id="flip6" class="info">梦灯笼(R7CKY MIX) -- R7CKY</div>
                <div id="panel6">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=446935665&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="flip7" class="info">水星记 -- 郭顶</div>
                <div id="panel7">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=441491828&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
            <td>
                <div id="flip8" class="info">Fashion -- The Royal Concept</div>
                <div id="panel8">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=34144578&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="flip9" class="info">可乐 -- 赵浴辰</div>
                <div id="panel9">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=29759733&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
            <td>
                <div id="flip10" class="info">A Higher Place -- Adam Levine</div>
                <div id="panel10">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=28747429&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="flip11" class="info">花事了 -- 王菲</div>
                <div id="panel11">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=299281&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
            <td>
                <div id="flip12" class="info">Free Loop -- Daniel Powter</div>
                <div id="panel12">
                    <embed src="//music.163.com/style/swf/widget.swf?sid=5253801&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>
                </div>
            </td>
        </tr>


    </table>
    </div>
@stop