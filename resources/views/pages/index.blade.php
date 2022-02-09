@extends('layouts.main')
@section('content')
<div class="card card1">
    <div class="card-header card_header">
        <h1 style="color: red">
            <p>
                <i class="material-icons">favorite</i>
                Valentine
                <i class="material-icons">favorite</i>
            </p>
            <p>
                <i class="material-icons">local_florist</i>
                day
                <i class="material-icons">local_florist</i>
            </p>
        </h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <p>
                    Will You be my valentine?
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="options" id="inlineRadio1"
                        value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="options" id="inlineRadio2"
                        value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                </p>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form>

                    <div class="desc" id="Yes">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input" placeholder="Your Name">
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input" placeholder="Your Phone Number"
                                        aria-describedby="passwordHelpBlock">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Wrtite your phone Number in this format +255754123456
                                    </small>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-outline-danger">
                            Send
                            <i class="material-icons icon">send</i>
                        </button>
                    </div>

                    <div class="desc" id="No">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group text-center" style="color: red">
                                    <i class="material-icons">heart_broken</i>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input" placeholder="Your Phone Number"
                                        aria-describedby="passwordHelpBlock">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Wrtite your phone Number in this format +255754123456
                                    </small>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-outline-danger">
                            Send
                            <i class="material-icons icon">send</i>
                        </button>
                    </div>

                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-1.6.js"></script>
<script>
    $(document).ready(function() {
        $("div.desc").hide();
        $("input[name$='options']").click(function() {
            var test = $(this).val();
            $("div.desc").hide();
            $("#" + test).show();
        });
    });
</script>
