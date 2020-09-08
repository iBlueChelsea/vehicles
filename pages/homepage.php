<?php

require_once 'navbar.php';

$content = '
<div class="container rounded bg-light"><hr>
<div class="card">
<h5 class="card-header">Welcome to Soulware!</h5>
<div class="card-body">
<div class="row">
<div class="col-4" align="center"><h1><span class="badge badge-warning">Motorbike - News</span></h1></div>
<div class="col-4" align="center"><h1><span class="badge badge-warning">Boat - News</span></h1></div>
<div class="col-4" align="center"><h1><span class="badge badge-warning">Car - News</span></h1></div>
</div>
<div class="row">
<div class="col-4"><div class="card" style="width: 100%;"><img src="motorbike.jpg" class="card-img-top">
<div class="card-body">
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum, urna vel molestie pulvinar, augue risus convallis nunc, eget egestas mauris leo ut diam. Maecenas vitae pellentesque erat. Duis molestie pellentesque bibendum. Suspendisse commodo feugiat iaculis. Vestibulum vehicula vehicula urna. Vestibulum tristique mattis elementum. Nunc eget euismod erat, et ornare purus.</p>
</div></div></div>
<div class="col-4"><div class="card" style="width: 100%;"><img src="boat.jpeg" class="card-img-top">
<div class="card-body">
<p class="card-text">Ut blandit enim ligula, in porttitor tortor accumsan id. Sed ac arcu id leo ullamcorper ornare eu ac eros. Maecenas at vestibulum urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris pharetra neque nulla, at convallis arcu ornare vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
</div></div></div>
<div class="col-4"><div class="card" style="width: 100%;"><img src="car.jpg" class="card-img-top">
<div class="card-body">
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu viverra orci. Donec eros massa, bibendum id nisi sed, dapibus vestibulum sem. Etiam nec augue arcu. Ut in cursus leo. Sed bibendum bibendum hendrerit. Phasellus a posuere elit. Ut volutpat nec dolor sed mollis. Quisque vulputate, augue quis iaculis dictum, arcu mi tempus diam, quis tincidunt eros lacus vitae arcu.</p>
</div></div></div></div></div></div><hr></div>';

echo $content;

?>