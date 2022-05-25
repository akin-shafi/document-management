<html>
<head>
<link rel="stylesheet" type="text/css" href="signature-design.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>
<body>
    <center>        
        <div id="html-content-holder" style="">           
            
	        <div class="css-pl8xw2" id="elem">
				Signed on ToNote by:
				<div class="css-fv3lde">
					<span class="css-4x8v88" style="font-family: <?php echo $value?>;">Shafi Akinropo</span>
				</div>
				<span class="css-1j983t3 signatureID">6D80C6DF365242545678</span>
			</div>
           
        </div>

     
        <input id="btn_convert" type="button" value="Convert to Image" />

        <!-- <br />
        <h3>Preview :</h3> -->
        <div id="previewImg">
        </div>

        <div id="form-warp"></div>
    </center>
    <script>
       $(document).on("click", "#btn_convert", function() {
		html2canvas(document.getElementById("elem"),
			{
				allowTaint: true,
				useCORS: true
			}).then(function (canvas) {
				var anchorTag = document.createElement("a");
				document.body.appendChild(anchorTag);
				document.getElementById("previewImg").appendChild(canvas);

				var dataURL = canvas.toDataURL("image/png");
        		// $('#canvasImg').html('<img src="'+dataURL+'" alt="" width="1000">');



				var sendemail = 'sakinropo@gmail.com';
				var replyemail = 'Okay';

				var form = document.createElement("form");
				form.setAttribute("action","upload.php");
				form.setAttribute("enctype","multipart/form-data");
				form.setAttribute("method","POST");
				form.setAttribute("target","_self");
				// form.action = location.href.replace(/^http:/, 'https:');
				form.innerHTML = '<input type="text" name="image" value="'+dataURL+'"/>'+'<input type="email" name="email" value="'+sendemail+'"/>'+'<input type="email" name="replyemail" value="'+replyemail+'"/>';
				// form.submit();
				$("#form-warp").html(form)

			});
  		});

   //     $('#canvasImg').draggable().resizable({
	  //   handles: "ne, se, sw, nw"
	  // });

    </script>

</body>
</html>

