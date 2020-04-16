<?php
    include 'inc/inc.ref.php';
    include 'inc/inc.header.php';
?>

<style>

  .btn-disabled {
    color: #fff !important;
  }

  #divCanvas{
    border: 4px outset rgba(102,93,101,0.9);
    border-radius: 40px;
    display:none;
  }

</style>

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
      </div> <!--End Transformation-->
      
      <div class="row mt-4">
        <div class="col-md-6" style="margin:auto;">
          <button id="btnRotate" class="btn btn-warning btn-block" style="color:white;">Rotate 90°</button>
        </div>
      </div>

     
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

    // init_crop()
    function init_crop(){
        $("#bImage").cropper({
            zoomable: false
        });
    } // End init_crop()
    
    // init_filter()
    function init_filter(dataURL){
        myCanvas = document.getElementById('myCanvas');
        ctx = myCanvas.getContext('2d');
        base64 =  dataURL;
        $('#myCanvas').css('display', 'block');
        $('#aImage').css('display', 'none');
        $('#divCanvas').css('display', 'block');
        
        Caman('#myCanvas',img,function(){
            this.revert();
        }) // End Caman


        img = new Image();
        img.src = dataURL; // 'http://t2.gstatic.com/images?q=tbn:ANd9GcQQveW9AJCxOC8Phnq3vptJIxPFHlxNw63q4pudc66dM4O96vtm';

        img.onload = function(){
            myCanvas.width = this.width * 2; //double the myCanvas width
            myCanvas.height = this.height * 2; //double the myCanvas height
            cache = this; //cache the local copy of image element for future reference
            $('#myCanvas').css('background', 'none'); // !IMPORTANT!

            ctx.save(); //saves the state of myCanvas
            ctx.clearRect(0, 0, myCanvas.width, myCanvas.height); //clear the myCanvas
            ctx.translate(cache.width/2, cache.height/2); //let's translate
            ctx.rotate(Math.PI / 180 * (ang += 360)); //increment the angle and rotate the image 
            ctx.drawImage(img,0, 0, cache.width, cache.height); //draw the image ;)
            ctx.restore(); //restore the state of myCanvas
        } // End img.onload

    } // End init_filter()
    
    $(document).on('click','#btnRotate',function(){
        //alert('btn_rotate_2');   
        ctx.save(); //saves the state of canvas
        ctx.clearRect(0, 0, myCanvas.width, myCanvas.height); //clear the myCanvas
        ctx.translate(cache.width, cache.height); //let's translate
        ctx.rotate(Math.PI / 180 * (ang += 90)); //increment the angle and rotate the image 
        ctx.drawImage(img, -cache.width / 2, -cache.height / 2, cache.width, cache.height); //draw the image ;)
        ctx.restore(); //restore the state of myCanvas

        
        Caman('#myCanvas', function() {
          this.reloadCanvasData();
        });
        

        if(isVertical === false){
            isVertical = true;
        }else{
            isVertical = false;
        }
        
    }); // End btnRotate

    // fileUpload.change
    $(document).on('change', '#fileUpload',function(){
        var myImg = $('#fileUpload').prop('files')[0];
        fileName = myImg.name;
        //$('#hd_file_name_ori').val(fileName);
        $('#lblfileUpload').text(fileName);
        $('#bCrop').css('background','none');
        readImageToImg();
    }) // End fileUpload.change

    // readImageToImg()
    function readImageToImg(){
        var myImg = $('#fileUpload').prop('files')[0]; 
        const reader = new FileReader();

        if(myImg){
            reader.readAsDataURL(myImg);
          } // End if(file)

        reader.addEventListener('load', () => {
            // $('#hd_reader_result').val('Updated');
            console.log('img_ori:');
            console.log(reader.result);
            $('#bImage').attr('src', reader.result); // Read from reader.readAsDataURL(file)
            init_crop();
        }, false); // End reader.load ?Why add 'false' as 2nd arguement?       
    } // End readImageToImg()

    // btnCrop
    $(document).on('click','#btnCrop',function(){
        //alert('btnCrop');
        crop();
    }); // End btnCrop

    // btnToFilter
    $(document).on('click','#btnToFilter',function(){
        alert('btnToFilter');
        toFilterPanel();
    }); // End btnToFilter
    
    // btnToCrop
    $(document).on('click','#btnToCrop',function(){
        alert('btnToCrop');
        toCropPanel();
    }); // End btnToCrop

    // toFilterPanel()
    function toFilterPanel(){
        $('#filterPanel').css('display','block');
        $('#btnToCrop').css('display','block');
        $('#btnCrop').css('display','none');
        $('#btnToFilter').css('display','none');
    } // End toFilterPanel()

    // toFilterPanel()
    function toCropPanel(){
        $('#filterPanel').css('display','none');
        $('#btnToCrop').css('display','none');
        $('#btnCrop').css('display','block');
        $('#btnToFilter').css('display','block');
    } // End toCropPanel()

    // Crop
    function crop() {
        // Blob is a textual form of an image which will be obtained from <img> tag
        $("#bImage").cropper("getCroppedCanvas").toBlob(function (blob) {

            var dataURL = $("#bImage").cropper('getCroppedCanvas').toDataURL('image/png');
            base64 = dataURL;
            var myImg = $('#fileUpload').prop('files')[0];
            var img_name_ori = myImg.name;

            var formData = new FormData();
            formData.append("croppedImage", blob);
            formData.append("img_name_ori", img_name_ori);
            console.log('img_crop');
            console.log(dataURL);

            $.ajax({
                url: "upload.php", // name of the file which we will be creating soon
                method: "POST",
                data: formData,
                processData: false, // necessary for sending image data
                contentType: false, // necessary for sending image data
                success: function (response) {
                    alert(response);
                    $('#bCrop').css('display','none');
                    $('#aCrop').css('display','block');
                    $('#aImage').attr('src', response);
                    toFilterPanel();
                    init_filter(dataURL);
                }
            });
        });
    } // End crop()

    // Filters
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
    
    // cropBeforeDownload
    function cropBeforeDownload(){
        Caman('#myCanvas', function(){

        var x = (myCanvas.width-cache.height) / 2;
        var y = (myCanvas.height-cache.width) / 2;
        console.log('x: ' + x);
        console.log('y: ' + y);

            if(isVertical === true){
                ctx.save();
                this.crop(cache.height, cache.width, x, y); // Crop !w,h,x,y!
                this.render(); // Save changes
                ctx.restore(); 
            } else{
                ctx.save();
                this.crop(cache.width, cache.height, cache.width/2, cache.height/2); // w,h,x,y
                this.render();
                ctx.restore();
            }           
        }); // End Caman
    } // End cropBeforeDownload

    // btnDownload
    $(document).on('click','#btnDownload',function(){
      cropBeforeDownload();

      setTimeout(function(){
          canvas2 = document.getElementById('myCanvas');
          const ext = fileName.slice(-4);
          let newFileName;

          if(ext === '.jpg' || ext === '.png'){
              newFileName = fileName.substring(0, (fileName.length-4)) + '-edited.png';
              download(canvas2, newFileName);
          } // End if
          else{
              alert('Invalid file format!');
          }
      },200); // End setTimeout
    }); // End btnDownload

    // download()
    function download(canvas, fileName){
        let e;
        const link = document.createElement('a');
        link.download = fileName;
        link.href = canvas.toDataURL('image/jpeg', 0.8); // ? Why 0.8 ?

        // New mouse event
        e = new MouseEvent('click');
        // Dispatch
        link.dispatchEvent(e); // Send event or trigger click

    } // End download()
    
    // btnRevert
    $(document).on('click','#btnRevert',function(){
        alert('btnRevert');
        isVertical = false;
        ang=0;
        init_filter(base64);
        /*
        Caman('#myCanvas',img,function(){
            this.revert();
        }) // End Caman
        */

    }); // End btnRevert

    $(document).on('click','#btnAddWM',function(){

     


        

        
        if(isVertical === true){
          var y = (myCanvas.height - cache.width)/2

          var wm = $('#txtWM').val();
          var watermark_height = 45;

          myCanvas = document.getElementById('myCanvas');
          ctx = myCanvas.getContext('2d');

          ctx.save();    
          var boxTop = (myCanvas.height/4)*1.2; 

          ctx.translate(cache.width, cache.height); // To center
          ctx.rotate(Math.PI / 180 * ang); // Rotate
          ctx.translate(-cache.width/2, -cache.height/2); // Reset origin
          

          ctx.fillStyle = 'rgba(0,0,0,0.5)'; // Set bg color
          ctx.fillRect(0, 10, cache.width, 50); // Fill rect !x,y,w,h!

    
          ctx.font = '25px sans-serif';
          ctx.fillStyle = 'white';
          ctx.textAlign = 'center';
          ctx.fillText(wm, cache.width/2, 45); // txt, x,y
          ctx.restore();
            
        } else{ // First run        

          var wm = $('#txtWM').val();
        var watermark_height = 45;

          var x = (myCanvas.width - cache.width) / 2;

        myCanvas = document.getElementById('myCanvas');
        ctx = myCanvas.getContext('2d');
        
          ctx.save();    
            var boxTop = (myCanvas.height/4)*1.2; 

            ctx.fillStyle = 'rgba(0,0,0,0.5)'; // Set bg color
            ctx.fillRect(x, boxTop, cache.width,45); // Fill rect !x,y,w,h!

            ctx.font = '25px sans-serif';
            ctx.fillStyle = 'white';
            ctx.textAlign = 'center';
            ctx.fillText(wm, myCanvas.width/2, boxTop+32); // txt, x,y
        }  // End else   
          
    }); // End btnAddWM

}); // End document.ready
</script>

<?php // include 'inc/inc.footer.php'; ?>

<!-- If you want to remove the background and make it transparent, you can apply the following styles -->
<style>
    .cropper-crop {
        display: none;
    }
    .cropper-bg {
        background: none;
    }
</style>
