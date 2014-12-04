<!-- Button trigger modal -->
<button type="button" id="modalButton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<script> 
    $( "#myModal" ).click(function() {
    $("#topSec").load("img/prints/014.JPG"); 
});

function modalLoad(imageName) {
    /*alert("image = " + imageName);*/
    /*imageName = imageName + "." + "JPG";*/
    //docURL = window.location.host + "/" + imageName; 
    docURL = "http://codeinart.com/" + imageName; //TESTING!!!!! TEMPOARAY
    //alert(docURL);
    $('.fb-comments').attr('data-href', docURL)
     $('#expandedImg').attr('src', imageName); 
    $('#myModal').modal('show');
    
    
    updateFBComp(document, 'script', 'facebook-jssdk');
}

function updateFBComp (d, s, id) {
    /*
    var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
            js = d.createElement('script'); 
            js.id = id; 
            js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            d.getElementsByTagName('head')[0].appendChild(js);*/
            
            
        var js, fjs = d.getElementsByTagName(s)[0];
        /*alert(d.getElementById(id));*/
        /*if (d.getElementById(id)){
            alert(d.getElementById(id));
            
        }*/
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        
        /*alert(d + " " + s + " " + id + " " + fjs);*/
    }
    </script>
    
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <!--h4 class="modal-title" id="myModalLabel">Modal title</h4-->
      </div>
      <div class="modal-body">
        <!-- Expanded Image --> 
        <img id="expandedImg" src="#" />
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button-->
        <?php include 'facebookComp.php' ?>
      </div>
    </div>
  </div>
</div>

