<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel ZK40 Test</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container  text-center">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="#device_ip">Device IP</label>
                        <input type="text" id="device_ip" class="form-control" placeholder="8.8.8.8">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="#comm_protocol">Communication protocol</label>
                        <input type="text"  id="comm_protocol" class="form-control" placeholder="TCP or UDP">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="#port">Device port</label>
                        <input type="text"  id="port" placeholder="4370" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="#device_id">Device id</label>
                        <input type="text"  id="device_id" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="#password">Password</label>
                        <input type="text"  id="password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-12">
                    <button type="button" class="btn btn-info testConnBtn">Test connection!</button>
                </div>
            </div>
            
            <div class="row conn_response_msg_fail" >
                <div class="col-12">
                    <div class="alert alert-danger">
                        <p>Couldn't connect to device</p>
                    </div>
                </div>
            </div>

            <div class="row conn_response_msg_success" >
                <div class="col-12">
                    <div class="alert alert-success">
                        <p>Connection successfull</p>
                    </div>
                </div>
            </div>
            



        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
        
        @include('scripts')
    </body>
</html>



           




