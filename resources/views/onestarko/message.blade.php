@extends('layouts.app')


@section('content')
    {{csrf_field()}}
<div class="wrapper wrapper-content animated fadeInRight" style="margin-top: 100px;">
    <!-- 留言开始 -->
   <center><h1>留言</h1></center>
   <div class="row" style="margin:10px 10px 10px 380px;">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <form action = "" method="post">
                    <div class="form-group has-warning"><label class="col-sm-2 control-label">署名：</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="Message[name]" required></div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group has-warning"><label class="col-sm-2 control-label">内容：</label>
                        <div class="col-sm-10"><textarea name="Message[messages]" id="" rows="8" style="width:100%;" required></textarea></div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" class="btn btn-w-m btn-warning" style="width:100%;">点击提交</button></div>
                    </div>
                </form>
            </div>
        </div>
       </div>
    <br>
    <!-- 留言结束 -->
</div>
@endsection