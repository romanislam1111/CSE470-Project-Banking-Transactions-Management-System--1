<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Portal With Twilio</title>
        <!-- Bootstrap styles CDN -->
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Add Phone Number
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                 <input type="tel" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                      <button type="submit" class="btn btn-primary">Register User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Send SMS message
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('process_sms_sandbox') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Select users to notify</label>
                                        <input class="form-control" type="tel" required name="number" value="+233557484181"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Notification Message</label>
                                     <textarea class="form-control" rows="3" required name="message">Hello Bako</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Notification</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>