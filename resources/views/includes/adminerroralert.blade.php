<div class="alert alert-danger" id="alert" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="alert-heading"><pre>{{$message}}</pre></h4>
</div>
<?php Session::forget('error');?>