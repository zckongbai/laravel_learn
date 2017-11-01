<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact us</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br /><br />
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('contact') }}" method="post"></form>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control span6" name="name" placeholder="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control span6" name="email" placeholder="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Subject</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control span6" name="subject" placeholder="subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Message</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control span6" name="msg" placeholder="msg">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Captcha</label>
                            <div class="col-md-6">
                                {!! app('captcha')->display(); !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>