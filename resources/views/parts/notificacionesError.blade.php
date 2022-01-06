

<div class="row">
        <div class="col-sm-12">
            <div class="content">
                @if(Session::has('message'))
                    <div class="alert alert-danger">
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div>
</div>


{{-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);
 
    /* setTimeout(function() {
        $(".content2").fadeIn(1500);
    },6000); */
});
</script> --}}