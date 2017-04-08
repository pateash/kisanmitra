@extends("layouts.master")
<style>
    @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
    body{margin-top:20px;}
    .fa-fw {width: 2em;}
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu">
                    <li class="active"><a href="http://www.jquery2dotnet.com" data-target-id="Profile"><i class="fa fa-list-alt fa-fw"></i>Profile</a></li>
                    <li><a href="http://www.jquery2dotnet.com" data-target-id="Activity"><i class="fa fa-file-o fa-fw"></i>Activity</a></li>
                    <li><a href="http://www.jquery2dotnet.com" data-target-id="Settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
                    <li><a href="/logout" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Logout</a></li>
                </ul>
            </div>
            <div class="col-md-9 well admin-content" id="Profile">
                Widgets
            </div>
            <div class="col-md-9 well admin-content" id="Activity">
                Pages
            </div>
            <div class="col-md-9 well admin-content" id="Settings">
            </div>
            <div class="col-md-9 well admin-content" id="logout">
                  some logut
            </div>
        </div>
    </div>

<script>
    //FOLLOWING ARE COMMENTED FOR SPEEDING THINGS
//    $(document).ready(function()
//    {
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
//    });
</script>
 @endsection