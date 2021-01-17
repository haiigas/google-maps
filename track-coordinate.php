<!DOCTYPE html>
<html>
<head>
    <title>Teknowebapp - Get Coordinate</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
		body {
			padding-top: 50px;
		}
	</style>
</head>
<body>
    <div class="container">
		<div class="form-group">
			<label>Cek Kordinat</label>
            <button class="btn btn-primary" onclick="getLocation()">Cek</button>
		</div>
        <p style="margin-top:10px" id="koordinat"></p>
	</div>
    <script>
        var view = document.getElementById("koordinat");
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
            }
        }
        function showPosition(position) {
            view.innerHTML = "Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude; 
        }
        
        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
                    break;
                case error.POSITION_UNAVAILABLE:
                    view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
                    break;
                case error.TIMEOUT:
                    view.innerHTML = "Requestnya timeout bro"
                    break;
                case error.UNKNOWN_ERROR:
                    view.innerHTML = "An unknown error occurred."
                    break;
            }
        }
    </script>
</body>
</html>