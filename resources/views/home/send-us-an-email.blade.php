@extends('layouts.home')

@section('content')
<div class="left_side_wrapper--narrow">
  <div class="time-header">
    <img src="{{ url('images/time_header.png') }}" alt="">
  </div>
  <div class="time_wrapper">
		<div class="controls-on-time">
			Controls ON at {{ $data['display_start_hour'] }} and OFF at  {{ $data['display_end_hour'] }}
		</div>
		<div class="current-time">
			Current Time: {{ $data['current_dt'] }} CST
		</div>
	</div>
  <div class="stream_wrapper">
    <script type="text/javascript" src="https://cdn.sender.net/webforms/7661/a319c844.js?v=6"></script> 
  </div>
</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
      <span style="font-weight:bold">Send Us An Email</span>
      <p>If you'd like to reach out and contact us, please use the form below. We would love to hear from you and appreciate any feedback/questions!</p>
      <p>
        <b>Your Name:</b> <input type="text" id="yourname" /><br />
        <b>Your E-mail:</b> <input type="text" id="address" /><br />
      </p>
      <p>
        <b>Your comments:</b><br />
        <textarea id="comments" rows="10" cols="50"></textarea>
      </p>
      <input type="submit" id='submit' value="SendMail">
    </div>
	</div>
</div>
@endsection

@push('script')
<script>
  $(document).ready(function(){
    $('#submit').click(function(e){
      $.ajax({
        type: 'POST',
        url: "{{ url('/send-email') }}",
        data: {
          yourname: $('#yourname').val(),
          address: $('#address').val(),
          comments: $('#comments').val(),
          _token: "{{csrf_token()}}",
        },
        success: function(result) {          
          console.log(result);
          window.alert(result.msg);
        }
      })
    });
  })
</script>
@endpush
