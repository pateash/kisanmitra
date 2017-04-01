@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top:3em;margin-bottom:3em; ">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2" style="margin-top: 3em;margin-bottom: 3em;" >
                <div class="col-xs-12 col-md-4 form-group">
                    <label for="state">State</label>

                    <select class="form-control" name="state" id="state">
                        <option value="">Select State</option>
                        <option value="mp">Madhya Pradesh</option>
                    </select>
                </div>
                <div class="col-xs-12 col-md-4 form-group">

                    <label fookr="region">Region</label>

                    <select class="form-control" name="region" id="region">
                        <option value="">Select Region</option>
                        <option value="bhopal">Bhopal</option>
                        <option value="jabalpur">Jabalpur</option>
                        <option value="gwalior">Gwalior</option>
                        <option value="indore">Indore</option>
                    </select>
                </div>
                <div class="col-xs-12 col-md-4 form-group">
                    <label for="crop">Crop</label>
                    <select class="form-control" name="crop" id="crop">
                        <option value="">Select Crop</option>

                        <option value="wheat">Wheat</option>
                        <option value="maze">Maze</option>
                 <option value="soyabean">Soyabean</option>
                        <option value="rice">Rice</option>

                    </select>
                </div>

                <div class="pull-right form-group" style="margin-right:1em">
                    <input type="submit"  class="btn btn-primary hvr-wobble-bottom" value="&nbsp;&nbsp;  Enter &nbsp;&nbsp;     ">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2" style="margin-top: 3em;margin-bottom: 3em;">
                <form class="form-default">
                    <div class="col-xs-12 col-md-4 form-group">
                        <label for="area">Area</label>
                        <input type="number" class="form-control" id="area">
                    </div>
                    <div class="col-xs-12 col-md-4 form-group">
                        <label for="seed-quantity">Seed Quantity</label>
                        <input type="number" class="form-control" id="seed-quantity">
                    </div>
                    <div class="col-xs-12 col-md-4 form-group">
                        <label for="pwd">Fertilizer</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection

