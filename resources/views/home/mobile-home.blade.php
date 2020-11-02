@extends('layouts.mobile-home')

@section('content')
    <div class="time_wrapper">
        <div class="controls-on-time">
           Controls ON at {{$data['display_start_hour']}} and OFF at {{$data['display_end_hour']}}
        </div>
        <div class="current-time">
            Current Time: {{$data['current_dt']}} CST
        </div>
    </div>

    <div class="stream_wrapper">
        <iframe id="video1" src="{{ url('cam1.html') }}" width="98%" height="339" frameborder="0" name="myCam" style="display: none;transition: all 0.3s linear;"></iframe>
        <iframe id="video2" src="{{ url('cam2.html') }}" width="98%" height="339" frameborder="0" name="myCam" style="display: none;transition: all 0.3s linear;"></iframe>

        <div class="click_here">
            <a href="javascript:;" id="camera1">CLICK HERE TO VIEW CAMERA 2</a>
            <a href="javascript:;" id="camera2" style="display: none;">CLICK HERE TO VIEW CAMERA 1</a>
        </div>
    </div>

    <div class="buttons-wrapper">
        <div class="control-status">
            Ready...
        </div>
    	<div class="control-button-holder">
            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a id="cb1_on" data-command-name="B2" data-command-value="1" onclick="handleLight('01', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Upper Icicle</div>
                        <div class="control-button control-button-off">
                            <a id="cb1_off" data-command-name="B2" data-command-value="0" onclick="handleLight('01', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb2_on" data-command-name="B10" data-command-value="1" onclick="handleLight('02', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Lower Icicle</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb2_off" data-command-name="B10" data-command-value="0" onclick="handleLight('02', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb3_on" data-command-name="B5" data-command-value="1" onclick="handleLight('03', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Big Snowman</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb3_off" data-command-name="B5" data-command-value="0" onclick="handleLight('03', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb4_on" data-command-name="B16" data-command-value="1" onclick="handleLight('04', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Little Snowman</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb4_off" data-command-name="B16" data-command-value="0" onclick="handleLight('01', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb5_on" data-command-name="B6" data-command-value="1" onclick="handleLight('05', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Deer Duo</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb5_off" data-command-name="B6" data-command-value="0" onclick="handleLight('05', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb6_on" data-command-name="B7" data-command-value="1" onclick="handleLight('06', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Door Garland</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb6_off" data-command-name="B7" data-command-value="0" onclick="handleLight('06', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb4_on" data-command-name="B11" data-command-value="1" onclick="handleLight('07', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Big Bulbs</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb4_off" data-command-name="B11" data-command-value="0" onclick="handleLight('07', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb6_on" data-command-name="B12" data-command-value="1" onclick="handleLight('08', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Spiral Tree</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb6_off" data-command-name="B12" data-command-value="0" onclick="handleLight('08', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

    		<div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb7_on" data-command-name="B8" data-command-value="1" onclick="handleLight('09', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Door Trees</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb7_off" data-command-name="B8" data-command-value="0" onclick="handleLight('09', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb8_on" data-command-name="B9" data-command-value="1" onclick="handleLight('10', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Candycane Tree</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb8_off" data-command-name="B9" data-command-value="0" onclick="handleLight('10', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb7_on" data-command-name="B14" data-command-value="1" onclick="handleLight('11', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Lil' Penguin</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb7_off" data-command-name="B14" data-command-value="0" onclick="handleLight('11', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb8_on" data-command-name="B15" data-command-value="1" onclick="handleLight('12', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Santa Claus</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb8_off" data-command-name="B15" data-command-value="0" onclick="handleLight('12', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb7_on" data-command-name="B4" data-command-value="1" onclick="handleLight('13', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Left Tree</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb7_off" data-command-name="B4" data-command-value="0" onclick="handleLight('13', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb8_on" data-command-name="B3" data-command-value="1" onclick="handleLight('14', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Front Bushes</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb8_off" data-command-name="B3" data-command-value="0" onclick="handleLight('14', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>


            <div class="control-button-row">
                <div class="control-button-wrapper">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb7_on" data-command-name="B13" data-command-value="1" onclick="handleLight('15', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Christmas Tree</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb7_off" data-command-name="B13" data-command-value="0" onclick="handleLight('15', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="control-button-wrapper last-element">
                    <div class="control-button-inner-wrapper">
                        <div class="control-button control-button-on">
                            <a href="#" id="cb8_on" data-command-name="B1" data-command-value="1" onclick="handleLight('16', 'on')">On</a>
                        </div>
                        <div class="control-button-title">Rudolph</div>
                        <div class="control-button control-button-off">
                            <a href="#" id="cb8_off" data-command-name="B1" data-command-value="0" onclick="handleLight('16', 'off')">Off</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="footer mobile-footer">
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-5586957014538496"
            data-ad-slot="3192393020"
            data-ad-format="auto">
        </ins>
    </div> <!-- end #footer -->
@endsection
@push('script')

<script src="//cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
<script>
    var socket = io.connect('https://mkelights.com:8080/');
    var controlStatusElement = $('.control-status');

    socket.on('connect', function(data) {
        socket.emit('joined', 'Hello client from site');
    });

    socket.on('acknowledge', function(data) {
        controlStatusElement.html(data);
    });

    function handleLight(channel, handle) {
        var sysStatus = <?php echo $data['opened'] ?>;

        if (sysStatus === 1) {
            console.log("test light button", channel, 'light_' + handle);
            socket.emit('light_' + handle, channel);
            controlStatusElement.html("Wait...");

            $.ajax({
                type: 'POST',
                url: "{{ url('/save-command') }}",
                data: {
                    channel: channel,
                    handle: handle,
                    _token: "{{csrf_token()}}",
                },
                success: function(result) {
                    console.log(result);
                }
            })
        } else {
            controlStatusElement.html("Offline - Check back later!");
        }
    }

    socket.on('response ready', function(msg) {
        controlStatusElement.html(msg);
    });

    socket.on('response wait', function(msg) {
        controlStatusElement.html(msg);
    });
</script>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#video2").hide();
        $("#video1").show();
        $("#camera1").show();
        $("#camera2").hide();

        $('#camera1').on('click', (function() {
            $("#video1").hide();
            $("#video2").show();
            $("#camera1").hide();
            $("#camera2").show();
        }));

        $('#camera2').on('click', (function() {
            $("#video2").hide();
            $("#video1").show();
            $("#camera1").show();
            $("#camera2").hide();
        }));
    })
</script>
@endpush
