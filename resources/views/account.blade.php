@extends("layouts.master")
<style>
    body{margin-top:20px;}
    .fa-fw {width: 2em;}
</style>
@section('content')
    <div class="container">
        <div class="row" style="margin:2em;">

            {{--//showing errors--}}
            @include('errors')

            {{--//showing menu--}}
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" >
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i>&nbsp;Profile</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i>&nbsp;Change Password</a></li>
                    <!-- <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i>&nbsp;Settings</a></li> -->
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Logout</a></li>
                </ul>
            </div>

            {{--//showing content of menu--}}
            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->name}}
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->email}}
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Last Password Change</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->updated_at->diffForHumans()}}
                    </div>
                </div>

            </div>

            <div class="col-md-9  admin-content" id="change-password">
                <form action="/password" method="post">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}

                    {{--new password--}}
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="new_password" class="control-label panel-title">New Password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="new_password" >
                                </div>
                            </div>

                        </div>
                    </div>

                    {{--confirm password--}}
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_confirmation" id="confirm_password" >
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--submit--}}
                    <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="pull-left">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            {{--<div class="col-md-9  admin-content" id="settings"></div>--}}

            <div class="col-md-9  admin-content" id="logout">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                    </div>
                    <div class="panel-body">
                        Do you really want to logout ?&nbsp;&nbsp;
                        <a  href="{{ route('logout') }}" class="label label-danger"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span >&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;</span>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/account" class="label label-success">&nbsp;<span >&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;</span></a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>



                </div>
           </div>
        </div>
    </div>

    <script>
        //FOLLOWING ARE COMMENTED FOR SPEEDING THINGS
       // $(document).ready(function()
        //{
            var navItems = $('.admin-menu li > a');
            var navListItems = $('.admin-menu li');
            var allWells = $('.admin-content');
            var allWellsExceptFirst = $('.admin-content:not(:first)');

            allWellsExceptFirst.hide();
            navItems.click(function(e)
            {
                e.preventDefault();
                navListItems.removeClass('active');
                $(this).closest('li').addClass('active');

                allWells.hide();
                var target = $(this).attr('data-target-id');
                $('#' + target).show();
            });
        //});
    </script>
@endsection