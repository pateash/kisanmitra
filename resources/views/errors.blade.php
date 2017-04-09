<ul class="list-unstyled">
    @if(sizeof($errors)!=0)
        @foreach($errors->all() as $error)
            <li class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;{{$error}}</li>
        @endforeach
    @elseif(request("success")==1)
        <li class="alert alert-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Your Request was Successful!</li>
    @endif
</ul>