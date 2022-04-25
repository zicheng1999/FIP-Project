<?php
    include 'inc/inc.ref.php';
    include 'inc/inc.header.php';
?>

<style>
  .btn-disabled {
    color: #fff !important;
    background-color: none;
  }
  #divCanvas{
    border: 4px outset rgba(102,93,101,0.9);
    border-radius: 40px;
    display:none;
  }

  /* If you want to remove the background and make it transparent, you can apply the following styles */
  .cropper-crop {
        display: none;
    }
  .cropper-bg {
      background: none;
  }

</style>

<!--Outermost Container-->
<div class="container" style="margin-top:30px;"> <!--Last 1-->
  <div class="row"> <!--Last 2-->
    <div class="col-md-8 m-auto"> <!--Last 3-->
    
      <!--custom-file mb-3-->
      <h4 style="text-align:center;">Upload your image here to crop or filter</h4>
      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="fileUpload">
        <label id="lblfileUpload" class="custom-file-label">Choose Image</label>
      </div> <!--End custom-file mb-3-->

      <div id="bCrop" style="width: 100%; height: 400px; background: lightgrey;">
        <img id="bImage">   
      </div>
      
      <div id="aCrop" style="width: 100%; background: lightblue; display:none; text-align: center;">
        <img id="aImage">   
     </div>

      <!--Image goes here-->
      <div id="divCanvas">
        <canvas id="myCanvas" style="margin:auto; display:none;"></canvas>
      </div>

      <!--row mt-5 (Button Row)-->
      <div class="row mt-3">
        <!--btnCrop-->
        <div class="col-md-6">
          <button id="btnCrop" class="btn btn-block" style="background: #7E685A; color:white;">Crop</button>
        </div> <!--End col-md-6-->
      
        <!--btnToFilter-->
        <div class="col-md-6">
          <button id="btnToFilter" class="btn btn-success btn-block">Go to Filter</button>
        </div> <!--End col-md-6-->

        <!--btnToFilter-->
        <div class="col-md-6" style="margin: auto;">
          <button id="btnToCrop" class="btn btn-block" style="background: #7E685A; color:white; display:none;">Go to Crop</button>
        </div> <!--End col-md-6-->
      </div>
      <!--End row mt-5 (Button Row)-->

<div id="filterPanel" style="display:none;"> <!--Start filter-->

    <!--Start Transformation-->
    <div class="row mt-4">
      <div class="col-md-12">
        <h4 style="text-align:center;">Transformation</h4>
      </div>     
    </div> 
      
    <div class="row mt-4">
        <div class="col-md-6" style="margin:auto;">
          <button id="btnRotate" class="btn btn-warning btn-block" style="color:white;">Rotate 90°</button>
        </div>
    </div>
    <!--End Transformation-->
     
      <h4 class="text-center my-3">Filters</h4>

      <!--row my-4 text-center (Custom change1)-->
      <div class="row my-4 text-center">
        <!--Brightness-->
        <div class="col-md-3" style="background:none;">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn brightness-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Brightness</button>
            <button class="filter-btn brightness-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Contrast-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn contrast-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Contrast</button>
            <button class="filter-btn contrast-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Saturation-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn saturation-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Saturation</button>
            <button class="filter-btn saturation-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Vibrance-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn vibrance-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Vibrance</button>
            <button class="filter-btn vibrance-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->
      </div>
      <!--End row my-4 text-center (Custom change1)-->

      <!--row my-4 text-center (Custom change2)-->
      <div class="row my-4 text-center">
        <!--Hue-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn hue-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Hue</button>
            <button class="filter-btn hue-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Exposure-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn exposure-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Exposure</button>
            <button class="filter-btn exposure-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Gamma-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn gamma-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Gamma</button>
            <button class="filter-btn gamma-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Sepia-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn sepia-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Sepia</button>
            <button class="filter-btn sepia-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->
      </div>
      <!--End row my-4 text-center (Custom change2)-->

       <!--row my-4 text-center (Custom change3)-->
       <div class="row my-4 text-center">
        <!--Clip-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn clip-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Clip</button>
            <button class="filter-btn clip-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Noise-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn noise-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Noise</button>
            <button class="filter-btn noise-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Sharpen-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn sharpen-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Sharpen</button>
            <button class="filter-btn sharpen-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->

        <!--Blur-->
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn blur-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" style="width:80px;" disabled>Blur</button>
            <button class="filter-btn blur-add btn btn-info">+</button>
          </div> <!--End btn-group btn-group-sm-->
        </div> <!--End col-md-3-->
      </div>
      <!--End row my-4 text-center (Custom change3)-->

      <h4 class="text-center my-3">Effects</h4> 

      <!--row mb-3 (Effect R1)-->
      <div class="row mb-3">
        <!--Vintage-->
        <div class="col-md-3">
          <button class="filter-btn vintage-add btn btn-dark btn-block">Vintage</button>
        </div> <!--End col-md-3-->

        <!--Lomo-->
        <div class="col-md-3">
          <button class="filter-btn lomo-add btn btn-dark btn-block">Lomo</button>
        </div> <!--End col-md-3-->

        <!--Clarity-->
        <div class="col-md-3">
          <button class="filter-btn clarity-add btn btn-dark btn-block">Clarity</button>
        </div> <!--End col-md-3-->

        <!--Sin City-->
        <div class="col-md-3">
          <button class="filter-btn sincity-add btn btn-dark btn-block">Sin City</button>
        </div> <!--End col-md-3-->
      </div> 
      <!--End row mb-3 (Effect R1)-->

      <!--row (Effect R2)-->
      <div class="row">
        <!--Cross Process-->
        <div class="col-md-3">
          <button class="filter-btn nostalgia-add btn btn-dark btn-block">Cross Process</button>
        </div> <!--End col-md-3-->
        
        <!--Pinhole-->
        <div class="col-md-3">
          <button class="filter-btn pinhole-add btn btn-dark btn-block">Pinhole</button>
        </div> <!--End col-md-3-->
        
        <!--Nostalgia-->
        <div class="col-md-3">
          <button class="filter-btn nostalgia-add btn btn-dark btn-block">Nostalgia</button>
        </div> <!--End col-md-3-->

        <!--Her Majesty-->
        <div class="col-md-3">
          <button class="filter-btn hermajesty-add btn btn-dark btn-block">Her Majesty</button>
        </div> <!--End col-md-3-->
      </div>
      <!--End row (Effect R2)-->

      <!--row (Effect R3)-->
      <div class="row mt-3">
        <!--Cross Process-->
        <div class="col-md-3">
          <button class="filter-btn orangepeel-add btn btn-dark btn-block">Orange Peel</button>
        </div> <!--End col-md-3-->
        
        <!--Pinhole-->
        <div class="col-md-3">
          <button class="filter-btn love-add btn btn-dark btn-block">Love</button>
        </div> <!--End col-md-3-->
        
        <!--Nostalgia-->
        <div class="col-md-3">
          <button class="filter-btn sunrise-add btn btn-dark btn-block">Sunrise</button>
        </div> <!--End col-md-3-->

        <!--Her Majesty-->
        <div class="col-md-3">
          <button class="filter-btn concentrate-add btn btn-dark btn-block">Concentrate</button>
        </div> <!--End col-md-3-->
      </div>
      <!--End row (Effect R3)-->

      <h4 class="text-center my-3">Watermark</h4>

      <div id="divWatermark" class="row mt-4">
        <div class="col-md-6">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Watermark</span>
            </div> <!--End input-group-prepend-->
           <input id="txtWM" type="text" class="form-control" placeholder="Enter watermark content" aria-label="Watermark" aria-describedby="basic-addon1">
          </div> <!--End input-group-mb-3-->
      </div> <!--End txtWatermark-->
          
          <div class="col-md-6">
            <button id="btnAddWM" class="btn btn-block" style="background:purple; color:white;">Add Watermark</button>
          </div> <!--End btnAddWatermark-->
      </div> <!--End divWatermark-->


      <!--row mt-5 (Button Row)-->
      <div class="row mt-5 mb-5" style="margin-bottom: 30px;">
        <!--btnDownload-->
        <div class="col-md-6">
          <button id="btnDownload" class="btn btn-success btn-block">Download Image</button>
        </div> <!--End col-md-6-->
      
        <!--btnUpload-->
        <div class="col-md-4" style="display:none">
          <button id="btnUpload" class="btn btn-success btn-block">Upload Image</button>
        </div> <!--End col-md-6-->

        <!--btnRemove-->
        <div class="col-md-6">
          <button id="btnRevert" class="btn btn-danger btn-block">Reset Image</button>
        </div> <!--End col-md-6-->
      </div>
      <!--End row mt-5 (Button Row)-->
</div> <!--End filter-->

    </div> <!--End col-md-8 m-auto-->
  </div> <!--End row-->
</div> <!--End container-->

<script>

$(document).ready(function(){
    // Private Variables
    var myCanvas;
    var ctx;
    var fileName = '';
    var img = new Image();
    var cache;
    var ang = 0;
    var base64;
    var isVertical = false;
    var firstInput = true;
    var firstFilterNoCrop = true;

    // init_crop()
    function init_crop(){
      $("#bImage").cropper({
          zoomable: false
      }); // End cropper()
    } // End init_crop()
    
    // init_filter()
    function init_filter(dataURL){
      // Get canvas element
      myCanvas = document.getElementById('myCanvas');
      ctx = myCanvas.getContext('2d');

      base64 =  dataURL; // Set the image cropped to a private variable for future use (Reset to original image after being croppped)
      
      $('#aImage').css('display', 'none'); // Hide image parts

      // Show canvas parts
      $('#myCanvas').css('display', 'block');    
      $('#divCanvas').css('display', 'block');
      
      // Reset the content of the canvas
      Caman('#myCanvas',img,function(){
        this.revert();
      }); // End Caman

      img = new Image();
      img.src = dataURL; // Set the image using dataURL (base64 data)
      
      // The function below will be executed once the image is loaded
      img.onload = function(){
        // Assign the width and height of the outer canvas
        myCanvas.width = this.width * 2; // Double the myCanvas width
        myCanvas.height = this.height * 2; // Double the myCanvas height

        cache = this; // Save the image to the cache for future use (Calcalation in rotation and scalling)
        
        // Draw the image at the center of the outer canvas
        ctx.save(); // Save the current state of myCanvas
        ctx.clearRect(0, 0, myCanvas.width, myCanvas.height); // Clear the myCanvas
        ctx.translate(cache.width/2, cache.height/2); // Set the origin to the center
        ctx.rotate(Math.PI / 180 * (ang += 360)); // Rotate the image 
        ctx.drawImage(img,0, 0, cache.width, cache.height); // Draw the image
        ctx.restore(); // Restore the state of image before ctx.save() // In short, reset the origin to the top left corner of the canvas
      } // End img.onload
    } // End init_filter()
    
    // fileUpload.change
    $(document).on('change', '#fileUpload',function(){
        if(firstInput === false){
          $currentCropper = $('#bImage').data('cropper');
          $currentCropper.destroy(); 
          $('#bImage').data('cropper',null); // !IMPORTANT!
        } // End if
        firstInput = false;

        var myImg = $('#fileUpload').prop('files')[0];
        fileName = myImg.name; // Set the original file name to the private variable (Used to create a new file name for the image edited)
        $('#lblfileUpload').text(fileName); // Write the original file name to the its label

        setTimeout(function(){
          readImageToImg();
        },200);    
    }) // End fileUpload.change

    // readImageToImg()
    function readImageToImg(){
        var myImg = $('#fileUpload').prop('files')[0]; 
        const reader = new FileReader();

        if(myImg){
            reader.readAsDataURL(myImg);
          } // End if(file)

        reader.addEventListener('load', () => {
            $('#bImage').attr('src', reader.result); // Read from reader.readAsDataURL(file)
            init_crop();            
        }, false); // End reader.load ?Why add 'false' as 2nd arguement?       
    } // End readImageToImg()

    // btnCrop
    $(document).on('click','#btnCrop',function(){
        //alert('btnCrop');
        firstInput = false;
        crop();
    }); // End btnCrop

    // Crop
    function crop(){
        // Blob is a textual form of an image which will be obtained from <img> tag
        $("#bImage").cropper("getCroppedCanvas").toBlob(function (blob) {

            var dataURL = $("#bImage").cropper('getCroppedCanvas').toDataURL('image/png');
            base64 = dataURL;
            var myImg = $('#fileUpload').prop('files')[0];
            var img_name_ori = myImg.name;

            var formData = new FormData();
            formData.append("croppedImage", blob);
            formData.append("img_name_ori", img_name_ori); 
            formData.append("toFilterNoCrop", 'Crop');

            $.ajax({
                url: "upload.php", // name of the file which we will be creating soon
                method: "POST",
                data: formData,
                processData: false, // necessary for sending image data
                contentType: false, // necessary for sending image data
                success: function (response) {
                    $('#bCrop').css('display','none');
                    $('#aCrop').css('display','block');
                    $('#aImage').attr('src', response);
                    toFilterPanel();
                    init_filter(dataURL);
                } // End success
            }); // End ajax
        }); // End cropper()
    } // End crop()    

    $(document).on('click','#btnToFilter',function(){    
        if(firstFilterNoCrop === true){
          alert('toFilterWithoutCrop');
          toFilterWithoutCrop();
        }
        toFilterPanel();
    }); // End btnToFilter
    
    // btnToCrop
    $(document).on('click','#btnToCrop',function(){
        toCropPanel();
    }); // End btnToCrop

    // toFilterWithoutCrop()
    function toFilterWithoutCrop(){
        firstFilterNoCrop = false;
        var myImg = $('#fileUpload').prop('files')[0]; 
        const reader = new FileReader();
        var data64;

        if(myImg){
            reader.readAsDataURL(myImg);
        } // End if(file)

        reader.addEventListener('load', () => {
            $('#bImage').attr('src', reader.result); // Read from reader.readAsDataURL(file)
            data64 = reader.result; 

            var formData = new FormData();
            formData.append("croppedImage", data64);
            formData.append("img_name_ori", fileName);
            formData.append("toFilterNoCrop", 'toFilterNoCrop');
            console.log('data64');
            console.log(data64);
            $.ajax({
                url: "upload.php", // name of the file which we will be creating soon
                method: "POST",
                data: formData,
                processData: false, // necessary for sending image data
                contentType: false, // necessary for sending image data
                success: function (response) {
                  $('#bCrop').css('display','none');
                  $('#aCrop').css('display','block');
                  $('#aImage').attr('src', response);
                  alert(response);
                  init_filter(data64);
            } // End success
        }); // End ajax

        }, false); // End reader.load ?Why add 'false' as 2nd arguement? 

        

    } // End toFilterWithoutCrop   

    // toFilterPanel()
    function toFilterPanel(){
        $('#filterPanel').css('display','block');
        $('#btnToCrop').css('display','block');
        $('#btnCrop').css('display','none');
        $('#btnToFilter').css('display','none');
    } // End toFilterPanel()

    // toCropPanel()
    function toCropPanel(){
        $('#filterPanel').css('display','none');
        $('#btnToCrop').css('display','none');
        $('#btnCrop').css('display','block');
        $('#btnToFilter').css('display','block');
    } // End toCropPanel()

    // btnRotate
    $(document).on('click','#btnRotate',function(){
        ctx.save(); // Save the current state of the canvas
        ctx.clearRect(0, 0, myCanvas.width, myCanvas.height); // Clear the canvas
        ctx.translate(cache.width, cache.height); // Set the origin to the center of the canvas
        ctx.rotate(Math.PI / 180 * (ang += 90)); // Rotate the canvas 
        ctx.drawImage(img, -cache.width / 2, -cache.height / 2, cache.width, cache.height); // Draw the image
        ctx.restore(); // Restore the state of the canvas

        // Save changes
        Caman('#myCanvas', function() {
          this.reloadCanvasData();
        });
          
        // Manipulate the orientation of the canvas
        if(isVertical === false){ // width > height
            isVertical = true;
        }else{ // height > width
            isVertical = false;
        }    
    }); // End btnRotate

    // Filter functions
    document.addEventListener('click',(e)=>{
        if(e.target.classList.contains('filter-btn')){
            if(e.target.classList.contains('brightness-add')){
                Caman('#myCanvas',img,function(){
                    this.brightness(5).render(); // Increase brightness by 5
                }); // End Caman (brigtness-add')
            } // End if (brigtness-add')
            else if(e.target.classList.contains('brightness-remove')){
                Caman('#myCanvas',img,function(){
                    this.brightness(-5).render(); // Decrease brightness by 5
                }); // End Caman (brigtness-remove')
            } // End else if (brigtness-remove')
            else if(e.target.classList.contains('contrast-add')){
                Caman('#myCanvas',img,function(){
                    this.contrast(5).render(); 
                }); // End Caman (contrast-add')
            } // End else if (contrast-add')
            else if(e.target.classList.contains('contrast-remove')){
                Caman('#myCanvas',img,function(){
                    this.contrast(-5).render(); 
                }); // End Caman (contrast-remove')
            } // End else if (contrast-remove')
            else if(e.target.classList.contains('saturation-add')){
                Caman('#myCanvas',img,function(){
                    this.saturation(5).render(); 
                }); // End Caman (saturation-add')
            } // End else if (saturation-add')
            else if(e.target.classList.contains('saturation-remove')){
                Caman('#myCanvas',img,function(){
                    this.contrast(-5).render(); 
                }); // End Caman (saturation-remove')
            } // End else if (saturation-remove')
            else if(e.target.classList.contains('vibrance-add')){
                Caman('#myCanvas',img,function(){
                    this.vibrance(5).render(); 
                }); // End Caman (vibrance-add')
            } // End else if (vibrance-add')
            else if(e.target.classList.contains('vibrance-remove')){
                Caman('#myCanvas',img,function(){
                    this.vibrance(-5).render(); 
                }); // End Caman (vibrance-remove')
            } // End else if (vibrance-remove')
            else if(e.target.classList.contains('vintage-add')){
                Caman('#myCanvas',img,function(){
                    this.vintage().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('lomo-add')){
                Caman('#myCanvas',img,function(){
                    this.lomo().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('clarity-add')){
                Caman('#myCanvas',img,function(){
                    this.clarity().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('sincity-add')){
                Caman('#myCanvas',img,function(){
                    this.sinCity().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('crossprocess-add')){
                Caman('#myCanvas',img,function(){
                    this.crossprocess().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('pinhole-add')){
                Caman('#myCanvas',img,function(){
                    this.pinhole().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('nostalgia-add')){
                Caman('#myCanvas',img,function(){
                    this.nostalgia().render(); 
                }); // End Caman ()
            } // End else if ()
            else if(e.target.classList.contains('hermajesty-add')){
                Caman('#myCanvas',img,function(){
                    this.herMajesty().render(); 
                }); // End Caman ()
            } // End else if ()
        } // End if (e.target.classList.contains('filter-btn'))
    }); // End document.addEventListener('click',(e)=>{
    
    // btnAddWM
    $(document).on('click','#btnAddWM',function(){   
        var wm = $('#txtWM').val(); // Get the value of watermark content

        // Get the canvas element
        myCanvas = document.getElementById('myCanvas');
        ctx = myCanvas.getContext('2d');

        // When the image is in vertical state, then...
        if(isVertical === true){
          var y = (myCanvas.height-cache.width)/2; // Calcalate y-coordinate
          ctx.save(); // Save the current state of the canvas    

          ctx.translate(cache.width, cache.height); // To center
          ctx.rotate(Math.PI / 180 * ang); // Rotate
          ctx.translate(-cache.width/2, -cache.height/2); // Reset origin
        
          // Draw the background of the watermark
          ctx.fillStyle = 'rgba(0,0,0,0.5)'; // Set bg color
          ctx.fillRect(0, 10, cache.width, 50); // Fill rect !x,y,w,h!

          // Write text (watermark content)
          ctx.font = '25px sans-serif';
          ctx.fillStyle = 'white';
          ctx.textAlign = 'center';
          ctx.fillText(wm, cache.width/2, 45); // Write text !txt, x,y!
          ctx.restore(); // Restore the state of the canvas 
      } 
      else{ // When the image is in horizontal state, then...        
          var x = (myCanvas.width - cache.width) / 2;

          ctx.save(); // Save the current state of the canvas   
          var boxTop = (myCanvas.height/4)*1.2; // Calculate y-coorditate !TODO!

          // Draw the background of the watermark
          ctx.fillStyle = 'rgba(0,0,0,0.5)'; // Set bg color
          ctx.fillRect(x, boxTop, cache.width,45); // Fill rect !x,y,w,h!

          // Write text (watermark content)
          ctx.font = '25px sans-serif';
          ctx.fillStyle = 'white';
          ctx.textAlign = 'center';
          ctx.fillText(wm, myCanvas.width/2, boxTop+32); // Write text !txt, x,y! !TODO!
          ctx.restore(); // Restore the state of the canvas
      }  // End else           
    }); // End btnAddWM

    // btnRevert
    $(document).on('click','#btnRevert',function(){
      // Reset some private variables
      isVertical = false; // Reset the orientation
      ang=0; // Reset the rotation angle
      init_filter(base64); // Redraw the image based on the cache or image after being crooped
    }); // End btnRevert

    // cropBeforeDownload()
    function cropBeforeDownload(){
      Caman('#myCanvas', function(){
        if(isVertical === true){
          var x = (myCanvas.width-cache.height) / 2;
          var y = (myCanvas.height-cache.width) / 2;
          console.log('x: ' + x);
          console.log('y: ' + y);

          ctx.save();
          this.crop(cache.height, cache.width, x, y); // Crop !w,h,x,y!
          this.render(); // Save changes
          ctx.restore();  // Restore the state of the canvas
        } // End if
        else{
            ctx.save(); // Save the current state of the canvas
            this.crop(cache.width, cache.height, cache.width/2, cache.height/2); // w,h,x,y
            this.render(); // Save changes
            ctx.restore(); // Restore the state of the canvas
        } // End else          
      }); // End Caman
    } // End cropBeforeDownload

    // btnDownload
    $(document).on('click','#btnDownload',function(){
        cropBeforeDownload(); // Crop the outer canvas out and only get the image with its actual size 

        // Delay for 200ms as cropBeforeDownload() requires some time to be completed
        setTimeout(function(){
          myCanvas = document.getElementById('myCanvas'); // Get the canvas element
          const ext = fileName.slice(-4); // Get the file name without extension
          let newFileName;

          if(ext === '.jpg' || ext === '.png'){
            newFileName = fileName.substring(0, (fileName.length-4)) + '-edited.png'; // Create a new file name
            download(myCanvas, newFileName); // Download the image edited
          } // End if
          else{
            alert('Only hpg and png are allowed!');
          } // End wlse
        },200); // End setTimeout
    }); // End btnDownload

    // download()
    function download(canvas, fileName){
        let e;
        const link = document.createElement('a'); // Create an "a" element
        link.download = fileName; // Set the name for the image to be downloaded
        link.href = canvas.toDataURL('image/jpeg', 0.8); // Set the download link of the iamge edited ?Why 0.8?

        e = new MouseEvent('click'); // Create a click event for the "a" created above
        link.dispatchEvent(e); // Send event or trigger click // In short, download the image
    } // End download()
}); // End document.ready
</script>


