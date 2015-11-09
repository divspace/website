@extends('layouts.master')
@section('content')
    <div id="contact">
        <form action="{{ url('contact') }}" method="POSt">
            <div class="row form-group">
                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" for="email">Email Address</label>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <input class="form-control" id="email" name="email" type="email">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" for="message">Message</label>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-xs-offset-2 col-xs-2">
                    <button class="btn btn-secondary" type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
@stop
