<style>
    *{
    color:#311a46 !important;
    }
</style>
<table id="bgtable" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="">
    <tr>
        <td align="center" valign="top">
            <!-- container 600px -->
            <table border="0" cellpadding="0" cellspacing="0" class="container" width="600" style="background-color: #d9ebf8 !important; color:#311a46 !important; max-height: 450px;">
                <!-- HEADER -->
                <tr>
                    <td align="left" style="background-image: url({{ $message->embed('header.png') }}) !important;

        width: 100% !important; ">
                        <div id="header">
                            <img src="{{$message->embed('header.png')}}" style="width: 100%" alt="">

                        </div>
                    </td>
                </tr>
                <!-- CONTENT -->
                <tr>
                    <td align="left">
                        <div style="margin-top: 50px;margin-bottom: 50px; text-align: left;">

                            <div style="margin: 10px 10px 10px 10px;">
                            @yield('content')
                            </div>

                        </div>
                        <div style="text-align: right;margin: 10px 10px 10px 10px;">
                            <p>
                                Considerando que podemos hacer las cosas diferentes, <br>
                            <b>Team, coins.</b>
                            </p>
                            </div>
                    </td>
                </tr>
                <!-- FOOTER -->
                <tr>
                    <td align="left" style="width: 100%;">
                        <div id="footer" style="margin-top: 10px;">
                            <center>
                            <div><a href="http://bluec2.com/" style="color: white !important;">BLUECOIN COMPANY</a> <br> Derechos Reservados 2017</div>
                            <img src="{{$message->embed('footer.png')}}" style="width: 100%" alt="">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- container 600px -->
        </td>
    </tr>
</table>
<!-- background table -->
