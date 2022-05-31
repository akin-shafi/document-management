$(function () {

   // preventing page from redirecting
   $("html").on("dragover", function (e) {
      e.preventDefault();
      e.stopPropagation();

   });

   $("html").on("drop", function (e) {
      e.preventDefault();
      e.stopPropagation();
   });

   // Drag enter
   $('.uploadField').on('dragenter', function (e) {

      e.preventDefault();
      e.stopPropagation();
   });

   // Drag over
   $('.uploadField').on('dragover', function (e) {

      e.preventDefault();
      e.stopPropagation();
   });

   // Drop
   $('.uploadField').on('drop', function (e) {

      e.preventDefault();
      e.stopPropagation();


      var file = e.originalEvent.dataTransfer.files;
      var fd = new FormData();
      console.log(file[0])
      fd.append('file', file[0]);

      uploadData(fd);
   });

   // Open file selector on div click
   // $(".uploadField").click(function(){
   //     $("#resume").click();
   // });

   // file selected
   $("#resume").change(function () {
      var fd = new FormData();

      var files = $('#resume')[0].files[0];
      console.log(files)
      fd.append('file', files);

      uploadData(fd);
   });
});

// Sending AJAX request and upload file
function uploadData(formdata) {

   $.ajax({
      url: '/upload',
      type: 'post',
      data: formdata,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
         if (response.status == "success") {
            //     $("#resume").css('display','none');
            $("#resume").valid(true);
            addThumbnail(response);
         }


      }
   });
}

// Added thumbnail
function addThumbnail(data) {
   $(".fileUploaded").css('display', 'block');
   $(".fileUploaded .fileName").text(data.filename);
   $(".fileUploaded .deleteOpt").find('a').attr('data-file', data.filename);
   $(".fileUploaded     .downloadOpt").find('a').attr('href', '/downloadfile?file=' + data.filename);
   $("#resumefile").val(data.filename);


}

// Bytes conversion
function convertSize(size) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (size == 0) return '0 Byte';
   var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
   return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

function deleteFile(e) {
   var filename = $(e).attr('data-file');
   $.ajax({
      url: '/deletefile?file=' + filename,
      type: 'post',
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
         if (response.status == "success") {
            $(".fileUploaded").css('display', 'none');

         }


      }
   });

}
